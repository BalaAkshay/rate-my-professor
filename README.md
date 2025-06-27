# Rate My Professor

A web application that allows students to rate and review their professors.

## Features

- User authentication (login/register)
- Rate professors with a rating system
- Submit reviews about professors
- View professor ratings and reviews
- Secure user sessions

## Project Structure

```
rate-my-professor/
├── css/          # Stylesheets
├── db/           # Database files
├── js/           # JavaScript files
├── index.php     # Main entry point
├── login.html    # Login form
├── login.php     # Login processing
├── logout.php    # Logout handler
├── rate.html     # Rating interface
├── register.html # Registration form
├── register.php  # Registration processing
├── submit.php    # Rating submission handler
└── view.php      # View ratings page
```

## Requirements

- PHP 7.4 or higher
- MySQL/MariaDB database
- Web server (Apache/Nginx)
- Modern web browser

## Installation

1. Clone the repository
2. Set up your web server to point to the project directory
3. Create a MySQL database and update the database configuration
4. Import the database schema from `db/`
5. Configure your web server's PHP settings
6. Ensure proper file permissions are set

## Usage

1. Register a new account using the registration form
2. Login with your credentials
3. Navigate to the rating page to submit reviews
4. View professor ratings and reviews

## Security

- Passwords are hashed before storage
- SQL injection prevention
- XSS protection
- CSRF protection
- Secure session management

## Contributing

1. Fork the repository
2. Create your feature branch
3. Commit your changes
4. Push to the branch
5. Create a new Pull Request

## License

This project is licensed under the MIT License - see the LICENSE file for details

## Support

For support, please open an issue in the repository or contact the project maintainer.

## Acknowledgments

- Thanks to all contributors
- Special thanks to the PHP community
