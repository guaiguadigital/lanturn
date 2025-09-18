# Requerimentos:
# PHP
# Docker (Mysql) ou ter instalado mysql em local

# 1 Criar docker-file.yaml para mysql para docker

# 2 Testar em local com php

php -v
composer -V

# 3 Criar projeto em laravel
composer create-project laravel/laravel lanturn

# 4 Criar app key

php artisan key:generate

# 5  run migrations

php artisan migrate

# 6 create model

php artisan make:model Client -m

# 7 run migratons

php artisan migrate

# 8 create controlador

php artisan make:controller ClientController --resource

# 9 run project

php artisan serve