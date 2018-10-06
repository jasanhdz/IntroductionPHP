<?php
// Lo que hace ini_set es que va a inicializarnos variables de php.
// Display errors, lo tenemos que encender con 1.
ini_set('display_errors', 1);
ini_set('display_starup_error', 1);
// E_ALL: que significa Todos los errores.
error_reporting(E_ALL);
// En caso de que tengamos un error siempre va a salir a la pantalla.
// Normalmente XAMPP viene con el sistema de errores activo, en alguna otra vez estaremos
// Trabajando con servidores que no lo tengan activo y está es la forma en la que pueden habilitar eso.

// Ojo: mostrar los errores en pantalla solo las utilizamos cuando estamos desarrollando.
// cuando nosotros configuramos en vivo, ya No queremos que esos errores salgan al usuario.

require '../vendor/autoload.php';
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'cursophp',
    'username'  => 'root',
    'password'  => 'hasanazael',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);
// Nos permite hacer todo como si estuviera en el contexto Global
// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();
// Nos va a servir para inicializar el ORM.
// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

$route = $_GET['route'] ?? '/';

if($route == '/') {
  require_once '../index.php';
} elseif($route == 'addJob') {
  require_once '../addJob.php';
}
