## This repository was made in educational purposes, in order to find out how symfony routing works.

To run app:

> docker-compose.exe up web

Then open [localhost:8000](http://localhost:8000)

***

To run app through php-fpm + nginx:

> docker-compose.exe up nginx

Then open [localhost:8005](http://localhost:8005)

Read more:
- [nginx config](https://symfony.com/doc/current/setup/web_server_configuration.html)
- [nginx & php-fpm docker](https://hub.docker.com/r/bitnami/php-fpm/)

***

To run composer install:

> docker-compose.exe up composer

***

To run php script:

> docker-compose.exe run php script.php

Example:

> docker-compose.exe run php bin/console debug:router

***

There is special route for subdomain. You need to copy .env_dist to .env and fill it with your own hostname. Then open http://sub.{your_host_name}

***

TODO:
- Implement phpunit via docker
- Implement xdebug via docker
