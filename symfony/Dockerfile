# Dockerfile pour Symfony avec PHP 8
FROM php:8.1-apache

WORKDIR /var/www

COPY . .



RUN apt-get update && apt-get install -y \
    libicu-dev \
    && docker-php-ext-install -j$(nproc) intl

RUN apt-get install -y \
    libzip-dev \
    && docker-php-ext-install zip

RUN apt-get install -y \
    unzip \
    wget \
    curl \
    sudo


RUN apt update \
    && apt install -y zlib1g-dev g++ git libicu-dev zip libzip-dev zip \
    && docker-php-ext-install intl opcache pdo pdo_mysql \
    && pecl install apcu \
    && docker-php-ext-enable apcu \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip


# WORKDIR /var/www/html

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN curl -1sLf 'https://dl.cloudsmith.io/public/symfony/stable/setup.deb.sh' | sudo -E bash
RUN apt install symfony-cli


# # Install lsb-release
# RUN apt-get install -y lsb-release


# # Install MySQL client
# # Install MySQL CLI
# RUN wget https://dev.mysql.com/get/mysql-apt-config_0.8.17-1_all.deb
# RUN echo mysql-apt-config mysql-apt-config/select-server select mysql-5.7 | debconf-set-selections
# RUN dpkg -i mysql-apt-config_0.8.17-1_all.deb
# RUN apt-get update && apt-get install -y mysql-client

# # Cleanup
# RUN rm mysql-apt-config_0.8.17-1_all.deb

# ENV MYSQL_DATABASE=api
# ENV MYSQL_USER=doloresHaze
# ENV MYSQL_PASSWORD=Foutaise.1
# ENV MYSQL_ROOT_PASSWORD=Foutaise.1



# COPY ../www/ /var/www/html/

COPY apache.conf /etc/apache2/sites-available/000-default.conf

COPY php.conf /etc/apache2/conf-available/
RUN a2enconf php
# RUN a2enmod rewrite

EXPOSE 3000

# RUN composer install

# CMD ["apache2-foreground"]
