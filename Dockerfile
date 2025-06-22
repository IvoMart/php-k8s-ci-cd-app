FROM php:8.4.8-apache

# Install security updates and mysqli extension
RUN apt-get update && apt-get upgrade -y && docker-php-ext-install mysqli && apt-get clean && rm -rf /var/lib/apt/lists/*

COPY /public /var/www/html/
# Informational: Exposes port 80 for HTTP traffic
EXPOSE 80
