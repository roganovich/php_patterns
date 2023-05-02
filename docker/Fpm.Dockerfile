FROM php:8.1-fpm

WORKDIR /var/www
COPY . /var/www

RUN curl -sS https://getcomposer.org/installer | php -- \
--install-dir=/usr/bin --filename=composer

RUN composer install






