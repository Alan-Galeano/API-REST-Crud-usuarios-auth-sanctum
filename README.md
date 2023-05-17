# Proyecto API-Usuarios
***
Una API para el manejo de usuarios, cuenta con un login y logout totalmente funcional, incluyendo características dinámicas adicionales para realizar la integración con un frontend. Se utilizó Sanctum para la autenticación, generando un token durante el proceso de inicio de sesión. Todas las pruebas para verificar el funcionamiento de la API se realizaron en Postman. La documentación de la API se generó utilizando Request Docs, y se puede acceder a ella mediante la URL del proyecto seguida de '/request-docs' (por ejemplo, http://api-usuarios.test/request-docs).

## Instalacion
***
Para Instalar el proyecto debe clonar el repositorio y realizar/ejecutar los siguientes comandos y acciones:
- Clonar el repositorio del proyecto.
- Ejecutar el comando "composer install" para instalar las dependencias del proyecto.
- Ejecutar el comando "composer dump-autoload" para generar el archivo de autocarga de clases.
- Configurar el archivo ".env" con la información de conexión a la base de datos y otras configuraciones específicas.
- Ejecutar el comando "php artisan migrate --seed" para realizar las migraciones de la base de datos y ejecutar los seeders     (opcionalmente, para poblar la base de datos con datos de prueba).
Recuerda que también es importante asegurarse de tener instalado PHP, Composer y Laravel correctamente en tu entorno antes de ejecutar estos pasos.

## Tecnologias

1- Laravel 9
***
2- Sanctum
***
3- Request docs: 
