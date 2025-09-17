# Projeto Lanturn in Laravel (PHP/MySQL/Git)

## Como rodar o projeto localmente

1. Clone o repositório:
   ```bash
   git clone https://github.com/Matheus-Cezarr/backend-junior-php-crud.git
   ```
2. Suba os containers com Docker:

   ```bash
   docker-compose up -d
   ```

3. Configure o Laravel:

   Copie o arquivo .env.example para .env:

   ```bash
   cp .env.example .env
   ```

   Chave da aplicação:

   ```bash
   php artisan key:generate
   ```

   Limpe cache:

   ```bash
   php artisan config:clear
   php artisan cache:clear
   php artisan config:cache
   ```

