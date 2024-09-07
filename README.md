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
All modules follow existing Laravel conventions, and auto-discovery
should work as expected in most cases:

- Access the dashboard by navigating to `http://localhost:8000` in your browser.
- Log in using the credentials seeded during installation or create a new user.
- Commands are auto-registered with Artisan
- Migrations will be run by the Migrator
- Factories are auto-loaded for `factory()`
- Policies are auto-discovered for your Models
- Blade components will be auto-discovered
- Event listeners will be auto-discovered

### Create a module

Next, let's create a module:

```shell script
php artisan make:module my-module
```

Modular will scaffold up a new module for you:

```
app-modules/
  my-module/
    composer.json
    src/
    tests/
    routes/
    resources/
    database/
```

It will also add two new entries to your app's `composer.json` file. The first entry registers
`./app-modules/my-module/` as a [path repository](https://getcomposer.org/doc/05-repositories.md#path),
and the second requires `modules/my-module:*` (like any other Composer dependency).

Modular will then remind you to perform a Composer update, so let's do that now:

```shell script
composer update modules/my-module
```

### Optional: Config synchronization

You can run the sync command to make sure that your project is set up
for module support:

```shell script
php artisan modules:sync
```

This will add a `Modules` test suite to your `phpunit.xml` file (if one exists)
and update your [PhpStorm Laravel plugin](https://plugins.jetbrains.com/plugin/7532-laravel)
configuration (if it exists) to properly find your module's views.

It is safe to run this command at any time, as it will only add missing configurations.
You may even want to add it to your `post-autoload-dump` scripts in your application's
`composer.json` file.

### Commands

#### Package Commands

We provide a few helper commands:

- `php artisan make:module`  — scaffold a new module
- `php artisan modules:cache` — cache the loaded modules for slightly faster auto-discovery
- `php artisan modules:clear` — clear the module cache
- `php artisan modules:sync`  — update project configs (like `phpunit.xml`) with module settings
- `php artisan modules:list`  — list all modules

#### Laravel “`make:`” Commands

We also add a `--module=` option to most Laravel `make:` commands so that you can
use all the existing tooling that you know. The commands themselves are exactly the
same, which means you can use your [custom stubs](https://laravel.com/docs/11.x/artisan#stub-customization)
and everything else Laravel provides:

- `php artisan make:cast MyModuleCast --module=[module name]`
- `php artisan make:controller MyModuleController --module=[module name]`
- `php artisan make:command MyModuleCommand --module=[module name]`
- `php artisan make:component MyModuleComponent --module=[module name]`
- `php artisan make:channel MyModuleChannel --module=[module name]`
- `php artisan make:event MyModuleEvent --module=[module name]`
- `php artisan make:exception MyModuleException --module=[module name]`
- `php artisan make:factory MyModuleFactory --module=[module name]`
- `php artisan make:job MyModuleJob --module=[module name]`
- `php artisan make:listener MyModuleListener --module=[module name]`
- `php artisan make:mail MyModuleMail --module=[module name]`
- `php artisan make:middleware MyModuleMiddleware --module=[module name]`
- `php artisan make:model MyModule --module=[module name]`
- `php artisan make:notification MyModuleNotification --module=[module name]`
- `php artisan make:observer MyModuleObserver --module=[module name]`
- `php artisan make:policy MyModulePolicy --module=[module name]`
- `php artisan make:provider MyModuleProvider --module=[module name]`
- `php artisan make:request MyModuleRequest --module=[module name]`
- `php artisan make:resource MyModule --module=[module name]`
- `php artisan make:rule MyModuleRule --module=[module name]`
- `php artisan make:seeder MyModuleSeeder --module=[module name]`
- `php artisan make:test MyModuleTest --module=[module name]`

#### Other Laravel Commands

In addition to adding a `--module` option to most `make:` commands, we’ve also added the same
option to the `db:seed` command. If you pass the `--module` option to `db:seed`, it will look
for your seeder within your module namespace:

- `php artisan db:seed --module=[module name]` will try to call `Modules\MyModule\Database\Seeders\DatabaseSeeder`
- `php artisan db:seed --class=MySeeder --module=[module name]` will try to call `Modules\MyModule\Database\Seeders\MySeeder`

#### Vendor Commands

We can also add the `--module` option to commands in 3rd-party packages. The first package
that we support is Livewire. If you have Livewire installed, you can run:

- `php artisan make:livewire counter --module=[module name]`

#### Blade Components

Your [Laravel Blade components](https://laravel.com/docs/blade#components) will be
automatically registered for you under a [component namespace](https://laravel.com/docs/9.x/blade#manually-registering-package-components).
A few examples:

| File                                                               | Component                      |
|--------------------------------------------------------------------|--------------------------------|
| `app-modules/demo/src/View/Components/Basic.php`                   | `<x-demo::basic />`            |
| `app-modules/demo/src/View/Components/Nested/One.php`              | `<x-demo::nested.one />`       |
| `app-modules/demo/src/View/Components/Nested/Two.php`              | `<x-demo::nested.two />`       |
| `app-modules/demo/resources/components/anonymous.blade.php`        | `<x-demo::anonymous />`        |
| `app-modules/demo/resources/components/anonymous/index.blade.php`  | `<x-demo::anonymous />`        |
| `app-modules/demo/resources/components/anonymous/nested.blade.php` | `<x-demo::anonymous.nested />` |


## Contributing

Contributions are welcome! Please follow the repository rules outlined above. If you're unsure about something, feel free to ask questions or seek help.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.

## Contact

For any questions or inquiries, please contact [SIMS SMK Taruna Bhakti] at [sims@smktarunabhakti.net].
