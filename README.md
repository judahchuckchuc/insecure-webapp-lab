# 🧪 Insecure WebApp Lab

This is a deliberately vulnerable PHP web application built for **learning**, **testing**, and **showcasing** common web vulnerabilities. It's a great project for anyone exploring both **web development** and **cybersecurity**.

> ⚠️ For educational purposes only. Do **not** upload this to a live/public server!

---

## 🔍 What It Shows

This app demonstrates:

- ✅ Basic web development (HTML, CSS, PHP)
- ❌ Common web vulnerabilities:
  - SQL Injection
  - Cross-Site Scripting (XSS)
  - Cross-Site Request Forgery (CSRF)
  - Weak password storage
  - Insecure file upload

---

## 🗂️ Pages & Features

| Page             | Feature                                      | Vulnerability              |
|------------------|----------------------------------------------|----------------------------|
| `register.php`   | Register a new user                          | No input validation        |
| `login.php`      | Login with username & password               | SQL Injection              |
| `dashboard.php`  | Protected page for logged-in users           | None (basic session check) |
| `comment.php`    | Leave a comment                              | Stored XSS                 |
| `upload.php`     | Upload a file                                | No file type checks        |
| `csrf.php`       | Change password without CSRF protection      | CSRF                       |

---

## 🛠️ How to Run It

### Option 1: Using Termux

1. Install PHP in Termux:
   ```bash
   pkg install php
