
# Pop's Sneakers - Symfony Project

This is a Symfony-based project for **Pop's Sneakers**, an e-commerce platform for buying and selling sneakers. It features admin functionality, user authentication, sneaker management, and more.

## Table of Contents
- [Installation](#installation)
- [Project Overview](#project-overview)
- [Key Features](#key-features)
- [Database Setup](#database-setup)
- [Admin Panel & Security](#admin-panel--security)
- [Fixtures](#fixtures)
- [Contributing](#contributing)
- [License](#license)

## Installation

To get the project up and running, follow these steps:

### Requirements
- PHP 8.1 or above
- Composer
- MySQL (or another database)
- Symfony CLI (optional)

### Steps
1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/your-symfony-project.git
   ```

2. Navigate to the project directory:
   ```bash
   cd your-symfony-project
   ```

3. Install dependencies:
   ```bash
   composer install
   ```

4. Set up your `.env.local` file for database connection:
   - Example for local MySQL setup:
     ```bash
     DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name"
     ```

5. Run the following commands to set up the database:
   ```bash
   php bin/console doctrine:database:create
   php bin/console make:migration
   php bin/console doctrine:migration:migrate
   php bin/console doctrine:fixtures:load
   ```

6. Start the local Symfony server:
   ```bash
   symfony server:start
   ```
   Or using PHP's built-in server:
   ```bash
   php -S localhost:8000 -t public
   ```

## Project Overview

**Pop's Sneakers** is an e-commerce web application where users can browse and purchase sneakers, as well as sell their own. It features user authentication, an admin panel for managing the inventory, and a database-backed structure for storing sneaker data.

### Main Features:
- **Sneaker Listings**: Users can browse a collection of sneakers.
- **Search and Filter**: Search by category, color, price, etc.
- **User Authentication**: Register and log in to manage your sneaker collection or make purchases.
- **Admin Panel**: Manage sneakers, users, and view sales analytics.
- **Newsletter Subscription**: Visitors can subscribe to a newsletter for updates.

## Key Features

### 1. Security and Admin Panel
- The **admin panel** is secured with user roles. Only users with the `ROLE_ADMIN` can access the admin routes. These routes allow for managing sneaker data, adding new sneakers, and handling user reports.
- Security is managed using Symfony's security component, ensuring encrypted passwords and session management.
  
### 2. Database Interaction
- The application uses Doctrine ORM to communicate with the database. The **Sneaker** and **SneakerSell** entities represent the core of the system, with each entity mapping to a database table.
- CRUD operations are handled for managing sneakers, and the database is regularly updated through Doctrine Migrations.

### 3. API Integration (Optional if Applicable)
- If your project integrates any external APIs (for example, payment gateway), you can add a section explaining it.

### 4. Newsletter Feature
- The **NewsletterController** handles user subscriptions. Subscribers are stored in the database, and email notifications can be triggered via Symfony Messenger.

## Database Setup

This project uses MySQL by default, but you can switch to other databases by adjusting your `.env.local` file.

For local development, ensure you have a running MySQL server, and configure your `.env.local` file as follows:

```bash
DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name"
```

After setting up your database, run the migrations and load the fixtures as mentioned in the [Installation](#installation) section.

## Fixtures

Fixtures are pre-configured to load sample data into the database. Use the following command to load the fixtures:

```bash
php bin/console doctrine:fixtures:load
```

This will populate the database with sample sneaker data, making it easier to test the application.

## Contributing

Feel free to contribute to this project! If you'd like to contribute, follow these steps:
1. Fork the repository.
2. Create your feature branch (`git checkout -b feature/new-feature`).
3. Commit your changes (`git commit -m 'Add new feature'`).
4. Push to the branch (`git push origin feature/new-feature`).
5. Open a pull request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.