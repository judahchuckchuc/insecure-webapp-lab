

````markdown
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
````

2. Navigate to the folder:

   ```bash
   cd insecure-webapp-lab
   ```

3. Start a local server:

   ```bash
   php -S 127.0.0.1:8080
   ```

4. Visit [http://127.0.0.1:8080](http://127.0.0.1:8080) in your browser.



### Option 2: Using XAMPP (Windows/Linux/Mac)

1. Download and install [XAMPP](https://www.apachefriends.org/)
2. Copy the project folder (`insecure-webapp-lab`) to your `htdocs` directory
3. Start Apache and MySQL from XAMPP Control Panel
4. Open your browser and go to:
   [http://localhost/insecure-webapp-lab](http://localhost/insecure-webapp-lab)



## 🧱 Database Setup

Create a database called `vulnerable_lab` and run the following SQL:

```sql
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL
);

CREATE TABLE comments (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50),
  comment TEXT
);
```



## 📁 Folder Structure

```
insecure-webapp-lab/
├── index.php
├── login.php
├── register.php
├── dashboard.php
├── comment.php
├── upload.php
├── logout.php
├── csrf.php
├── db.php
├── style.css
├── uploads/      ← Folder for uploaded files
└── README.md
```



## 🛡️ Disclaimer

This app is **intentionally insecure**. It’s built for **educational use only**. Do not deploy this on any public or production server.



## ✍️ Author

Judah Lotto Madilola — [github.com/YOUR\_USERNAME](https://github.com/YOUR_USERNAME)

```

---

Let me know if you'd like me to customize the README further (add screenshots, demo GIFs, or your GitHub profile link). Or should I bundle everything into a `.zip` for easy upload?
```
