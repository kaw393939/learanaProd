#Install Instructions
touch database/database.sqlite

and then change the .env for sql to be:

cp .env.example .env

and then replace sql in the .evn to:

DB_CONNECTION=sqlite
DB_DATABASE=<path to sql>/database/database.sqlite

composer install
php artisan migrate:install

Command to run seeds:
php artisan migrate:refresh --seed


Command to generate forms:

php artisan make:form Forms/Registration --fields="course_id:number, section_id:number, publish:checkbox"