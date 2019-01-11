## About
This is my personal project to practice design pattern in php


## Build

### Install composer packages
```
docker run --rm --interactive --tty --volume $PWD:/app --user $(id -u):$(id -g) composer install
```

### Build the image
```
$ docker build -t hamzahjamad/design-pattern-practice-php-cli .
$ docker run -it --rm --name practice-php hamzahjamad/design-pattern-practice-php-cli
```

### Run tests
```
docker run -it --rm --name practice-php hamzahjamad/design-pattern-practice-php-cli php ./vendor/bin/phpunit tests

```