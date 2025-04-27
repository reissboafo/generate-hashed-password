# Password Hash Generator

A simple, secure web application that generates password hashes using PHP's built-in password hashing functions.

## Features

- Clean, user-friendly interface
- Secure password hashing using PHP's `password_hash()` function with bcrypt
- Copy-to-clipboard functionality
- Responsive design
- XSS protection through `htmlspecialchars()`
- Input validation and sanitization

## Installation

1. Ensure you have a PHP server environment (like MAMP, XAMPP, or similar) installed
2. Clone this repository to your web server's document root:
   ```sh
   git clone https://github.com/reissboafo/hashed-password-generator.git
   ```
3. Access the application through your web browser:
   ```
  UNAVAILABLE CURRENTLY
   ```

## Usage

1. Enter the password you want to hash in the input field
2. Click "Generate Hash" to create the hash
3. The original password and its hash will be displayed
4. Use the "Copy" button to copy the hash to your clipboard

## Security Features

- Uses PHP's secure `PASSWORD_DEFAULT` algorithm (currently bcrypt)
- Implements CSRF protection through POST method
- Sanitizes output to prevent XSS attacks
- Trims input to handle whitespace properly

## Technical Requirements

- PHP 7.0 or higher
- Web server (Apache, Nginx, etc.)
- Modern web browser with JavaScript enabled

## License

[MIT](LICENSE)