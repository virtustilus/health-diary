FROM php:7-fpm-alpine

RUN apk add --no-cache --update --virtual buildDeps autoconf gcc libc-dev build-base wget git grep

RUN pecl install -o -f xdebug \
    &&  rm -rf /tmp/pear MonologBundle\
    &&  docker-php-ext-enable xdebug

RUN apk add --no-cache --update postgresql-dev
RUN docker-php-ext-install pdo pdo_pgsql

RUN apk add --no-cache --update zlib zlib-dev icu icu-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl

RUN apk add --no-cache --update libzip-dev libzip \
    && docker-php-ext-install zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY ./zzz-docker-php-ext-xdebug.ini /usr/local/etc/php/conf.d/zzz-docker-php-ext-xdebug.ini
COPY ./php.ini  /usr/local/etc/php/conf.d/php.ini
COPY ./zzz-docker.conf /usr/local/etc/php-fpm.d/zzz-docker.conf

EXPOSE 9000

WORKDIR /var/www/backend