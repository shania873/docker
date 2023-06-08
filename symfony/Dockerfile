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


WORKDIR /var/www/symfony

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
# Installation de Symfony CLI



# RUN composer global require symfony/cli

RUN curl -1sLf 'https://dl.cloudsmith.io/public/symfony/stable/setup.deb.sh' | sudo -E bash
RUN apt install symfony-cli
# RUN curl -sS https://get.symfony.com/cli/installer | bash
# RUN mv /root/.symfony5/bin/symfony /usr/local/bin/symfony
# RUN ls 
# RUN mv /root/.symfony6/bin/symfony /usr/local/bin/symfony






EXPOSE 9000

# RUN composer install

CMD ["apache2-foreground"]
