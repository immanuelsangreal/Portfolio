# Use an official PHP image that includes the Apache Web Server
FROM php:8.1-apache

# Install necessary system libraries and PHP extensions for Symfony
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    && docker-php-ext-install pdo pdo_mysql zip

# Install Composer (the PHP package manager)
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Set the working directory for our website
WORKDIR /var/www/html

# Copy the website files from our repository into the container
COPY . .

# Set the correct file permissions for Symfony's cache/log folders
RUN chown -R www-data:www-data var

# Expose the correct port
EXPOSE 80
