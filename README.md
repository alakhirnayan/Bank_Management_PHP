

````markdown
# Net Banking System

This repository contains a fully functional web-based **Net Banking System** developed using **PHP**, **MySQL**, **HTML**, **CSS**, and **JavaScript**. It simulates core banking features for both **customers** and **administrators**, including account management, fund transfers, beneficiary handling, loan processing, and secure user authentication.

---

## Features

### 1. Customer Portal
- **Login/Logout System** with session handling
- **Profile Management** with editing and password/PIN change functionality
- **Fund Transfer** to registered beneficiaries
- **Beneficiary Management** (Add/Delete/Auto-Verify)
- **Loan Application System**
- **Transaction History** via passbook
- **Session Timeout Control** for idle users
- **Responsive UI** for mobile and desktop devices

### 2. Admin Portal
- **Admin Authentication**
- **Customer Management** (Add/Edit/Delete)
- **News Management** for system-wide updates
- **Customer Activity Monitoring**
- **Loan Oversight**
- **Beneficiary Verification**

---

## Technologies Used

- **Frontend**: HTML5, CSS3 (custom Flexbox layout), JavaScript (vanilla + jQuery)
- **Backend**: PHP (Procedural), MySQL
- **Database**: Structured with tables for customers, admins, transactions, loans, news, and beneficiaries
- **Security Practices**:
  - Custom session validation
  - Password and PIN handling (requires improvement; see Security section)
  - Input sanitization (basic level)

---

## Setup Instructions

1. **Clone the Repository**
   ```bash
   git clone https://github.com/alakhirnayan/Bank_Management_PHP
   cd Bank_Management_PHP
````

2. **Configure Database**

   * Create a database named `net_banking`
   * Import the SQL dump:

     ```sql
     SOURCE net_banking.sql;
     ```

3. **Configure PHP**

   * Ensure Apache with PHP and MySQL (XAMPP/LAMP/WAMP)
   * Place the project in your web directory (e.g., `htdocs`)

4. **Edit Connection Parameters**

   * Modify `connect.php` to match your local DB credentials:

     ```php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "net_banking";
     ```

---

## Project Structure

```
/admin_*                # Admin panel files
/atm_simulator*         # ATM simulation module
/beneficiary*           # Beneficiary management
/customer_*             # Customer-facing modules
/news*                  # News posting and display
/send_funds*            # Fund transfer logic
/session_*              # Session and timeout handling
/connect.php            # Database connection
/fonts.css              # Font imports
*.css                   # Responsive and themed UI styles
net_banking.sql         # Database schema and sample data
```

---

## Security Recommendations

This project works well as a prototype but contains several critical security issues that should be addressed before production use:

* **Password Security**: Currently uses plaintext passwords. Replace with `password_hash()` and `password_verify()` functions.
* **SQL Injection**: Queries should use prepared statements instead of concatenated strings.
* **Session Management**: Add session regeneration and expiration controls.
* **CSRF Protection**: Implement CSRF tokens on all forms.
* **Audit Logging**: Add logging for logins, fund transfers, and admin actions.
* **Encryption**: PINs and sensitive information should be encrypted or hashed.

---

## UI/UX Design Notes

* Responsive via media queries for screens under 855px and 540px
* Layouts use Flexbox extensively
* Consistent branding using Roboto and OpenSans fonts
* Custom-styled buttons, modals, dropdowns, and forms
* Separate CSS for admin and customer themes
* CSS image-based controls (radio/select/search) may degrade without image availability

---

## License

This project is open-source. Please check `LICENSE` file for details.

---

## Acknowledgments

This project was originally developed as a commissioned solution for a client organization. It demonstrates the core features of an online banking system using PHP and MySQL, and serves as a full-stack simulation of secure financial services functionality.

All code was authored and structured independently with a focus on modularity, security, and responsive user experience.

```

---

Let me know if you'd like to tailor the README for deployment on platforms like Heroku, or convert it into a documentation site with GitHub Pages or MkDocs.
```
