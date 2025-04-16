FROM php:8.2-apache
# ...
WORKDIR /var/www/html

# Instalação de dependências...
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    zip unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd mbstring pdo_mysql

# Habilitar mod_rewrite
RUN a2enmod rewrite

# Copia o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copia a configuração do Apache
COPY docker/apache/vhost.conf /etc/apache2/sites-available/000-default.conf

# Ajusta permissões para storage e bootstrap/cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

CMD ["apache2-foreground"]
