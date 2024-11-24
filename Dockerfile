# Utiliser l'image PHP avec FPM
FROM php:8.2-fpm

# Installer les extensions PHP nécessaires
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip git curl \
    && docker-php-ext-install pdo_mysql zip

# Installer Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Configurer le répertoire de travail
WORKDIR /var/www

# Copier les fichiers Laravel dans le conteneur
COPY . /var/www

# Donner les permissions appropriées
RUN mkdir -p /var/www/storage \
    /var/www/bootstrap/cache \
    && chown -R www-data:www-data /var/www \
    && chmod -R 775 /var/www/storage \
    && chmod -R 775 /var/www/bootstrap/cache

# Installer les dépendances Laravel
RUN composer install --optimize-autoloader --no-dev

# Exposer le port utilisé par PHP-FPM
EXPOSE 9000

# Commande pour démarrer PHP-FPM
CMD ["php-fpm"]
