FROM php:8.4.9-apache

RUN docker-php-ext-install mysqli
COPY /public /var/www/html/
# Informational: Exposes port 80 for HTTP traffic
EXPOSE 80
