Khong Test of Laravel
=======
This small Laravel project is written for a test purpose. 
---
Here is the environment that I'm using:
 - PHP 7.2
 - MySQL 8.0.15 for Linux on x86_64
 - Laravel 5.8

First of all, you will need to connect to your mysql server to create a user and the database you are going to use. For those who are not familiar with MySQL, please refer to the <a href="https://dev.mysql.com/doc/refman/8.0/en/">official document.</a>

Attention: Since MySQL 8 is not using legacy authentication type by default any more. Consider to change it for the uesr you have just created if there is a connection error occurs.

Then run the command "laravel new [project-name]".

Then you could change the .env file with the username and database you just created.
 - Example:
 	- DB_CONNECTION=mysql
	- DB_HOST=127.0.0.1
	- DB_PORT=3306
	- DB_DATABASE=your_database_name
	- DB_USERNAME=your_user_name
	- DB_PASSWORD=your_password 
 ---
Afterwards, please run the commands below:
 - composer update
 - php artisan migrate
 - php artisan db:seed
 - php artisan serve

Then you are free to go to the address 127.0.0.1:8000 to start the demo :)

License
---
This project is adapted from the MIT license. For more detailed explanation, please see [Wiki](https://github.com/kattgu7/996-License-Draft/wiki). This license is designed to be compatible with all major open source licenses. Thank you.