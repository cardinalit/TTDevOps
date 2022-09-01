FROM composer:2.3.9 as builder
COPY . /srv/app
WORKDIR /srv/app
RUN composer install

FROM php:8.1.7-fpm-alpine3.16
COPY --from=builder /srv/app /srv/app
WORKDIR /srv/app
RUN chmod -R 777 storage
RUN chmod -R 775 bootstrap/cache
CMD ["php-fpm"]
