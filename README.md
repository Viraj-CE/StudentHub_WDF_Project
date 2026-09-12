# StudentHub — ITUE203 Web Development Frameworks

A semester practical project covering project planning, semantic HTML5, responsive CSS, JavaScript DOM/events, form validation, Fetch/JSON, PHP form processing, MySQL, secure registration/login, CRUD, uploads, JSON APIs, role-based admin dashboard and integration.

## Requirements
- XAMPP with Apache, PHP 8+, and MySQL/MariaDB
- A modern browser and a code editor

## Run locally
1. Copy the `StudentHub_WDF_Project` folder into `C:\xampp\htdocs\` (or your Apache document root).
2. Start Apache and MySQL in XAMPP.
3. Open phpMyAdmin and import `sql/studenthub.sql`.
4. Review `includes/config.example.php`; copy it to `includes/config.php` and set local database credentials. Defaults match common XAMPP settings.
5. Visit `http://localhost/StudentHub_WDF_Project/`.
6. For the static JSON practical, use the same Apache URL (Fetch requests may be blocked when opening files directly with `file://`).

## Admin setup
Register an account through the website first. To make it an administrator for local practical testing, run this in phpMyAdmin after replacing the email with your registered address: `UPDATE users SET role='admin' WHERE email='your-email@example.com';`. Use the password you chose during registration. Do not promote public accounts in a deployed system.

## Main modules
- Public pages: Home, About, Events, FAQ, Contact, Feedback
- Account: Register, Login, Student Dashboard, Profile, Logout
- Admin: Dashboard, Student CRUD, Event CRUD and poster validation
- API: JSON CRUD endpoints consumed by Fetch without page reload

## Notes
- This is an educational local-development project, not a production deployment. Set environment-specific credentials, HTTPS, CSRF protection, rate limiting, backups and stronger operational controls before production use.
- The PHP code uses MySQLi prepared statements, password hashing, session ID regeneration, role checks, basic session timeout, upload type/size checks and output escaping where applicable.
- Practical 1 includes planning artifacts in `docs/`.
