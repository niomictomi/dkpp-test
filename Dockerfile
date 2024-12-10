# Gunakan image PHP dengan FPM
FROM php:8.1-fpm

# Install dependensi yang dibutuhkan
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev zip git unzip && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd pdo pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Salin file Laravel ke dalam container
COPY . .

# Install dependensi Laravel
RUN composer install

# Set permission direktori storage dan bootstrap cache
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache
