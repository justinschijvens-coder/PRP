FROM php:8.2-apache

COPY website/ /var/www/html/

RUN chown -R www-data:www-data /var/www/html

RUN docker-php-ext-install mysqli

RUN a2enmod rewrite
