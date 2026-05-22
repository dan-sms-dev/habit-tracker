FROM php:8.4-cli

# Instala dependências
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libzip-dev \
    zip \
    nodejs \
    npm

# Instala extensões PHP
RUN docker-php-ext-install zip pdo pdo_mysql

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Define pasta do app
WORKDIR /app

# Copia arquivos
COPY . .

# Instala dependências Laravel
RUN composer install --no-dev --optimize-autoloader

# Instala dependências front
RUN npm install && npm run build

# Gera cache
RUN php artisan config:cache

# Create .env file if it doesn't exist
RUN cp .env.example .env || true

# Create necessary directories and set permissions
RUN mkdir -p storage/logs bootstrap/cache && \
    chmod -R 777 storage bootstrap/cache

# Porta
EXPOSE 8080

# Start
CMD php artisan serve --host=0.0.0.0 --port=8080
