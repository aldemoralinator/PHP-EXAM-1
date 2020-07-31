### DATABASE SETUP

1. CREATE DATABASE contactsapp; 


2. CREATE USER 'aldem'@'localhost' IDENTIFIED BY 'secret';


3. GRANT ALL PRIVILEGES ON contactsapp.* TO 'aldem'@'localhost';


### To Run:

1. php artisan migrate:fresh

2. php artisan serve
