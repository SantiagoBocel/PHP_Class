# PHP_Class
## Comenzando 馃殌
_Estas instrucciones te permitir谩n obtener una copia del proyecto en funcionamiento en tu m谩quina local para prop贸sitos de desarrollo y pruebas._
 ## Instalar XAMPP 馃敡
 * Para descargar XAMPP para Windows usa el [enlace](https://www.apachefriends.org/es/index.html). 
 * Una vez descargado el archivo descompr铆melo en la ra铆z del disco C: quedando en la carpeta xampp.
 * Tras haber realizado la instalaci贸n, iremos a la carpeta c:\xampp y haremos doble clic en el archivo xampp-control.exe.
 * Para iniciar un servidor haremos clic en el bot贸n Start a su derecha, En este caso necesitaremos _Apache y MySql_. Deber铆a mostrarse el mensaje Running y cambiar a Stop el texto del bot贸n a su derecha.
 * Para comprobar si todo funciona correctamente introduciremos en la barra de direcciones del navegador web las URL's http://127.0.0.1 o bien http://localhost:
 ## Usar el servidor web Apache 馃殌 
 * El servidor web Apache procesar谩 las p谩ginas web en la carpeta htdocs dentro de aquella en la que hayamos instalado XAMPP.
 * Para realizar una prueba crea una carpeta Clases_PHP dentro de htdocs.
 * Despu茅s crea un archivo info.php con la siguiente l铆nea de c贸digo PHP:
 ``` PHP
 <?php phpinfo(); ?>
 ```
 * A continuaci贸n introduce la siguiente URL en la barra de direcciones del navegador web la siguiente direcci贸n URL:
http://127.0.0.1/Clases_PHP/info.php
* La funci贸n de PHP phpinfo() muestra entre otra, informaci贸n sobre la configuraci贸n actual de PHP, Apache y MySQL.
