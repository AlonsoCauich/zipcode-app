# zipcode-app

# Reto Técnico
Backend Developer

Api para la evaluación de tiempos de respuesta del endpoint de códigos postales.

## Inicializar el proyecto

Sobre la carpeta del módulo correr el comando:
```
php artisan serve
```
## Importar información
```
php artisan migrate:fresh --seed
```

## Endpoints de modulo

|Endpoint| Método | Descripción |
| - | - | - |
|/zip-codes/{zip_code} | GET | Obtiene la sintaxis solicitada por medio del parámetro zip_code usando ResourceCollection 

## Ejemplo

http://demochallenge.xyz/api/zip-codes/77500


## Descripción

1. Ver la funcionalidad y estructura del api de ejemplo.
2. Descargar el formato de la fuente de información proporciona y entender la estructura.
3. Creación del repositorio en GitHub.
4. Creación y configuración de modelo, controlador, migración y recurso.
5. Creación y configuración de un Seeder de prueba para importar datos a la base de datos.
6. Configuración más detallada del recurso utilizando collection y la función map de Laravel, de esta forma le damos la sintaxis solicitada para este reto, mejorando así el tiempo de respuesta.
7. Creación del Seeder para importar los datos del Excel.
8. Creación de ruta e importación de laravel-error.
9. Configuración e importación del proyecto a un hosting.




