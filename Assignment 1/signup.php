<?php
session_start();
include 'db.php';

// If you are already logged in, this will redirect you to the dashboard
if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

$error = "";
$success = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Basic validation
    if (empty($username) || empty($password) || empty($confirm_password)) {
        $error = "All fields are required.";
    } elseif ($password !== $confirm_password) {
        $error = "Passwords do not match.";
    } elseif (strlen($password) < 6) {  // Optional: Enforce minimum password length
        $error = "Password must be at least 6 characters long.";
    } else {
        // Check if username already exists
        $stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $error = "Username already exists. Please choose a different one.";
        } else {
            // Hash the password and insert the new user
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
            $stmt->bind_param("ss", $username, $hashed_password);

            if ($stmt->execute()) {
                $success = "Account created successfully! You can now log in.";
                // Optional: Redirect to login after a short delay
                echo "<script>setTimeout(function(){ window.location.href='login.php'; }, 2000);</script>";
            } else {
                $error = "Signup failed. Please try again.";
            }
        }
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Signup - Employee Payroll Tracker</title>
  <link rel="stylesheet" href="login.css">  <!-- Reuses the same CSS as login.php -->
</head>
<body>
  <div class="login-container">  <!-- Reuses the same class for consistent styling -->
    <h2>Employee Payroll Tracker - Signup</h2>
    <form method="POST" class="login-form">  <!-- Reuses the same class -->
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="password" name="confirm_password" placeholder="Confirm Password" required>
      <button type="submit">Sign Up</button>
      <?php if ($error): ?>
        <p class="error"><?= $error ?></p>
      <?php endif; ?>
      <?php if ($success): ?>
        <p class="success"><?= $success ?></p>
      <?php endif; ?>
    </form>
    <p>Already have an account? <a href="login.php">Login here</a>.</p>
  </div>
</body>
</html>