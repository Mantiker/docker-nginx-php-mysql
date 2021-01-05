## Available configuration
###### (use only pure official images from docker hub)
- nginx 1.19
- php-fpm 7.1
- mysql 5.7

## Description directories:

- configs - config files for containers
- data - files with data (ex. mysql database)
- docker-images - directory with Dockerfiles
- locals - local files only for your project
- logs

## How to start

- copy directory ".docker" into "your project directory"
- change .docker/.env
- check configs for your versions in .docker/configs
- run command
```shell
docker-compose up -d --build
```
- watch web in localhost/ (example in this repository http://localhost/phpinfo.php)
- watch adminer in localhost:8080/

## Stop

```shell
docker-compose down
```

## Check running containers

```shell
docker-compose ps
```

## Get into container (example)

```shell
docker-compose exec mysql bash
```

## TODO

- get php error logs
- check and add basic modules to php 7.1
- add php 7.0, 7.2, 7.3, 7.4
- add php 5.6
- add extra mysql versions
- add ability to use https protocol
- add pgsql
