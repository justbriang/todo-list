# ToDo-List

ToDo list is a simple web application to plan your daily tasks. This is primarily not for use as a real world app. Instead it can be used to explore certain features of the technologies used such as:

-   Writing feature and unit tests in laravel and livewire
-   Utilising Eloquent, an object-relational mapper (ORM) that makes it enjoyable to interact with your database.
-   Using Laravel Livewire, a framework for building Laravel powered frontends that feel dynamic, modern, and alive just like frontends built with modern JavaScript frameworks like Vue and React.
-   Using alpinejs, a rugged, minimal tool for composing behavior directly in your markup.

### Features

-   Basic Auth(Register, login, password reset)
-   View a list of all your tasks on you4 dashboard upon logging in.
-   Add a new task containing the data: title, description, and due date, to my list of tasks.
-   View a paginated list of all your tasks
-   Mark task as completed / uncompleted
-   Edit task's details
-   Edit task
-   Delete single task
-   Delete completed tasks
-   see a paginated list of all completed / pending tasks
-   Fast as-you-type search with meili

### Technologies used:

-   [Tailwind CSS](https://tailwindcss.com/)
-   [Alpinejs](https://alpinejs.dev/)
-   [Laravel](https://laravel.com/)
-   [Livewire](https://laravel-livewire.com/)
-   [MeiliSearch](https://www.meilisearch.com/)

### What you need to run the project

-   [php](https://www.php.net/)
-   [MeiliSearch](https://www.meilisearch.com/)
-   [Node](https://nodejs.org/en/)
-   mariadb/mysql Database

## Getting Started

Clone the project repository by running the command below if you use SSH

```bash
git clone git@github.com:justbriang/todo-list-web.git
```

If you use https, use this instead

```bash
git clone https://github.com/justbriang/todo-list-web.git
```

After cloning,run:

```bash
composer install
```

Duplicate `.env.example` and rename it `.env`

Then run:

-   setup your environement variable for your database and meilisearch
-   Run:

    ```bash
    php artisan key:generate
    ```

-   Run Database Migrations

-   Be sure to fill in your database details in your `.env` file before running the migrations:

    ```bash
    php artisan migrate
    ```

-   And finally, start the application:

    ```bash
    php artisan serve
    ```

-   visit [http://localhost:8000/](http://localhost:8000/) to see the application in action.

Alternatively, check out this repo here[https://github.com/justbriang/laravel-docker-local-env] for a template that I use to run laravel application on docker
Instructions on how to set it up are on the repository.
