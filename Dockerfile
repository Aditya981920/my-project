FROM php:8.2-apache

# MySQL PDO install
RUN docker-php-ext-install pdo pdo_mysql

# Apache rewrite (optional)
RUN a2enmod rewrite

# Copy project
COPY . /var/www/html/

# Permissions
RUN chown -R www-data:www-data /var/www/html
