# LumenAPI
REST API implementation with microframework Lumen

# Get started:
clone the code;

go to the project root;

install bundles with command: 'composer install';

in the project root copy .env.example file and rename it to .env;

edit database configuration in the .env file for your requirements;

create database with table using command: 'php artisan migrate';

run Lumen REST API with command: 'php -S localhost:8000 -t public';

go to any API Platform, for example Postman and test REST API at the following endpoints:

## POST: http://localhost:8000/api/loans
You will create a loan record at the database filling out fields: loaner, sum, loan_date

## GET: http://localhost:8000/api/loans
You will get all created loans data from the database

## GET: http://localhost:8000/api/loans/{id}
You will get specific loan data from the database replacing {id} with corresponding record id

## PUT: http://localhost:8000/api/loans/{id}
You will update the specific loan record from the database replacing {id} with corresponding record id and filling out fields: loaner, sum, loan_date

## DELETE: http://localhost:8000/api/loans/{id}
You will delete specific loan data from the database replacing {id} with corresponding record id

## Testing the REST API
In the project root to test application run the command: vendor/bin/phpunit
