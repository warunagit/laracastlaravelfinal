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
php artisan migrate:fresh --seed

create controllers as need Routes
php artisan make:controller SessionController --resource

to upload files, should enable on .env file
FILESYSTEM_DISK=local -> FILESYSTEM_DISK=public
files will upload to \storage\app\public

make controller class with __invoke method
it is a single action class to handle searches and results

private images converted to public link
php artisan storage:link
had to add src='storage/
