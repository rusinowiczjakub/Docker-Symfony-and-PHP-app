# Symfony APP DOCKERIZED


## How to use

<h4>Step 1</h4>

Create your Symfony App with Symfony installer in Symfony-docker-app directory:

````
$ symfony new YOUR_PROJECT_NAME
```` 
<h4>Step 2</h4>
Open docker-compose.yml and configure MySQL database and your project directory name in these services:

````
  php:
    container_name: PHP
    build: ./docker/php/
    volumes:
      - ./docker/php/php.ini://local/etc/php/php.ini:ro
      - ./YOUR_PROJECT_NAME:/var/www/YOUR_PROJECT_NAME
    working_dir: /var/www/YOUR_PROJECT_NAME
    links:
      - db
      
   ...
   
  db:
    image: mysql
    container_name: mySQL
    volumes:
      - ./data:/var/lib/mysql
    environment:
      - MYSQL_ROOT_PASSWORD=test
      - MYSQL_DATABASE=test
      - MYSQL_USER=test
      - MYSQL_PASSWORD=test
      
  composer:
    container_name: Composer1.4
    image: composer:1.4
    working_dir: /var/www/YOUR_PROJECT_NAME
````

<h4>Step 3</h4>

Now you are ready to run your docker containers:

````
$ docker-compose up

````
or run docker-compose in background
````
$ docker-compose up -d
````
<h4>Step 4</h4>
Now you just have to set your database config in parameters.yml and you can run:

````
https://localhost:5080/app.php

````

If you want to get into Symfony development mode, go into /web/app_dev.php and comment this lines:

```php
if (isset($_SERVER['HTTP_CLIENT_IP'])
    || isset($_SERVER['HTTP_X_FORWARDED_FOR'])
    || !(in_array(@$_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1'], true) || PHP_SAPI === 'cli-server')
) {
   //header('HTTP/1.0 403 Forbidden');
   //exit('You are not allowed to access this file. Check '.basename(__FILE__).' for more information.');
}

```

and now you will have access to get into:
````
https://localhost:5080/app_dev.php
````

<h4>Step 5</h4>

If you want to stop containers use CTRL + C or if you ran containers in background just type:

````
$ docker-compose down
````
