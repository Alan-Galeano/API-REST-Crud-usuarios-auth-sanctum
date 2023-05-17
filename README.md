# Proyecto API-Usuarios
***
Una API para el manejo de usuarios, cuenta con un login y logout totalmente funcional, incluyendo características dinámicas adicionales para realizar la integración con un frontend. Se utilizó Sanctum para la autenticación, generando un token durante el proceso de inicio de sesión. Todas las pruebas para verificar el funcionamiento de la API se realizaron en Postman. La documentación de la API se generó utilizando Request Docs, y se puede acceder a ella mediante la URL del proyecto seguida de '/request-docs' (por ejemplo, http://api-usuarios.test/request-docs).

## Instalacion
***
Para Instalar el proyecto debe clonar el repositorio y realizar/ejecutar los siguientes comandos y acciones:
- Composer install
- Composer dump-autoload
- Configurar el archivo .env
- Realizar las migraciones con los seeders: php artisan migrate --seed

## Tecnologias

1- Laravel 9
***
2- Sanctum
***
3- Request docs: 
