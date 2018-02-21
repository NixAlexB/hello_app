FROM php:5.6.33-apache-jessie

COPY configs/php.ini $PHP_INI_DIR/php.ini

COPY configs/app.conf /etc/apache2/sites-available/app.conf

RUN a2ensite app

COPY . /var/www/app

EXPOSE 8080
