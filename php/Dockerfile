FROM php:8.4-apache

RUN apt-get update && apt-get install -y zip git
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install sockets

WORKDIR /var/www/html

COPY ./src ./src
COPY composer.json ./composer.json
COPY composer.lock ./composer.lock

RUN chown -R www-data:www-data /var/www/html

USER www-data

RUN composer install --optimize-autoloader --no-dev

EXPOSE 80