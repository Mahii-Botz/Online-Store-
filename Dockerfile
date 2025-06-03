# Use official PHP image with Apache
FROM php:8.1-apache

# Enable mod_rewrite (useful for routing)
RUN a2enmod rewrite

# Optional: install extensions (e.g., MySQL, PDO, etc.)
# RUN docker-php-ext-install pdo pdo_mysql

# Copy all project files into Apache root
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html

# Set correct permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 (default for Apache)
EXPOSE 80
