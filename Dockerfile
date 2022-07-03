FROM php:8.1.7

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    libonig-dev \
    libpq-dev \
    libzip-dev \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
 
RUN docker-php-ext-install pdo mbstring

WORKDIR /app
COPY . /app

RUN composer install
RUN php artisan key:generate

CMD php artisan serve --host=0.0.0.0
EXPOSE 8000

