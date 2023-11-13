# Prueba Tecnica Invenio

Prueba técnica

Full Stack Development

## Requisitos
Se necesita desarrollar una aplicación web en Laravel que posea un conjunto reducido
de características propias de un Blog de Internet.

La funcionalidad que deberá de proveer será la siguiente:

Alta de entradas
- El usuario podrá guardar entradas en la aplicación. Una entrada deberá estar compuesta por los siguientes elementos:
- Título: enuncia el contenido de la entrada.
- Autor: el nombre de quien publica la entrada
- Fecha de publicación: la fecha en que la entrada fue guardada.
- Contenido: un escrito breve.
(Todos los campos son obligatorios) 

Mostrar un listado de entradas
- Deberá de mostrar un listado con todas las entradas en el blog, pero del campo contenido, sólo se mostrarán los primeros setenta caracteres.

Búsquedas
- La aplicación debe permitir realizar búsquedas de entradas permitiendo filtrar por título, contenido o autor. Mostrar detalle de una entrada.
- Al seleccionar una entrada del listado, deberá mostrarse el contenido de la entrada. Es decir, deberá ser visible todo el texto del contenido. Obtención de recursos
- La obtención de los datos se hará por medio de un servicio REST que la aplicación web debe consumir. Este proporcionará los métodos necesarios para consultar y guardar en el servidor.
## Requisitos Previos

Antes de comenzar a trabajar en este proyecto, asegúrate de tener instalado lo siguiente en tu sistema:

- PHP 8.0+
- Composer
- XAMPP (en su defecto apache y MySQL)

## Instalación

1. Clona este repositorio en tu máquina local:

  ```bash
git clone https://github.com/andres-enciso/blog_invenio.git
 ```
   
2. Navega al directorio del proyecto:
 ```bash
cd blog_invenio
 ```
3. Instala las dependencias usando Composer:
 ```bash
composer install
 ```
4. Configura la base de datos editando el archivo .env con tus credenciales de base de datos.

5. Ejecuta las migraciones y los seeders para inicializar la base de datos con datos de ejemplo.

    ```bash
    php artisan migrate --seed
    ```

6. Para iniciar el proyecto, primero es necesario tener en ejecución XAMPP
    ```bash
    php spark serve
    ```
7. Abre tu navegador y visita http://127.0.0.1/8000 para ver la aplicación en funcionamiento.

# Contacto
Nombre: Andres Enciso

Correo Electrónico: andresenciso20@gmail.com

GitHub: andres-enciso

