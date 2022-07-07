FROM php:8.1-fpm
RUN apt update && apt install -y git zip unzip &&\
curl -sS https://getcomposer.org/installer -o composer-setup.php &&\   
HASH=`curl -sS https://composer.github.io/installer.sig` &&\
echo $HASH &&\
php -r "if (hash_file('SHA384', 'composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" &&\
php composer-setup.php --install-dir=/usr/local/bin --filename=composer
COPY --chown=www-data:www-data . /var/www/ttdevops
WORKDIR /var/www/ttdevops
RUN composer install && php artisan key:generate

