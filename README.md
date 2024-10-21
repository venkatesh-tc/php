Laravel framework PHP 

Introduction to Laravel framework

Laravel is an open-source PHP framework, which is robust and easy to understand. It follows a model-view-controller design pattern.
Laravel reuses the existing components of different frameworks which helps in creating a web application.
The web application thus designed is more structured and pragmatic.


Advantages of Laravel

The web application becomes more scalable, owing to the Laravel framework.

Considerable time is saved in designing the web application, since Laravel reuses the components from other framework in developing web application.

It includes namespaces and interfaces, thus helps to organize and manage resources.


Requirements need to crosschecked before installation :

PHP having version 7.0 or upper version
An OpenSSL extension for PHP
A PDO extension for PHP
Mbstring extension for PHP
Tokenizer extension for PHP
XML extension for PHP

Installation :

You will have to follow the steps given below for installing Laravel onto your system −

Step 1 − Visit the following URL and download composer to install it on your system.
https://getcomposer.org/download/

Step 2 − After the Composer is installed, check the installation by typing the Composer
![image](https://github.com/user-attachments/assets/2d35fac5-6969-458b-8b0b-b148bd86b5f9)
It should appear like this when u install the composer 

Step 3 − Create a new directory anywhere in your system for your new Laravel project. 
After that, move to path where you have created the new directory and type the following command there to install Laravel.

composer create-project laravel/laravel –-prefer-dist 

Now, we will focus on installation of version 5.7. 
In Laravel version 5.7, you can install the complete framework by typing the following command − 

composer create-project laravel/laravel test dev-develop

The output shown as below
![image](https://github.com/user-attachments/assets/801eed51-ee95-4c99-bd0d-a0e58a115b13

Step 4 − The above command will install Laravel in the current directory. Start the Laravel service by executing the following command.

php artisan serve

Step 5 − After executing the above command, you will see a screen as shown below −

![image](https://github.com/user-attachments/assets/abcab309-ac26-41fd-b4db-b15e270149c3)

Step 6 -Copy the URL underlined in gray in the above screenshot and open that URL in the browser. 
If you see the following screen, it implies Laravel has been installed successfully.

![image](https://github.com/user-attachments/assets/527fad18-0c09-40a0-8001-55e7a4a41e35)












