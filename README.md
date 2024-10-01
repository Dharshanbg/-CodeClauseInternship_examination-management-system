# -CodeClauseInternship_examination-management-system

Here’s a human-friendly README file for your **Examination Management System** project:

---

# Examination Management System

This project is an Examination Management System designed for educational institutions. It provides functionalities for both admins and students, allowing for smooth exam management, student registration, and hall ticket generation.

## Features

- **Admin Dashboard**: Admins can log in, create exams, and assign students to specific exams.
- **Student Dashboard**: Students can log in, view their exams, fill out exam forms, and download their hall tickets.
- **Hall Ticket Generation**: Students can download their hall tickets in PDF format.
- **Email Notifications**: Students receive email notifications when their exam forms are approved.
- **Dynamic Form Creation**: Admins can create forms for students to fill out for specific exams.

## Technologies Used

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **PDF Generation**: FPDF library
- **Other**: Email functionality for notifications

## File Structure

```
/examination-management-system
│
├── /css
│   └── styles.css             # Styling for the frontend
│
├── /fpdf
│   └── fpdf.php               # Library for PDF generation
│
├── /sql
│   └── exam_system.sql        # Database schema for the project
│
├── admin-dashboard.php        # Admin dashboard for managing exams
├── admin.php                  # Backend logic for creating exams
├── auth.php                   # Handles login and authentication
├── db.php                     # Database connection file
├── hallticket.php             # PDF generation for hall tickets
├── login.html                 # Login page for admin and students
├── student-dashboard.php      # Student dashboard for viewing exams and downloading hall tickets
├── README.md                  # This file
└── index.php                  # Optional landing page
```

## How to Set Up and Run the Project

1. **Clone the Repository**:
   ```
   git clone <repo-url>
   ```

2. **Database Setup**:
   - Import the SQL file located at `/sql/exam_system.sql` into your MySQL database to set up the required tables.
   - Update the database connection details in `db.php` (such as `DB_HOST`, `DB_USER`, `DB_PASS`, `DB_NAME`).

3. **Install FPDF Library**:
   - Make sure the FPDF library is in the `/fpdf` folder for PDF generation.

4. **Running the Project**:
   - Start a local server using XAMPP, WAMP, or any other tool.
   - Place the project folder in your `htdocs` directory (for XAMPP) or equivalent.
   - Access the project in your browser at `http://localhost/examination-management-system/login.html`.

5. **Admin Credentials**:
   - Use the admin credentials set in the database to log in as an admin and start managing exams.
   - Add student accounts through the admin dashboard.

6. **Students**:
   - Students can log in using their credentials to view exams and download hall tickets.

## What You Will Learn

- Handling user authentication and authorization.
- Admin functionalities for exam management.
- Creating dynamic forms for exam details.
- Managing databases for student and exam information.
- Generating PDFs and sending email notifications.

## Future Improvements

- Adding more exam-related features like grading.
- Improved UI for a better user experience.
- SMS notifications in addition to emails.
