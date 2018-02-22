FROM php:5.6.33-apache-jessie

MAINTAINER Alex Bozhko <alex.boghko@gmail.com>

COPY configs/php.ini $PHP_INI_DIR/php.ini

COPY configs/app.conf /etc/apache2/sites-available/app.conf

RUN a2ensite app

RUN a2enmod rewrite

COPY . /var/www/app

RUN apt-get update && apt-get -y --no-install-recommends install \
    git \
    autoconf \
    curl \
    make \
    zip \
    zlib1g-dev \
    wget && \
    docker-php-ext-install zip && \
    php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer && \
    rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/app

RUN composer install --no-interaction 

EXPOSE 8080
