Enter laradock folder

copy the .env.example file to .env

search for nginx, mysql, phpmyadmin, php version and change ports as you see fit

Run the command inside the laradock folder
$ docker-compose up -d nginx mysql phpmyadmin

check containers with $ docker ps
and that's it, it's working.
