# Usa a imagem base do PHP com Apache
FROM php:8.2-apache

# Instala o Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instala dependências do sistema e extensões PHP necessárias
RUN apt-get update && apt-get install -y \
    libpq-dev \
    unzip \
    git \
    && docker-php-ext-install pdo pdo_mysql \
    && docker-php-ext-enable pdo_mysql

# Copia o código do projeto para o diretório padrão do Apache
COPY . /var/www/html/

# Define o diretório de trabalho
WORKDIR /var/www/html/

# Ajusta permissões para o diretório
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/

# Expõe a porta 80
EXPOSE 80
