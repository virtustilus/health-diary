# health-dairy
Dairy for your activity, food and health conditions that allows you to find correlation and improve your life

## windows developer preparation
I prepared additional instructions for windows developers beginners:
[WINDOWS_PREPARE.md](WINDOWS_PREPARE.md)

## development start
Please make sure at first that you have nothing on next ports: 80, 9001, 4200, 5432.
Use docker-compose to start development server:

    docker-compose up

When everything is started, you can open in browser:
[http://localhost/](http://localhost)

Now you can list your containers:

    docker ps

To connect to some container, for example php:

    docker exec -it health-diary_php_1 sh -l

Note that on WINDOWS in GitBash command line, you will need to prefix this command with winpty, like:

     winpty docker exec -it health-diary_nodejs_1 sh -l

If you changed some setting in docker-compose settings, use command `docker-compose up --build` to recreate containers with changes.

To open symfony backend, try to open, for example, [http://localhost/admin/](http://localhost/admin/)

All paths that start with /api/, /admin/, /read/, will be processed with symfony backend. 
Other paths will be returned by angular frontend.
It's controlled in [docker/nginx/health-diary.conf](docker/nginx/health-diary.conf).

Paths that start with "/read/" are designed for landing pages.

Checkout our wiki to find some tasks and additional useful information:
[https://github.com/virtustilus/health-diary/wiki/Health-Diary-homepage](https://github.com/virtustilus/health-diary/wiki/Health-Diary-homepage)

## creating database

Since the main point of this README file is to learn these technologies and then start working on the project, we will create database manually.
Connect to database container by 

    docker exec -it health-diary_postgres_1 sh -l

Then use client to work with postgres commands (password is `root`):

    psql -U postgres -W

And now list databases by `\list` command:

    postgres=# \list

Now create new database: `CREATE DATABASE health_diary`

Then connect to PHP container (or open terminal with it, if you already have it open) and run:

    composer install
    php bin/console doctrine:migrations:migrate

Now you have all tables created in database and you need test data:

    
