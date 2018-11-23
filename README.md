## This repository was made in educational purposes, in order to find out how symfony routing works.

To run app:

> docker-compose.exe up web

Then open http://localhost

To run composer install:

> docker-compose.exe up composer

To run php script:

> docker-compose.exe run php script.php

Example:

> docker-compose.exe run php bin/console debug:router

Routes are done:
* http://localhost
* http://localhost/api/v1/dogs
* http://localhost/api/v1/dogs/{id}
* http://localhost/api/v1/fogs
* http://localhost/api/v1/fogs/{id} (works only in firefox)
* http://localhost/api/v1/cats
* http://localhost/api/v1/cats/{id}
* http://localhost/api/v1/default (example of default parameters)
* http://localhost/dir/ (example of subroutes from directory)
* http://localhost/dir/{id} (example of subroutes from directory)
* http://localhost/dir/dir2 (example of subroutes from directory)
* http://localhost/dir/dir2/{id} (example of subroutes from directory)

And special route for subdomain. You need to copy .env_dist to .env and fill it with your own hostname. Then open http://sub.{your_host_name}
