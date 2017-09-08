# PHP APP DOCKERIZED

## How to use

<h4>Step 1</h4>
Open docker-compose.yml and configure MySQL database in these services:
 
 ````
     db:
       image: mysql
       container_name: database_php
       volumes:
         - ./data:/var/lib/mysql
       environment:
         - MYSQL_ROOT_PASSWORD=test
         - MYSQL_DATABASE=test
         - MYSQL_USER=test
         - MYSQL_PASSWORD=test
 ````

<h4>Step 2</h4>

Now you are ready to run your docker containers:

````
$ docker-compose up

````
or run docker-compose in background
````
$ docker-compose up -d
````
<h4>Step 3</h4>
Now you can run:

````
https://localhost:5000/

````

<h4>Step 5</h4>

If you want to stop containers use CTRL + C or if you ran containers in background just type:

````
$ docker-compose down
````

Let's have a fun!