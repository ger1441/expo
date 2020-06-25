<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

## Expo Locales

Reservación de locales para diferentes compañias.

- Al inicio de muestran los locales disponibles para reservar
- Si el local está disponible se podrá reservar, de lo contrario se podrá consultar la información de la empresa que lo está ocupando
- Al reservar un local se enviará un correo de confirmación con la información de la reservación



## Detalles Técnicos

Mini gestor desarrollado mediante PHP con el Framework Laravel 7.17.1<br>
Con una base de datos relacional MySQL <br>
Y apoyándonos en la librería JQuery, así como del Framework Bootstrap CSS

## Requerimientos

- Las tablas fueron creadas mediante las migraciones y alimentadas mediante los seeders. <br>
  De igual forma el archivo <strong>.sql</strong> con las query necesarias para la creación de la base de datos y las tablas se encuentra en la carpeta <strong>public/expo.sql</strong>  

- El envío del correo de la confirmación se realizó mediante <i><strong>"Mailtrap"</strong></i><br>
  Se adjunta la captura de pantalla en <strong>public/confirmaciones.png</strong>



## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
