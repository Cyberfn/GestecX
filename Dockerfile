# Use a imagem oficial do PHP com Apache
FROM php:8.0-apache

# Instale extensões necessárias do PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Habilite o módulo de reescrita do Apache
RUN a2enmod rewrite

# Copie os arquivos do projeto para o diretório padrão do Apache
COPY . /var/www/html/

# Defina as permissões apropriadas
RUN chown -R www-data:www-data /var/www/html/
