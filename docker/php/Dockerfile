FROM php:7-fpm-alpine

COPY ./php.ini  /usr/local/etc/php/conf.d/php.ini
COPY ./zzz-docker.conf /usr/local/etc/php-fpm.d/zzz-docker.conf

RUN apk add --no-cache --update --virtual buildDeps autoconf gcc libc-dev build-base wget git grep

RUN pecl install -o -f xdebug-2.7.0beta1 \
    &&  rm -rf /tmp/pear MonologBundle\
    &&  docker-php-ext-enable xdebug

COPY ./docker-php-ext-xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

RUN apk add --no-cache --update postgresql-dev
RUN docker-php-ext-install pdo pdo_pgsql

RUN docker-php-ext-install mbstring

RUN apk add --no-cache --update zlib zlib-dev icu icu-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl

RUN apk add --no-cache --update libzip-dev libzip \
    && docker-php-ext-install zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/backend