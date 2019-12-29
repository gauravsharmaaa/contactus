# contactus
Contact us page for laravel 5 app with database support

This package lets fresh laravel installation to have a contact us page available @/contact-us with database support.

# Installation
Once you have a laravel 5 app installed on your server and connected to database,you are good to go,just grab the package with 

composer require sharmag/contactus

after processing finishes

add the following entry to the provider array in config/app.php

Sharmag\Contactus\ContactusServiceProvider::class, 

and run following artisan commands

php artisan vendor:publish
php artisan migrate

and then check the page at https://yourserver.com/contact-us
