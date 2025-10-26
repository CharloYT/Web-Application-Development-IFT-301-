-- This creates the payroll database if it doesn't exist
CREATE DATABASE IF NOT EXISTS payroll_db;

-- Use the database
USE payroll_db;

-- Creates the employees table
CREATE TABLE IF NOT EXISTS employees (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  role VARCHAR(100) NOT NULL,
  salary DECIMAL(10,2) NOT NULL,
  tax DECIMAL(10,2) DEFAULT 0,
  deductions DECIMAL(10,2) DEFAULT 0,
  net_pay DECIMAL(10,2) DEFAULT 0,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Creates the users table
CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) UNIQUE NOT NULL,
  password VARCHAR(255) NOT NULL
);

INSERT IGNORE INTO users (username, password)
VALUES ('admin', '$2y$10$uXWzv5xE9.zUM1IWyUzp4O8kI9BzVbUkP4Z6ePMt7RkEjQv6xAgsO');