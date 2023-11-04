<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Sistema Étnico

**Descripción pendiente**

## Requisitos

- PHP versión 8.1
- Composer instalado
- Servidor web Apache
- Node versiones superiores a la 10

## Instalación

1. Clona el repositorio: `git clone https://github.com/tuusuario/tuproyecto.git`
2. Navega al directorio del proyecto: `cd tuproyecto`
3. Instala las dependencias con Composer: `composer install`
4. Copia el archivo de configuración de ejemplo: `cp .env.example .env`
5. Genera una clave de aplicación: `php artisan key:generate`
6. Configura la base de datos en el archivo `.env`
7. Ejecuta las migraciones de la base de datos: `php artisan migrate`
8. Ejecuta seeder para pre-llenar la base de datos con información necesaria para el proyecto `php artisan db:seed`

## Uso

- Para iniciar el servidor de desarrollo: `php artisan serve`
- Para compilar los estilos: `npm run dev`
- Accede a la aplicación en tu navegador: `http://localhost:8000`

## Configuración

En el archivo .env.example están todas las variables de entorno necesarias para que el proyecto tenga una conexión exitosa con la base de datos.
