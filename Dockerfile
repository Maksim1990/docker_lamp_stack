FROM php:7.3-rc-apache-stretch
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN pecl install -o -f redis \
&&  rm -rf /tmp/pear \
&&  docker-php-ext-enable redis
