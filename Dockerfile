FROM php:8.1
# ENV user="php"
RUN apt-get update \
&& apt-get upgrade -y \
&& apt-get install -y \
curl \
git \
# libpng-dev \
# libonig-dev \
# libxml2-dev \
#zip \
unzip\
&& apt-get clean \
&& rm -rf /var/lib/apt/lists/*
RUN curl -sS https://getcomposer.org/installer -o composer-setup.php \
&& php composer-setup.php --install-dir=/usr/local/bin --filename=composer 
# RUN groupadd -r $user && useradd -r -g $user $user
RUN chmod -R 777 /var/www/
WORKDIR /var/www
# USER $user
# COPY --chown=$user:$user . /var/www
COPY . /var/www
RUN mv .env.example .env
RUN composer install
RUN php artisan key:generate
CMD ["php", "artisan", "serve", "--host=0.0.0.0"]
