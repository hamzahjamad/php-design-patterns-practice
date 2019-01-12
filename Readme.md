## About
This is my personal project to practice design pattern in php

## Build

### Install composer packages

This project is for practice, so we need to install phpunit and all the development packages
```
$ docker run --rm --interactive --tty --volume $PWD:/app --user $(id -u):$(id -g) composer install
```

### Build the image
```
$ docker build -t hamzahjamad/php-design-patterns-practice .
```

## Run

```
$ docker run -it --rm --name practice-php hamzahjamad/php-design-patterns-practice
```
Or use docker compose to build and run the container directly

```
$ docker-compose up
```