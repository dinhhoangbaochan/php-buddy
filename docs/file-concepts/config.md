# config.php

Normally, a config file is a file that contains configuration settings for the whole program. 

These settings can be connect information to your database, SMTP information, some key pair values, some information that you don't want to be mutated throught out your program. Therefore, most of the time, data inside `config.php` file are constants.

In this project, you could see that I store the information to connect to my database within `config.php`, and it's a very common practice among many other PHP project. Take WordPress for example, they have a file call `wp-config.php`, which will store all the information you use to connect to the database.