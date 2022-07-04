FROM php:8.1.7
  RUN apt-get update && apt-get install -y \
      zip \
      unzip
  RUN groupadd -r php && useradd -r -g php php
  WORKDIR /app
  COPY . .
  RUN chmod -R 777 /app
  RUN chown -R php /app
  RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
  RUN php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
  RUN php composer-setup.php
  RUN php -r "unlink('composer-setup.php');"
  RUN mv composer.phar /usr/local/bin/composer
  RUN mv .env.example .env
  USER php
  RUN composer install
  RUN php artisan key:generate

  CMD php artisan serve --host=0.0.0.0
