FROM php:8.1.7-fpm
  RUN apt-get update && apt-get install -y \
      zip \
      unzip \
      libpng-dev \
      libonig-dev \
      libxml2-dev
  RUN apt-get clean && rm -rf /var/lib/apt/lists/*

  RUN docker-php-ext-install mbstring exif pcntl bcmath gd
  
  RUN groupadd -r php && useradd -r -g php php
  WORKDIR /var/www/
  COPY . /var/www/

  RUN chmod -R 777 /var/www/
  RUN chown -R php /var/www/

  RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
      && php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
      && php composer-setup.php \
      && php -r "unlink('composer-setup.php');"
  RUN mv composer.phar /usr/local/bin/composer \
      && mv .env.example .env

  USER php

  RUN composer install
  RUN php artisan key:generate

  CMD php-fpm
