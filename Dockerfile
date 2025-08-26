# Laravel 6 with PHP 7.4 ve Apache server
FROM php:7.4-apache
# needed system libraries
# for gd:  libfreetype6-dev; for zip: libzip-dev; for mbstring: libonig-dev
RUN apt-get update && apt-get install -y \
    git \
    curl \
    unzip \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libicu-dev \
    libxml2-dev \
    libonig-dev \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# PHP extensions for Laravel and dompdf
RUN docker-php-ext-install \
    pdo_mysql \
    gd \
    mbstring \
    zip \
    intl \
    exif \
    pcntl \
    bcmath \
    opcache

# Enabling mod_rewrite module for Apache's "pretty URLs"
RUN a2enmod rewrite

# Install Composer globally
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Setting working directory
WORKDIR /var/www/html

# Apache's default site configuration file - compatible with laravel 6
# forward requests to public folder
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

