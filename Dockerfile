FROM php:8.1-fpm

WORKDIR /app

COPY . .

RUN apt-get update \
  && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    curl \
    git \
    cron \
    sudo \
    --no-install-recommends

RUN php -r "readfile('http://getcomposer.org/installer');" | php -- --version=2.3.5 --install-dir=/usr/bin/ --filename=composer
RUN composer install --prefer-source --no-interaction
RUN cp .env.example .env
RUN php artisan key:generate

CMD php artisan cache:clear
CMD php artisan serve --host=0.0.0.0
