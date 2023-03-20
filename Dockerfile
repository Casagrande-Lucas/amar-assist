FROM php:8.1.0
RUN apt-get update -y && apt-get install -y openssl zip unzip git libpq-dev libzip-dev
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql
RUN docker-php-ext-install pdo pdo_mysql pdo_pgsql
WORKDIR /app
COPY . /app
RUN composer install --ignore-platform-reqs

CMD php artisan serve --host=0.0.0.0 --port=8000
EXPOSE 8000
