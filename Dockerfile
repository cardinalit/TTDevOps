FROM laravelsail/php81-composer:latest
COPY . /TTDevOps
WORKDIR /TTDevOps
RUN composer install && php artisan key:generate
ENTRYPOINT [ "php", "artisan", "serve", "--host=0.0.0.0" ]
