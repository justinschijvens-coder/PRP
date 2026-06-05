FROM php:8.2-apache

COPY website/ /var/www/html/

RUN chown -R www-data:www-data /var/www/html
