FROM php:8.4-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql

COPY src/ /var/www/html/

WORKDIR /vwr/www/html

RUN chown -R www-data:www-data /var/www/html/

EXPOSE 80