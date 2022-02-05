# PHP_Class
## Comenzando 🚀
_Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas._
 ## Instalar XAMPP 🔧
 * Para descargar XAMPP para Windows usa el [enlace](https://www.apachefriends.org/es/index.html). 
 * Una vez descargado el archivo descomprímelo en la raíz del disco C: quedando en la carpeta xampp.
 * Tras haber realizado la instalación, iremos a la carpeta c:\xampp y haremos doble clic en el archivo xampp-control.exe.
 * Para iniciar un servidor haremos clic en el botón Start a su derecha, En este caso necesitaremos _Apache y MySql_. Debería mostrarse el mensaje Running y cambiar a Stop el texto del botón a su derecha.
 * Para comprobar si todo funciona correctamente introduciremos en la barra de direcciones del navegador web las URL's http://127.0.0.1 o bien http://localhost:
 ## Usar el servidor web Apache 🚀 
 * El servidor web Apache procesará las páginas web en la carpeta htdocs dentro de aquella en la que hayamos instalado XAMPP.
 * Para realizar una prueba crea una carpeta Clases_PHP dentro de htdocs.
 * Después crea un archivo info.php con la siguiente línea de código PHP:
 ``` PHP
 <?php phpinfo(); ?>
 ```
 * A continuación introduce la siguiente URL en la barra de direcciones del navegador web la siguiente dirección URL:
http://127.0.0.1/Clases_PHP/info.php
* La función de PHP phpinfo() muestra entre otra, información sobre la configuración actual de PHP, Apache y MySQL.
