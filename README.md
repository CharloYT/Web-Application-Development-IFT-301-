# Employee Payroll Tracker

## Project Overview

The **Employee Payroll Tracker** is a web-based application designed to help organizations manage employee data and payroll efficiently. It enables users to register employees, calculate salaries, manage login access, and track payroll details through a clean and user-friendly interface.

---

## Collaborators and File Responsibilities

| Collaborator                                         | Task Description                                          | Files/Modules Worked On   |
| ---------------------------------------------------- | --------------------------------------------------------- | ------------------------- |
| **Benson Charles Kelechukwu 23/2710 (CharloYT)**     | Developed and handled database structure setup            | `create_db.php`, `db.php` |
| **Ifeanyichukwu Chiagoziem 23/1461 (Chiagoziem20)**  | Designed and styled the main interface                    | `style.css`               |
| **Adebayo Bushrah Bisola 23/0353 (abi-sola)**        | Built the landing page and homepage logic                 | `index.php`               |
| **Nwagu-Ajana Chidubem Divine 23/1204 (praise2428)** | Developed user authentication (login system)              | `login.php`               |
| **Ahanonu Chinemerem Samuel 23/0844 (Urusendayo18)** | Created the sign-up functionality                         | `signup.php`              |
| **Eze Stephen Chigbogu 23/1051 (EzeStephen1)**       | Implemented the logout function and session handling      | `logout.php`              |
| **Chijioke Chidiebube 23/2296 (ebube144)**           | Styled the login and signup pages                         | `login.css`               |
| **Ezechukwu Chidubem Michael 24/2830 (cockydubem)**  | Prepared the project documentation and final presentation | `README.md`               |

---

## Technologies Used

- **Frontend:** HTML and CSS,
- **Backend:** PHP (MySQL)
- **Database:** MySQL
- **Server Environment:** XAMPP & WAMP (Apache, PHP, MySQL)
- **Version Control:** Git & GitHub

---

## Project Workflow

1. **Planning & Design:**

   - Defined the goals and database structure.
   - Distributed roles and created a task timeline.

2. **Development:**

   - Each member worked on assigned files in separate branches.
   - Regular Git commits and code reviews ensured progress and consistency.

3. **Integration & Testing:**

   - Merged all modules into a single working application.
   - Debugged code for errors in database connections and authentication.

4. **Presentation:**

   - Final documentation and demo created by **Ezechukwu Chidubem Michael** 24/2830 (cockydubem) .

---

## Database Schema Explanation

**Database Name:** `payroll_db`

**Tables Overview:**

| Table Name  | Purpose                                    |
| ----------- | ------------------------------------------ |
| `employees` | Stores employee personal and job details.  |
| `role`      | Keeps track of the job position.           |
| `payroll`   | Records salaries, deductions, and net pay. |
| `users`     | Manages admin login credentials.           |

---

## Challenges Faced

- Merge conflicts during Git collaboration.
- Database connection errors in PHP.
- Layout inconsistencies between CSS files.
- Difficulty debugging login and signup forms.
- Synchronizing tasks among 8 members with different schedules.

---

## Key Takeaways

- Strengthened collaboration using **Git and GitHub**.
- Improved **backend scripting** and **frontend styling** skills.
- Understood real-world teamwork and task division.
- Gained hands-on experience in **database-driven web applications**.

---

## How to Run the Project

1.  Install **XAMPP** or **WAMP** on your local machine.
2.  Move the project folder to the `htdocs` on **XAMPP** or `www` on **WAMP**directory.
3.  Start **Apache** and **MySQL** from the XAMPP or WAMP control panel.
4.  Run the `create_db.php` file once to set up the database.
5.  Open the browser and type in:

    ```
    http://localhost/Group-3/Assignment 1/create_db.php
    ```

    then type in:

    ```
    http://localhost/Group-3/Assignment 1/login.php
    ```
