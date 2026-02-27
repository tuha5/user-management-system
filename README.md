# User Management System (PHP + MySQL)

A simple **User Management System** built using **PHP** and **MySQL** that demonstrates authentication and CRUD operations.  
This project is designed for learning intermediate backend development concepts.

---

## Features

- User Registration
- User Login & Logout (Session-based authentication)
- Password Hashing (Secure login)
- Dashboard page
- User CRUD Operations
  - Create User
  - Read Users
  - Update User
  - Delete User
- Basic project structure for PHP applications

---

## Technologies Used

- PHP (Core PHP)
- MySQL
- HTML
- CSS (Basic)
- XAMPP (Local Server)

---

## Project Structure
user_system/
│
├── config.php
├── register.php
├── login.php
├── dashboard.php
├── logout.php
├── users.php
├── add_user.php
├── edit_user.php
└── delete_user.php


---

## Database Setup

1. Open **phpMyAdmin**
2. Create database:

```sql
CREATE DATABASE user_system;

Create table:

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

Installation (Local Setup)

Clone the repository:

git clone https://github.com/tuha5/user-management-system.git

Move the project folder into:

xampp/htdocs/

Start:

Apache

MySQL

Open in browser:

http://localhost/user_system

Update database credentials in:

config.php
Security Notes (Basic)

Passwords are stored using password_hash()

Login verification uses password_verify()

Recommended improvements:

Prepared statements (PDO)

Input validation

CSRF protection

Role-based authentication

Future Improvements

Bootstrap UI

Search & Pagination

MVC Structure

REST API integration

Author

Moin Uddin Tuha

GitHub: https://github.com/tuha5

License

This project is for educational purposes.


---

