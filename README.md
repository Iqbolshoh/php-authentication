# PHP Authentication System

![Banner](images/banner.png)

This repository contains a user authentication system built with PHP and MySQL. It includes features such as user registration, login, and logout functionalities.

## Table of Contents

- [Project Structure](#project-structure)
- [Installation](#installation)
- [Usage](#usage)
- [Files Description](#files-description)
- [Technologies Used](#technologies-used)
- [Contributing](#contributing)
- [Contact](#contact)

## Project Structure

The project structure is as follows:

```
.
├── css
│   ├── styles.css
│   ├── signup.css
│   ├── login.css
├── images
│   ├── banner.png
│   ├── login.png
│   ├── signup.png
├── config.php
├── database.sql
├── index.php
├── login
│   ├── index.php
├── logout
│   ├── index.php
├── signup
│   ├── index.php
├── README.md
```

## Installation

To run this project locally, follow these steps:

1. Clone the repository:
   ```bash
   git clone https://github.com/iqbolshoh/php-authentication.git
   ```
2. Navigate to the project directory:
   ```bash
   cd php-authentication
   ```
3. Make sure you have a local server setup (e.g., XAMPP, WAMP, MAMP) and place the project files in the server's root directory.

4. Import the database:
   - Open your MySQL database management tool (e.g., phpMyAdmin).
   - Create a new database.
   - Import the `database.sql` file into the new database.

5. Update the database configuration:
   - Open `includes/config.php` and update the database connection details.

## Usage

To use the application, open your browser and navigate to `http://localhost/php-authentication`. This will load the main page of the application.

### User Registration

1. Go to the signup page (`signup/`).
2. Fill out the registration form and submit it.
3. Upon successful registration, you will be redirected to the login page.

![Signup](images/singup.png)

### User Login

1. Go to the login page (`login/`).
2. Enter your credentials and submit the form.
3. Upon successful login, you will be redirected to the index page (`index.php`).

![Login](images/login.png)

### User Logout

1. Click the logout button or navigate to the logout page (`logout.php`).
2. You will be logged out and redirected to the login page.

## Files Description

### Directories

- **css/**: Contains custom CSS files for styling.
  - **styles.css**: Custom styles for the application.
- **images/**: Contains image files used in the application.
  - **banner.png**: Banner image for the README file.
  - **login.png**: Screenshot of the login page.
  - **signup.png**: Screenshot of the signup page.
- **includes/**: Contains configuration and other include files.
  - **config.php**: Database configuration file.
- **sql/**: Contains SQL files.
  - **database.sql**: SQL file to create and populate the database.

### PHP Files

- **index.php**: Main entry point of the application after login.
- **login/**: Handles user login functionality.
- **logout.php**: Handles user logout functionality.
- **signup/**: Handles user registration functionality.

## Technologies Used

- ![HTML5](https://img.icons8.com/color/48/000000/html-5.png) **HTML5**
- ![CSS3](https://img.icons8.com/color/48/000000/css3.png) **CSS3**
- ![PHP](https://img.icons8.com/officel/40/000000/php-logo.png) **PHP**
- ![MySQL](https://img.icons8.com/ios-filled/50/000000/mysql-logo.png) **MySQL**

## Contributing

Contributions are welcome! If you have any suggestions, bug reports, or feature requests, feel free to open an issue or submit a pull request.

1. Fork the repository.
2. Create your feature branch (`git checkout -b feature/YourFeature`).
3. Commit your changes (`git commit -m 'Add YourFeature'`).
4. Push to the branch (`git push origin feature/YourFeature`).
5. Open a pull request.

## Connect with Me

I love connecting with new people and exploring new opportunities. Feel free to reach out to me through any of the
platforms below:

<table>
    <tr>
        <td>
            <a href="https://t.me/iqbolshoh_777">
                <img src="https://github.com/gayanvoice/github-active-users-monitor/blob/master/public/images/icons/telegram.svg"
                    height="48" width="48" alt="Telegram" />
            </a>
        </td>
        <td>
            <a href="https://instagram.com/iqbolshoh_777" target="blank"><img align="center"
                    src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/instagram.svg"
                    alt="instagram" height="48" width="48" /></a>
        </td>
        <td>
            <a href="https://wa.me/qr/22PVFQSMQQX4F1">
                <img src="https://github.com/gayanvoice/github-active-users-monitor/blob/master/public/images/icons/whatsapp.svg"
                    height="48" width="48" alt="WhatsApp" />
            </a>
        </td>
        <td>
            <a href="https://x.com/iqbolshoh_777">
                <img src="https://img.shields.io/badge/X-000000?style=for-the-badge&logo=x&logoColor=white" height="48"
                    width="48" alt="Twitter" />
            </a>
        </td>
        <td>
            <a href="https://www.linkedin.com/in/iqbolshoh/">
                <img src="https://github.com/gayanvoice/github-active-users-monitor/blob/master/public/images/icons/linkedin.svg"
                    height="48" width="48" alt="LinkedIn" />
            </a>
        </td>
        <td>
            <a href="mailto:iilhomjonov777@gmail.com">
                <img src="https://github.com/gayanvoice/github-active-users-monitor/blob/master/public/images/icons/gmail.svg"
                    height="48" width="48" alt="Email" />
            </a>
        </td>
    </tr>
</table>
