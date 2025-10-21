<?php include 'db.php'; ?>

<?php
// Handle POST (Add Employee)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $role = $_POST['role'];
    $salary = $_POST['salary'];

    $tax = $salary * 0.1;  
    $deductions = $salary * 0.05; 
    $net_pay = $salary - ($tax + $deductions);

    $stmt = $conn->prepare("INSERT INTO employees (name, role, salary, tax, deductions, net_pay) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssdddd", $name, $role, $salary, $tax, $deductions, $net_pay);
    $stmt->execute();
    $stmt->close();
}

// Handle GET filter
$filter = isset($_GET['role']) ? $_GET['role'] : '';
$sql = $filter ? "SELECT * FROM employees WHERE role='$filter'" : "SELECT * FROM employees";
$result = $conn->query($sql);

// Summary totals
$summary = $conn->query("SELECT SUM(salary) AS total_salary, SUM(net_pay) AS total_net FROM employees")->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Employee Payroll Tracker</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h1>💼 Employee Payroll Tracker</h1>

  <form method="POST" class="payroll-form">
    <input type="text" name="name" placeholder="Employee Name" required>
    <input type="text" name="role" placeholder="Role" required>
    <input type="number" name="salary" placeholder="Salary (₦)" required>
    <button type="submit">Add Employee</button>
  </form>

  <form method="GET" class="filter">
    <select name="role">
      <option value="">All Roles</option>
      <?php
      $roles = $conn->query("SELECT DISTINCT role FROM employees");
      while ($r = $roles->fetch_assoc()) {
          $selected = ($filter == $r['role']) ? 'selected' : '';
          echo "<option value='{$r['role']}' $selected>{$r['role']}</option>";
      }
      ?>
    </select>
    <button type="submit">Filter</button>
  </form>

  <table>
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Role</th>
        <th>Salary</th>
        <th>Tax</th>
        <th>Pensions</th>
        <th>Net Pay</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if ($result->num_rows > 0) {
          $i = 1;
          while ($row = $result->fetch_assoc()) {
              echo "<tr>
                      <td>{$i}</td>
                      <td>{$row['name']}</td>
                      <td>{$row['role']}</td>
                      <td>₦" . number_format($row['salary'], 2) . "</td>
                      <td>₦" . number_format($row['tax'], 2) . "</td>
                      <td>₦" . number_format($row['deductions'], 2) . "</td>
                      <td>₦" . number_format($row['net_pay'], 2) . "</td>
                    </tr>";
              $i++;
          }
      } else {
          echo "<tr><td colspan='7'>No employees found.</td></tr>";
      }
      ?>
    </tbody>
  </table>

  <div class="summary">
    <p><strong>Total Salary:</strong> ₦<?= number_format($summary['total_salary'] ?? 0, 2) ?></p>
    <p><strong>Total Net Pay:</strong> ₦<?= number_format($summary['total_net'] ?? 0, 2) ?></p>
  </div>
</div>
</body>
</html>
