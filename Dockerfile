FROM php:8.2-apache

# Install git (which might be required by Composer for fetching certain dependencies) and unzip (Composer needs it to unpack archives)
RUN apt-get update && apt-get install -y git unzip

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install mysqli pdo pdo_mysql
