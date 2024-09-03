# edugateway

**edugateway** is the heart of the SIMS Comand Center ecosystem, designed to manage and maintain all the core functionalities required for school management. This Laravel-based core engine acts as a gateway for users, providing access to dashboards, assigned roles, and seamless interaction with various microservices within the system.

## Features

- **User Management and Authentication**: Handles user authentication, roles, and permissions, ensuring that users are authenticated and granted access based on their roles within the system.
- **Role-Based Access Control**: Provides fine-grained access control, allowing different user roles to access specific features and data as appropriate.
- **Custom Role-Based Dashboard**: Offers a unified and customized dashboard for each user role, displaying relevant information and functions tailored to their specific needs.
- **Microservice Gateway**: Acts as a central hub for communication between the core engine and other microservices, facilitating seamless integration and operation.
- **Data Handling**: Manages and processes core data related to school management, ensuring data integrity and availability.
- **Application Integration**: The dashboard integrates with various educational and administrative applications, simplifying user access to these tools.
- **Real-Time Notifications**: Users receive real-time notifications related to important information, ensuring they stay informed and up-to-date.
- **Reports and Analytics**: Provides customizable reports and analytics to meet the specific needs of users, enabling data-driven decision-making.

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/edugateway.git
   ```
2. Navigate into the project directory:
   ```bash
   cd edugateway
   ```
3. Install dependencies via Composer:
   ```bash
   composer install
   ```
4. Create a copy of the `.env` file:
   ```bash
   cp .env.example .env
   ```
5. Generate an application key:
   ```bash
   php artisan key:generate
   ```
6. Set up the database connection in the `.env` file.
7. Run the database migrations:
   ```bash
   php artisan migrate
   ```
8. Seed the database (optional):
   ```bash
   php artisan db:seed
   ```
9. Start the development server:
   ```bash
   php artisan serve
   ```

## Usage

- Access the dashboard by navigating to `http://localhost:8000` in your browser.
- Log in using the credentials seeded during installation or create a new user.

## Contributing

Contributions are welcome! Please follow the repository rules outlined above. If you're unsure about something, feel free to ask questions or seek help.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.

## Contact

For any questions or inquiries, please contact [SIMS SMK Taruna Bhakti] at [sims@smktarunabhakti.net].
