FROM php:8.2-apache

# Copy all project files from your repository into the Apache web root
COPY . /var/www/html/

# Expose port 80 for web traffic
EXPOSE 80