# Gunakan image PHP dengan FPM
FROM php:8.3-fpm

# Install Node.js untuk build Tailwind
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - && \
    apt-get update && \
    apt-get install -y nodejs libpng-dev libjpeg-dev libfreetype6-dev zip git unzip && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd pdo pdo_mysql && \
    apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Salin file composer.json dan composer.lock
COPY composer.json composer.lock ./

# Install dependensi awal
RUN composer install --no-scripts --no-autoloader

# Salin seluruh proyek
COPY . .

# Install dependensi Node.js (Tailwind CSS)
RUN npm install

# Build Tailwind CSS
RUN npm run build

# Generate autoload file
RUN composer dump-autoload --optimize

# Set permission direktori storage dan bootstrap cache
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Expose port untuk PHP-FPM
EXPOSE 9000
