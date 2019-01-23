Symfony version 3.3 
========================


The FOSUserBundle is uesd for the user authentication.
MySQL is used for the Database and Doctrine ORM on Symfony 

TO SETUP THE DATABASE RUN THE FOLLOWING COMMAND
-----------------------------------------------
$ php bin/console doctrine:schema:update --force
$ php bin/console doctrine:mongodb:schema:create --index


TO RUN THE APP
-----------------
$ composer update
$ php bin/console server:run
