# 🏋️ Sculpt Gym Management System
> *Mind · Soul · Muscle*

A web-based Gym Management System designed to streamline and automate administrative and operational tasks within a fitness center — member registration, attendance tracking, subscription management, trainer scheduling, and financial transactions.

---

## 📌 Table of Contents
- [Overview](#overview)
- [Features](#features)
- [Tech Stack](#tech-stack)
- [System Requirements](#system-requirements)
- [Installation](#installation)
- [Modules](#modules)
- [Database](#database)
- [Screenshots](#screenshots)
- [Future Enhancements](#future-enhancements)
- [Conclusion](#conclusion)

---

## 📖 Overview

The **Sculpt Gym Management System** replaces manual, paper-based gym operations with an automated, centralized solution. It provides real-time insights into gym operations, reduces human errors, and improves communication between members, trainers, and management.

---

## 🚀 Features

- 👤 **Member Registration & Profile Management** – Easy enrollment and tracking of gym members
- 💳 **Subscription & Payment Management** – Handles membership fees, due payments, and renewal notifications
- 📋 **Attendance Tracking** – Monitors check-ins via RFID, biometric, or manual entry
- 🏃 **Trainer & Schedule Management** – Assigns trainers to members and manages workout schedules
- 🥗 **Workout & Diet Plans** – Provides personalized fitness plans based on member goals
- 📊 **Reports & Analytics** – Generates reports on gym performance, revenue, and member activity
- 🏥 **Health Status Monitoring** – Tracks and updates each member's health records
- 📅 **Exercise Routine Management** – Create, edit, and view custom workout routines per client

---

## 🛠️ Tech Stack

| Layer | Technology |
|-------|-----------|
| Frontend | HTML, CSS, JavaScript, Bootstrap |
| Backend | PHP (Core PHP / Laravel) |
| Database | MySQL |
| Web Server | Apache (XAMPP / WAMP / LAMP) |
| Authentication | PHP Sessions + bcrypt password hashing |
| Deployment | Apache Server / AWS / DigitalOcean / cPanel |

---

## 💻 System Requirements

### Hardware
- Processor: Intel i3 or above
- RAM: Minimum 4 GB
- Storage: Minimum 500 GB
- Input/Output: Keyboard, Mouse, Monitor

### Software
- OS: Windows / Linux / macOS
- Web Server: Apache with PHP support
- Database: MySQL
- Browser: Google Chrome, Mozilla Firefox, or Microsoft Edge

---

## ⚙️ Installation

```bash
# 1. Clone the repository
git clone https://github.com/your-username/sculpt-gym-management.git

# 2. Move to your web server's root directory
# For XAMPP: move to /htdocs/
# For WAMP:  move to /www/

# 3. Import the database
# Open phpMyAdmin → Create a new database → Import the provided .sql file

# 4. Configure database connection
# Edit config.php and update:
$host = "localhost";
$user = "root";
$password = "";
$database = "gym_db";

# 5. Start Apache and MySQL via XAMPP/WAMP
# Then visit: http://localhost/sculpt-gym-management
```

---

## 📦 Modules

### 🔐 Admin
- Secure login with session management
- Dashboard with total income, member count, and active plans

### 👥 Members
- New member registration
- View, edit, and delete member profiles
- Track active and expired memberships
- View member health status

### 💰 Payments
- Assign and manage membership plans
- Track payment history and pending dues
- Make payment and confirmation flow

### 📅 Plans
- Create new membership plans with pricing and duration
- Manage and update existing plans

### 📈 Overview / Analytics
- Members per month and per year graphs
- Income per month tracking

### 🏋️ Exercise Routines
- Create 6-day workout routines per client
- Edit and view assigned routines (admin-managed)

### 👤 Profile
- Admin profile page with account management

---

## 🗄️ Database

The system uses **MySQL** with the following key tables:

| Table | Description |
|-------|-------------|
| `user` | Member details (userid, username, gender, mobile, email, dob, joining_date) |
| `admin` | Admin credentials (id, username, pass_key, securekey, full_name) |
| `address` | Member address details |
| `enrolls_to` | Membership enrollment (uid, pid, paid_date, renewal, expire) |
| `membership plans` | Plan details (name, duration, price) |
| `attendance` | Check-in records |
| `routine` | 6-day workout plans per member |

---

## 📸 Screenshots

| Page | Description |
|------|-------------|
| Login Page | Dark-themed login with SCULPT branding |
| Dashboard | Overview of income, members, and plans |
| Registration | New member enrollment form |
| Payment Page | Plan selection and payment processing |
| Member Details | Active and expired membership tables |
| Health Status | Member health record tracking |
| Exercise Routine | 6-day personalized workout plan |

---

## 🔮 Future Enhancements

- 📱 Mobile app support for members
- 🔔 Automated membership renewal notifications
- 🤖 AI-based personalized workout recommendations
- 📊 Advanced analytics and progress tracking
- 💳 Secure online payment gateway integration
- 👥 Multi-user role management (trainer, receptionist, etc.)

---

## ✅ Conclusion

The Sculpt Gym Management System effectively streamlines gym operations by automating member management, payments, attendance, and workout planning. It reduces manual workload, minimizes errors, and provides a user-friendly experience for both admins and members.
