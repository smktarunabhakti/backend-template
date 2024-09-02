# edugateway

**edugateway** is the heart of the [Your Project Name] ecosystem, designed to manage and maintain all the core functionalities required for school management. This Laravel-based core engine acts as a gateway for users, providing access to dashboards, assigned roles, and seamless interaction with various microservices within the system.

## Features

- **User Management**: Handle user authentication, roles, and permissions.
- **Dashboard**: A unified dashboard for all users based on their roles.
- **Role-Based Access Control**: Fine-grained access control for different user roles.
- **Microservice Gateway**: Acts as a central hub for communication between the core engine and other microservices.
- **Data Handling**: Manages and processes core data related to school management.

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

## Repository Rules and Guidelines

This repository is maintained by students, and it's crucial that everyone follows best practices to ensure smooth collaboration and learning.

### 1. **Do Not Commit Directly to the `main` Branch**

- The `main` branch is protected and should always contain stable, production-ready code.
- All changes should be made in separate branches and reviewed before being merged into `main`.

### 2. **Branch Creation and Naming Conventions**

When creating a new branch, use the following guidelines to name and manage branches:

- **Feature Branches**:
  - **Naming Convention**: `feature/description-of-feature`
  - **Example**: `feature/user-authentication`
  - **Usage**: For adding new features or functionalities.

- **Bugfix Branches**:
  - **Naming Convention**: `bugfix/description-of-bug`
  - **Example**: `bugfix/fix-login-error`
  - **Usage**: For fixing bugs or issues in the code.

- **Improvement/Refactor Branches**:
  - **Naming Convention**: `improvement/description-of-improvement`
  - **Example**: `improvement/refactor-user-service`
  - **Usage**: For improving or refactoring existing code without adding new features.

- **Hotfix Branches**:
  - **Naming Convention**: `hotfix/description-of-hotfix`
  - **Example**: `hotfix/fix-critical-bug`
  - **Usage**: For immediate fixes to critical issues in the `main` branch.

### 3. **Working with Branches**

- Always pull the latest changes from the `main` branch before starting any work:
  ```bash
  git checkout main
  git pull origin main
  ```
- Create a new branch for your work:
  ```bash
  git checkout -b feature/your-feature-name
  ```
- Regularly commit your changes with clear, concise commit messages:
  ```bash
  git commit -m "Add user authentication"
  ```
- Push your branch to the remote repository:
  ```bash
  git push origin feature/your-feature-name
  ```

### 4. **Creating Pull Requests**

- Once your work on a branch is complete, create a Pull Request (PR) to merge your branch into the `main` branch.
- Provide a clear title and description for your PR, explaining the changes you’ve made.
- Assign at least one reviewer (e.g., a teacher or peer) to review your code.
- Wait for approval before merging your PR. Do not merge your own PRs.

### 5. **Code Reviews**

- Every PR must be reviewed by at least one other team member before it is merged into `main`.
- During the review, check for:
  - Code quality and readability.
  - Adherence to project standards and guidelines.
  - Testing and validation of the new code.

### 6. **Merging Branches**

- After receiving approval for your PR, merge it into the `main` branch using the “Squash and Merge” or “Rebase and Merge” options to keep the commit history clean.
- After merging, delete the branch to keep the repository tidy.

### 7. **Managing Conflicts**

- If your branch has conflicts with the `main` branch, resolve them before creating a PR.
- If you encounter conflicts during the PR process, notify the reviewer and resolve them before proceeding.

## Usage

- Access the dashboard by navigating to `http://localhost:8000` in your browser.
- Log in using the credentials seeded during installation or create a new user.

## Contributing

Contributions are welcome! Please follow the repository rules outlined above. If you're unsure about something, feel free to ask questions or seek help.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.

## Contact

For any questions or inquiries, please contact [SIMS SMK Taruna Bhakti] at [sims@smktarunabhakti.net].
