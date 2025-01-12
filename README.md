# PHP Framework Thinking

This is a simple PHP framework for learning and understanding the basics of routing and controllers in PHP.

## Requirements

- PHP 7.4 or higher
- Composer
- XAMPP or any other local server setup

## Installation

1. Clone the repository:

   ```sh
   git clone https://github.com/minsuwai/php-framework-thinking
   ```

   Make sure to replace `https://github.com/minsuwai/php-framework-thinking` with the actual URL of your repository.

2. Navigate to the project directory:

   ```sh
   cd php-framework-thinking
   ```

3. Start the PHP built-in server:

   ```sh
   php -S localhost:8000
   ```

4. Open your browser and navigate to `http://localhost:8000`.

## Project Structure

- : The entry point of the application.
- : Handles the routing of the application.
- : Bootstraps the application.
- : Defines the routes for the application.
- : Contains the controller files.

## Defining Routes

Routes are defined in the file. Here is an example:

```php
$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php');
$router->post('contact', 'controllers/contact.php');
```
