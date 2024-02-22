## API Restful para gestionar el sistema de matriculas y asistencias del Instituto Nacional De Sonzacate
API RestFul para gestionar el sistema de matriculas y asistencias, utilizando la autenticación JWT, basada en laravel 9.*

## Requerimientos
* PHP>=8.2.5
* MySQL>=8.0.36
* Laravel 9.*
* Composer 

## Descargar proyecto para modo de desarrollo
* clone to project
'''
https://github.com/EdwinAlexanderBernardinoMoran/backendinso.git
'''

## Instalación de dependencias
```
composer update
```

## Generar clave para laravel.

* accesssing the project directory
```
cd backendinso/
```
* configure environment in .env file
```
cambiar el nombre .env.example a .env
```

* Configure credentials to connect to mysql
```
DB_CONNECTION=mysql
```
```
DB_HOST=127.0.0.1
```
```
DB_PORT=3306
```
```
DB_DATABASE=asistencias
```
```
DB_USERNAME=root
```
```
DB_PASSWORD=
```
* generating key

```
php artisan key:generate
```

## Generar clave para JWT
```
php artisan jwt:secret
```

## Ejecutar migration
```
php artisan migrate
```

