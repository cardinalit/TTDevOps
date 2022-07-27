FROM composer:2.3.9 as builder
COPY . /srv/app
WORKDIR /srv/app
RUN composer install

FROM php:8.1.7-fpm-alpine3.16
MAINTAINER "i.perepelica@devspark.ru"
COPY --from=builder /srv/app /srv/app
WORKDIR /srv/app
RUN cp .env.example .env
CMD php artisan serve --host=0.0.0.0
