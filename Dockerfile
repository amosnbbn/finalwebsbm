# Gunakan image PHP dengan FPM
FROM php:8.3-fpm

# Set working directory dalam container
WORKDIR /var/www

# Install ekstensi yang diperlukan
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    curl \
    libzip-dev \
    libicu-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql zip intl

# Install Composer
COPY --from=composer:2.7 /usr/bin/composer /usr/bin/composer

# Copy semua file Laravel ke dalam container
COPY . .

# Install dependensi Laravel
RUN composer install --no-dev --optimize-autoloader

# Beri izin ke storage dan bootstrap
RUN chmod -R 777 storage bootstrap/cache

# Jalankan PHP-FPM
CMD ["php-fpm"]

# Expose port PHP-FPM
EXPOSE 9000
