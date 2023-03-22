FROM php:8.1.0
RUN apt-get update -y && apt-get install -y openssl zip unzip git libpq-dev libzip-dev
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo pdo_mysql 
WORKDIR /app
COPY . /app
RUN composer install --ignore-platform-reqs
RUN curl -sL https://deb.nodesource.com/setup_16.x -o /tmp/nodesource_setup.sh
RUN bash /tmp/nodesource_setup.sh
RUN apt install nodejs -y
RUN npm install
RUN npm run build
CMD php artisan serve --host=0.0.0.0 --port=8000 
EXPOSE 8000


