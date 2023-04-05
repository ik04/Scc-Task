# Auth Api

A Project made using php and laravel for Scc recruitments 2023

## Installation

- Install Php and xampp for windows [here](https://www.apachefriends.org/)

- Install Composer and Laravel for windows [here](https://getcomposer.org/)

- Run mysql and apache on the xampp panel (setup root with no password)

git clone the repo into a folder and paste the following to initialize

```bash
git clone https://github.com/ik04/Scc-Task.git
cd Scc-Task
composer install
cp .env.example .env
php artisan migrate
php artisan serve
```

## Usage
After setup you can now interact with the different routes of the Api
- All routes Are defined in the routes folder (routes/api.php)
- The code for function of each route is in the Usercontroller (app/http/Controllers/UserController.php)
## Precautions
- Please send your requests on http://127.0.0.1:8000/api/[route-param / name]
- Make sure to put in Accept Header (Accept: application/json)
- For all authorized routes (users, users/{hours}, user/{id} and logout) put the Login token in the Authorization Header

