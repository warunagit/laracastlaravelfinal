-had laravel command not found error
need reinstall composer
-then install laravel in cmd
composer global require laravel/installer

-'vite' is not recognized as an internal or external command,
operable program or batch file. in project,
npm install

-Hosting
php artisan serve
npm run dev --host

-Create tables
php artisan make:migration create_employers_table 

*change default table names to avoid interferences with 'jobs' word of laravel
add 'queued' word fix to table files of jobs listning model

-add changes to db
php artisan migrate:fresh

-Employer table migration model generate with
controller, seed, factory, policy
php artisan make:model Employer -csf --policy

-Job table migration model generate with all 5 classes
table class, factory, seeder, save, update, controller, policy
php artisan make:model Job -all

-add columns to migration files to generate tables

-deploy the tables from migration files
php artisan migrate

-define relationships in model classes
\app\Models\..

-configure factory files
\database\factories\

-write test methods
\phpunit.xml
php artisan make:test -> Unit

files can find under \tests\Unit directory
php artisan test

seed database
