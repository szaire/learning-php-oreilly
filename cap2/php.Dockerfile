FROM php:8.2-apache
WORKDIR /var/www/html
RUN a2enmod rewrite
RUN docker-php-ext-install mysqli pdo pdo_mysql