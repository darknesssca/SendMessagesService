FROM php:7.3-fpm
WORKDIR /var/www

#RUN apt-get -y install --no-install-recommends \
#    php7.3-json php7.3-mbstring \
#    php7.3-mysql php7.3-redis

ADD https://getcomposer.org/installer /tmp/composer
RUN php /tmp/composer --version=1.10.16 --install-dir=/usr/bin --filename=composer \

ENTRYPOINT [ "php", "artisan", "serve" ]
