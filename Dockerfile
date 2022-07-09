FROM php:8.1
RUN apt-get update \
&& apt-get upgrade -y \
&& apt-get install -y \
curl \
git \
unzip\
&& apt-get clean \
&& rm -rf /var/lib/apt/lists/*
RUN curl -sS https://getcomposer.org/installer -o composer-setup.php \
&& php composer-setup.php --install-dir=/usr/local/bin --filename=composer 
RUN chmod -R 777 /var/www/
WORKDIR /var/www
COPY . /var/www
RUN mv .env.example .env
RUN composer install
RUN php artisan key:generate
CMD ["php", "artisan", "serve", "--host=0.0.0.0"]
