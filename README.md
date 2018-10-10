<h1 align="center">
  <img src="logo.png">
  <br>
  Curso de Introducción a PHP
</h1>
<div align="center">
  <img src="php.png"> 
</div>

# Curso de PHP

En esté curso veremos:

* Programación orientada a Objetos.
*	Conexión a bases de datos.
*	Usaremos los estándares de PHP.
*	Implementaremos librerías de terceros.
*	Estructuraremos nuestro proyecto de una forma muy profesional que te servirá para futuros proyectos.
*	Utilizaremos la versión 7.2 de PHP.

## ¿Qué es PHP?

PHP es un lenguaje de programación de propósito general de alto nivel que fue diseñado especialmente para el desarrollo de aplicaciones web.
Es interpretado, multiplataforma, open source, el cual ha sido muy popular en los últimos años.

**¿Qué NO es PHP?**

*	No es un lenguaje compilado, por lo cual siempre tendrás que llevar juntos tu código y tu interprete.
*	No esta diseñado para realizar aplicaciones de escritorio

Para trabajar con PHP instalaremos un entorno de desarrollo llamado XAMPP, no es un entorno pensado para producción.

<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

## XAMPP

Es un entorno para poder desarrollar en PHP

- X: Cualquier Sistema Operativo.
- A: Apache
- M: MAriaDB
- P: PHP
- P: Perl

Para instalar XAMPP solo debemos ir a la página de [APACHE](https://www.apachefriends.org/es/download.html) y descargar el instalador compatible con tu sistema operativo.

Al finalizar el instalador, abrir XAMPP e iniciar el servidor de APACHE y MYSQL.

Si al iniciar el Servidor de Apache sale un *Error* porque el *Puerto está siendo usado*, se puede cambiar de la siguiente manera: 

1. Click en Config de Apache.
2. Click en httpd.conf
3. Cambiar el Listen por 8080
4. Cambiar ServerName localhost:8080
5. Abrir Config general de XAMPP
6. Click en Service and PORT y cambiar el Main Port por 8080

<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

### Configurar Base de Datos

Si al iniciar MySQL aparece un *Error* de que no se puede conectar, se puede cambiar de la siguiente manera:

1. Click en Config de MYSQL -> my.ini
2. Editar el archivo de texto 
3. Cambiar el port 3006 que esta por defecto por otro número superior como 3007 o superior
4. Buscar y sustituir el 3006 por el número del port nuevo.
5. Guardar y abrir Config general de XAMPP
6. Click la pestaña de MYSQL y cambiar el puerto de 3006 por el nuevo puerto y guardar.

## Problemas al entrar a PHPmyAdmin 

Si no puede ingresar a PHPMyAdmin es muy probable que deba modificarlo:

1. Abrir la carpeta de PhpMyAdmin
2. Abrir el archivo config.inc.php
3. Cambiar el usuario Root y passwaord por su Usuario y contraseña con la que instaló MYSQL
4. Si no Se acuerda de su contraseña y usuario, tendra que desinstalar MYSQL y Volver a instalarlo de CERO.
5. Cuando lo vuelva a instalar use su User y password en el documento config.inc.php
6. Inicie sesion del root en mysql y vuelva a intentar ingresar a PhpMyAdmin.

<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

## Sintaxis de PHP

Siempre que quieramos crear codigo Php debemos crear un archivo con extensión PHP, el archivo debe estar en la carpeta htcdocs que es donde se ejecuta el servidor por defecto.
Tambien debemos Abrir el tag de php en nuestro documento de la siguiente manera:

```
<?php 
  echo 'hello PHP';
?>
```

Todo lo que pongamos dentro de esto será lo que el servidor va a interpretar como código php, lo que esté fuera lo ignorará.

Si queremos escribir código php en nuestra vista HTML tendremos que cambiarle la extensión al archivo por .php porque nuestro servidor esta configurado a solo interpretar archivos PHP. Solo las partes dentro de `<?php  ?>` van a ser interpretadas y su código fuente no será visible desde el navegador.

Todas las sentencias de código se separarán con un `;`(punto y coma).

## Variables

Una variable puede ser como un caja donde vamos a almacenar el valor de una variable, que despues vamos a ocupar para realizar alguna operación.

Para declararla usaremos el símbolo de **$** y enseguida el nombre, este puede ser un guion bajo _ o una letra.

```php
<?php 
$numero = 1;
$chart = 'Pedro';
?>
```

**PHP no es estáticamente tipado**, es decir que no tenemos que decirle qué tipo de dato es esa variable. Además, es débilmente tipado porque podemos fácilmente cambiar el tipo de dato, es decir PHP ejecuta una conversión de datos interna.

Al momento de trabajar con PHP una cosa muy importante es hacer debugging a nuestras variables, para ello utilizamos la función `var_dump();` pasándole por parámetro la variable a revisar.

```php
<?php 
  $name = "Pedro";
  var_dump('$name');
?>
```

En PHP tenemos dos tipos de cadenas, las que son con *comillas simples* y las de *comillas dobles.* La diferencia entre estas dos cadenas es que la de comillas simples recibe de forma literal lo que le escribas mientras que la de comillas dobles intenta interpretar cualquier variable dentro de ella.

```php
<?php 
$name = 'Santiago';

// Comillas Simples
echo 'Hola ' . $name;

// Comillas Dobles
echo "Hola $name";
?>
```
<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

## Tipos de Datos en PHP

PHP cuenta con muchos tipos de datos, sin embargo, en este momento nos vamos a enfocar en los más importantes y utilizados que son boolean, integer, float, string, array y NULL.

<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

### Tipos Escalares

#### boolean

Representa solamente un valor verdadero o falso. 

Más información click [Aquí](http://php.net/manual/es/language.types.boolean.php)

*Valores válidos:* true (verdadero) false (falso)

```php 
<?php
$a = true; 
$b = false; 
?>
```
<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

#### integer 

Representa un número entero positivo, negativo o 0. 
Más información click [Aquí](http://php.net/manual/es/language.types.integer.php)

```php
<?php
$a = -123;
$b = 0;
$c = 7763;
?>
```
<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

#### float o double:

Representa un número de punto flotante, existen problemas de precisión con los números flotantes debido a la naturaleza binaria de las computadoras. 
Más información click [Aquí](http://php.net/manual/es/language.types.float.php)

```php
<?php
$a = 12.24; 
$b = 1.5e3; 
$c = 7E-10;
?> 
```
<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

#### string:

- Representa una cadena de caracteres.
- Existen 4 formas de representar una cadena. 

Las 2 principales son usando comillas simples o comillas dobles.

1. Usando comillas simples donde el texto será exactamente como se escribe.
2. Usando comillas dobles permite usar caracteres de escape y además expanden los nombres de las variables, es decir sustituye el valor de las variables dentro de las cadenas.

* Hay 2 formas adicionales llamadas **Heredoc** y **Nowdoc** que sirven para crear cadenas de múltiples líneas.

Si quieres conocer más de este tipo de dato da click [aquí](http://php.net/manual/es/language.types.string.php#language.types.string.details).

<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

### Tipos compuestos:

#### array:

Representa una colección de valores, aunque por defecto PHP usara índices numéricos, la realidad es que la estructura se representa como un mapa que colecciona pares llave-valor. La sintaxis para definir un arreglo será a partir de corchetes cuadrados, aunque en versiones anteriores de PHP era necesario usar la función array(). Las llaves pueden ser enteros o cadenas y los valores pueden ser de cualquier tipo de PHP, incluso de tipo array.

Si quieres conocer más de este tipo de dato da click [aquí](http://php.net/manual/es/language.types.array.php)

```php
<?php
$array = array(
    "curso1" => "php",
    "curso2" => "js",
);

// a partir de PHP 5.4
$array = [
    "curso1" => "php",
    "curso2" => "js",
];

// índices numéricos
$array = [
    "php",
    "js",
];
?>
```
<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

#### object:

Representa una instancia de una clase. Este tema lo veremos más a fondo en la clase de Programación Orientada a Objetos.

```php
<?php
class Car
{
    function move()
    {
        echo "Going forward..."; 
    }
}

$myCar = new Car();
$myCar->move();
?>
```
<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

#### Callable 

Es un tipo de dato especial que representa a algo que puede ser “llamado”, por ejemplo una función o un método.

```php 
<?php
// Variable que guarda un callable
$firstOfArray = function(array $array) {
    if (count($array) == 0) { return null; }
    return $array[0];
};

// Este es nuestro arreglo
$values = [3, 2, 1];

// Usamos nuestro callable y se imprime el valor 3
echo $firstOfArray($values);
?>
```

#### iterable:

A partir de PHP 7.1 iterable es un pseudo tipo de datos que puede ser recorrido.

```php 
<?php

function foo(iterable $iterable) {
    foreach ($iterable as $valor) {
        // ...
    } 
}

?>
```
<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

### Tipos especiales:

#### resource:

Es un tipo de dato especial que representa un recurso externo, por ejemplo un archivo externo a tu aplicación.

```php 
<?php
$res = fopen("c:\\dir\\file.txt", "r");
?>
```
<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

#### NULL:

Es un valor especial que se usa para representar una variable sin valor. 
Si quieres conocer más de este tipo de dato da click [aquí](http://php.net/manual/es/language.types.null.php)

```php 
<?php
$a = null; 
?>
```
<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

## Arreglos

Estas variables que almacenan más de un dato se conocen como arreglos y su sintaxis se va a indicar con [ ] (corchetes).

```php 
<?php 
$jobs = [
  'PHP Dev',
  'Python Dev',
  'Devops'
];
?>
```
<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

PHP utiliza índices para localizar a los elementos dentro de la variable.
```php 
<?php 
// Imprime PHP Dev
$jobs = [0];
?>
```
<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

La estructura de arreglos en PHP es conocida como *mapa*, lo que quiere decir que tiene una composición de *llave valor*. Además, un arreglo puede contener más arreglos y cada uno de ellos seguirá la misma estructura.
PHP utiliza índices para localizar a los elementos dentro de la variable.
```php 
<?php 
$jobs = [
  'Clave 1' => 'PHP Dev',
  'Clave 2' => 'Phyton Dev',
  'Clave 3' => 'Devops'
];
// imprime PHP Dev
  echo $jobs[0]['Clave 1'];
?>
```
**Algo que debes saber es que en PHP podrás almacenar diferentes tipos de datos en un mismo arreglo**

<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

## Condicionales

Las condiciones nos permiten tomar decisiones en el código, si se cumple la condición entonces se ejecutarán ciertas instrucciones sino se cumple se ejecutarán otras. Estas se denotan por la instrucción *if else*.

```php
<?php 
  $valor = 30;
  if($valor >= 18) {
    if($valor <= 35) {
      return 'Todo está Ok';
    }
    else {
      return 'El valor debe ser menor que 35'; 
    }
  }
  else {
    return 'Lo siento el valor no es correcto :(';
  }
?>
```
<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

## Ciclos

Los ciclos funcionan de la mano con las condiciones, en este caso si se cumple la instrucción se estará ejecutando repetidas veces una instrucción dada.

<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

### While

```php 
<?php
$id = 0;
while($id < 100) {
  echo 'Me ejecutare hasta terminar el Ciclo';
  $id++
}
?>
```
**En el Ciclo While si la condición es false el ciclo no se ejecutará.**

<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

### Do While

```php 
<?php
$id = 0;
  do {
    echo 'Me ejecutare hasta terminar el Ciclo';
    $id++
  } while($id < 100)
?>
```
**El ciclo do while garantiza que el código interno se ejecutará al menos 1 vez.**

<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

### For

```php 
<?php 

  for($i = 0; $i < 20; $i++) {
    echo "Número: $i";
  }

?>
```
<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

### Foreach

El ciclo foreach nos brinda una solución simple para iterar sobre los valores de un arreglo, la sintaxis es la siguiente:

```php
$array = ['uno', 'dos', 'tres']
foreach ($array as $valor) {
  echo $valor;
}

```

En esta sintaxis nos encontramos con 4 partes:

* La palabra reservada foreach simplemente indica el inicio de nuestro bloque.
* Dentro de paréntesis se escribe el nombre del arreglo que vamos a estar iterando, este arreglo debe estar definido previamente, en este ejemplo es $arreglo.
* La palabra "as" seguido de un nombre de variable que usaremos para acceder al elemento del arreglo que estamos accediendo, esta variable no debe existir previamente y solo la podrán usar dentro de este bloque. En el ejemplo es $valor.
* Entre llaves "{ }" están todas las acciones que queremos repetir, en el momento en que se ejecute el ciclo la variable que definimos para iterar (en el ejemplo $valor) ya existe y podrá ser usada en esta sección, piensa que el valor de esta variable estará cambiando en cada iteración.

Suponiendo que en el ejemplo anterior, el ciclo se repetirá 3 veces y en cada iteración la variable $valor contendrá el elemento del arreglo correspondiente, es decir, en la primera iteración $valor será igual a ‘uno’, en la segunda $valor será igual a ‘dos’ y en la tercera $valor será igual a ‘tres’.

Existe una sintaxis alternativa que nos permite no solo conocer el valor, también nos permitirá conocer la llave, de este modo tendremos acceso tanto a la llave como al valor del elemento del arreglo:

```php 
foreach ($array as $llave => $valor) {
  //sentencias que pueden usar $llave y $valor
}
```
<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

## Operadores

### Operadores aritméticos

Funcionan para realizar operaciones aritméticas.

<div align="center">
  <img src="images/operadores-aritmeticos.jpg">
  <small><p>Operadores Aritméticos</p></small>
</div>

### Operadores de asignación

El operador principal de asignación es el símbolo = (igual). Es importante tener en cuenta que este operador no sirve para comparar, normalmente del lado izquierdo del operador tendremos una variable, y este operador sirve para asignar el resultado de lo que se encuentre a la derecha a dicha variable.

```php
<?php 
$valor = 10;
?>
```

Lo que tenemos en la derecha puede ser un valor, otra variable, o el resultado de una operación o función.

También existen otros operadores de asignación que se combinan con operadores aritméticos o para strings y nos permiten simplificar algunas sentencias dentro de PHP. Estos son ejemplos de cómo funcionan:

```php 
<?php 
$a += $b
$a = $a + $b

$a -= $b
$a = $a - $b

$a *= $b
$a = $a * $b

$a /= $b
$a = $a / $b

$a %= $b
$a = $a % $b

$a .= $b
$a = $a . $b
?>
```
<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

### Operadores de comparación

Nos permiten comparar valores.

<div align="center">
  <img src="images/operadores-comparacion.jpg">
  <small><p>Operadores de Comparación</p></small>
</div>

## Interfaces

Las interfaces se pueden ver como un contrato o un acuerdo en el que se pueden estandarizar ciertas cosas.

La palabra reservada que utilizaremos para declarar una interfaz será **interface**. Y la que nos indicará que estamos usando una interfaz en una clase será **implements**.

Usando Type Hinting estableceremos el tipo de dato que esperamos ya sea una clase o un tipo de dato específico.

La herencia en PHP será de forma sencilla es decir solo que podrá hacer herencia de una sola clase, por lo contrario, con las interfaces que sí podemos implementar varias al mismo tiempo.

<div align="center">
  <img src="images/operadores-comparacion.jpg">
  <small><p>Operadores de Comparación</p></small>
</div>


## Name Spaces 

Los namespaces o espacios de nombre son una caracteristica que utilizamos en PHP,
para solucionar un problema que llamamos **colición de nombres**.

**EJEMPLO:** Pensemos que en nuestro navegador de archivos, en una carpeta podemos Tener
1 archivo con el nombre de *ejemplo.txt*. Y en otra carpeta podemos tener el mismo archivo
con el mismo nombre. Pero no podemos tener 2 archivos con el mismo nombre y tipo en una 
misma carpeta, simplemente no podemos.

Los **namespaces** Van a ser contextos seguros, donde nosotros vamos a definir espacios
donde queremos guardar esos archivos;

lo hacemos de la siguiente manera:
```php
<?php
-Mi archivo-
namespaces {carpetaNueva\ejemplos};
{
  Contenido de mi archivo
}

?>
```

Ahora mi Archivo ya no esta en un **Contexto Global**, ya que ahora pertenece a la carpeta que hemos definido {carpetaNueva\ejemplos}.
Y podemos ir creando Carpetas Namespaces, las carpetas Namespaces son invisibles para el navegador. Ya que, en sí un namespace no es una carpeta como tál, mas bien es un Contexto.

Para llamar o para usar un Archivo de un namespace{carpeta o contexto} en un Contexto Global podemos hacerlo de la siguiente manera:

// Usando la palabra reservada use, seguida de el Contexto-seguro ``(namespace\nombredelArchivoqueUsaremos)``

``use App\Models\{Job,Project, Printable};``

Nota: si usaremos multiples archivos podemos ocupar use Contexto-seguro(namespace\{archivos, separados, con, comas};

**use archivo\seguro\archivo1;**
**use archivo\seguro\archivo2;**
**use archivo\seguro\archivo3;**

Es lo mismo que:

<strong style="color:red;"> use </strong> **archivo\seguro\{archivo1, archivo2, archivo3};**

Otro ejemplo: Si queremos especificar cuando creamos un objeto de que tipo será
podemos hacerlo especificando su contexto\nombredelArchivo() 
**ejemplo**

``$projectLib = new Lib1\Project();``

<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

## PHPFIG

Varios programadores se unieron para crear un grupo llamado [PHP-FIG](https://www.php-fig.org/psr/) con el objetivo de avanzar en la interoperabilidad de librerías en PHP.

<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

## PSR (PHP Standars Recommendations)

Han sido diferentes estándares que hemos ido generando a lo largo del tiempo para poder lograr esta interoperabilidad en nuestros proyectos.

<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

## COMPOSER 

Vamos a añadir a nuestro proyecto un manejador de dependencias de PHP llamado [Composer](https://getcomposer.org/), no solo nos ayudara a traer librerías de tercero al proyecto además va a implementar el estándar PSR4 que nos va a permitir tener el cargado de archivos automático.

**composer.phar** será un documento que nos servirá para manejar las dependencias en PHP, esta va muy de la mano con otro archivo llamado **composer.json**.

### Como Incluir Composer a nuestro Proyecto.

1. Descargar el archivo [composer.phar](https://getcomposer.org/composer.phar)
2. Copiar y pegar el Archivo Composer.phar en nuestro proyecto
3. Instalar en caso de ser la primera vez el [Composer-Setup](https://getcomposer.org/Composer-Setup.exe) ¡Importante! -> En la carpeta de PHP.
4. Una vez instalado el composer en la carpeta php, ya podemos ejecutar el comando php
5. Antes de ejecutar Composer, debemos crear un archivo **composer.json**
6. El archivo JSON debe tener lo siguiente:
```JSON
{
  "autoload": {
    "psr-4": {
      // Cuando encuentre algo en el namespace "App\\"
      // Va a empezar a buscar desde la dirección "app/"
      "App\\": "app/"
    }
  },
  // Este objeto va a ir agregando las dependencias que iremos instalando.
  "require": {}
}
```

Este archivo JSON Primero va a tener el Autoload que sirvira para ir cargando automaticamente los archivos de app/ sin hacer **Require** o **Include** automaticamente.

7. Ejecutar el código ``php composer.phar install`` donde cargará o instalará las dependencias en caso de tenerlas especificadas, y creará los archivos de **Autoloading**.

8. Una vez actulizado los packages y cargado los archivos de autoload, podemos quitar los **require** y cargar solo el *require* de ``require 'vendor/autoload.php'; ``

<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

## DB Bases de Datos

Las bases de datos son colecciones de datos que podemos usar para consultarla almacenarla, ejecutar filtros, etc.

Cuando hablamos de aplicaciones web trabajaremos con sistemas manejadores de bases de datos, o también conocidos como bases de datos relacionales.

XAMPP viene con una herramienta llamada phpMyAdmin que es un cliente el cual se conecta a una base de datos, en este caso se conecta a MariaDB.

<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

## ORM (Object Relational Mapping)

Un ORM, que significa: **Object Relational Mapping**, es un concepto en el cual vamos a crear dentro de nuestro código algunos modelos basados en las tablas de nuestra base de datos.

Una principal característica de un **ORM**es que hace más transparente las conexiones a PostgreSQL y MySQL, además nos protege de algunas vulnerabilidades de SQL y facilita algunas validaciones a la información.

## PDO (PHP Data Object)

Permite estandarizar como trabajar con diferentes sistemas manejadores de bases de datos.

<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

## Formularios

Hagamos un template utilizando el código HTML que tenemos, le pondremos como título addJob.php

Podemos enviar información desde un formulario a través de diferentes métodos, GET o POST. Para acceder a esta información desde PHP llamaremos a <strong>$_GET</strong> y <strong>$_POST**</strong>, estas son variables super globales.

Recuerda que para hacer debugging de una variable usamos la función **var_dump**.

<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

## Packagist

[Packagist](https://packagist.org/) es un sitio donde encontraras múltiples librerías de terceros que puedes integrar a tus proyectos mediante composer, de aquí añadiremos nuestra herramienta para la conexión a base de datos.

<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>


## Eloquent

Realizamos la conexión con la base de datos y usaremos Eloquent como nuestro ORM. Para que funcionen los modelos debemos hacer una clase que herede de Model.

Una vez estén listos los modelos, usando la variable super global $_POST conectaremos la información del formulario con nuestro modelo para añadirla información a la base de datos.

<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

## Conectar DataBase con Nuestros Objetos

1. Debemos darle un repaso a las instrucciones de **illuminate/database**
2. Debemos Crear una capsula, con el siguiente código de *illuminate*
```php
<?php
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'database',
    'username'  => 'root',
    'password'  => 'password',
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
?>
```
3. Ahora nuestra clase Job va a crear Objetos con la información de nuestra base de Datos:
Lo que significa que nuestros Jobs se crearán con la información que tenga nuestra tabla Job.
4. Para ello debemos modificar nuestra Clase Job y hacer que Herede de el padre **Models**
5. Eliminaremos el Constructor y algunas funciones que dejen de funcionar.
6. Debemos especificar el namespace que usaremos ejemplo:

```php
<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Job extends Model {
  protected $table = 'jobs';
  public function getDescription() {
    return '<strong style="color:blue;">Implementando Interface:</strong> ' . $this->description;
  }
}
?>
```
<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

## Guardar Datos del Formulario

Para ello debemos tener en cuenta que nuestro objeto que estamos creando debe heredar de **Model** Para guardar los datos del cliente en el servidor debemos enviarlos de preferencia por el methodo="post" en el formulario.

Para guardar los datos de la super global $_POST debemos hacer lo siguiente: 
```php 
<?php
  $job = new Job();
  $job->title = $_POST['title'];
  $job->description = $_POST['description'];
  $job->save();
?>
```
<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

## Validar envió

También es muy importante que nosotros validemos el envío de información ya que si el formulario es vacío de un principio nos marcará un error Fatal.

```php
<?php
// Si $post No esta vacio vamos a guardar los datos y si esta vacío no hacemos nada.
if(!empty($_POST)) {
  $job = new Job();
  $job->title = $_POST['title'];
  $job->description = $_POST['description'];
  $job->save();
}
?>
```
Es muy importante saber que debemos crear una tabla **created_at** y **updated_at** ya que **Eloquent** necesita esas tablas para registrar las fechas, esta option la podemos desabilitar, pero lo recomendable es que las creemos.

<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

## Problemas Comunes con la conexión a la DB

Es muy importante que el *Usuario* y *contraseña* sean los correctos en la capsula que ponemos de Eloquent, también como el *nombre* de nuestra base de datos.

Si tienes Problemas con la configuración de PhpMyAdmin, revisa la información de: 
 
<div align="center">
  <small><a href="#Configurar Base de Datos">🡡 Configurar Base de Datos</a></small>
</div>

## Listar registros de la base de datos con Eloquent


Una vez que ya tenemos lista la conexión y el formulario guarda la información, es momento de listar los datos en nuestra página principal.

1. Vamos a tener que duplicar nuestra capsula para conectarnos en la base de datos.
Por ahora vamos copiar y pegar en nuestra otra página de index. Esto hará que Eloquent ya esté disponible en nuestra aplicación. 
2. Vamos a ir a la parte de Jobs, ahora toda la parte de la creación de objetos con el Constructor lo vamos a borrar y vamos a empezar a leer desde la base de datos.
3. Empezaremos a ocupar el ORM que tenemos instalado.

En lugar que nosotros tengamos que hacer lo que haciamos antes, lo que vamos a utilizar es que nadamas vamos a poner. 

```php
<?php}
// Nos va a traer todos los Registros que encuentre.
$jobs = Job::all();
?>
```
<div align="center">
  <small><a href="#Configurar Base de Datos">🡡 Configurar Base de Datos</a></small>
</div>

## Front Controller

Front Controller es un patrón de diseño que nos dará una solución a la redundancia del código en las múltiples entradas a la aplicación. Este tendrá el control de todas las entradas además de las inicializaciones de base de datos etc.

Los patrones de diseño son un concepto muy usado en programación y lo que tratan de darnos, es soluciones pensadas para problemas muy comunes.
La manera en como lo vamos a resolver es usando un frontcontroler que es una especie de modulo que va a recibir todas las peticiones y el se va a encargar de hacer un despach de esas peticiones hacia otros lados.

Lo que vamos a hacer es que en vez de tener varias entradas a nuestra aplicación, vamos a tener una entrada principal y atraves de esa entrada principal una especie de lanzamiento de otros eventos.

Lo importante es que esa entrada y única va a poder tener todas las inicializaciones que nosotros queramos, va a poder levantar la Base de Datos, va a poder levantar el loger, lo que nosotros ocupemos y despues va a ser mucho más fácil para que puedamos ir creciendo y apliando nuestra aplicación.

**ejemplo con el proyecto** 

1. Primero Crearemos una carpeta *public*, y dentro de esa carpeta vamos a crear un archivo, que es el que va a funcionar como nuestro FrontController.
```php
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

# Inicializando nuestra base de datos
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

# Si hay está definido y tiene un valor. ?? sino agregaremos esto '/'.
$route = $_GET['route'] ?? '/';

# Si el route está por defecto '/' abrirá index.php
if($route == '/') {
  require_once '../index.php';
} # Si route es addJob entonces abriremos addJob.php
  elseif($route == 'addJob') {
  require_once '../addJob.php';
}
?>
``` 

PD: Cuando estamos desarrollando una aplicación y la quiere subir a un servidor real, a lo que llamamos produccion que es poner las aplicaciones en vivo para que sean cosumidas por los usuarios, Nosotros no queremos que los usuarios puedan ni siquiera intentar acceder a nuestros demás archivos. Porque un usuario podria tal vez intentar escribir cosas con php y tratar de entrar a otros archivos y no queremos que pase eso.

Al crear la carpeta Public está sería la única que vamos a exponer a los usuarios y todos los demás archivos quedarán ocultos para el usuario.

<div align="center">
  <small><a href="#Configurar Base de Datos">🡡 Configurar Base de Datos</a></small>
</div>

## PSR7

PSR7 es un estandar que nos permite normalizar un request y un response en PHP.
Interfaz para mensajes de HTTP.

## Tomar en cuenta:

Una cosa que siempre tenemos que tratar de revisar es si existe la forma en la que nosotros podamos adoptar los estandares de php los **PSR**. 

En este caso lo que vamos a hacer primero es adoptar el psr-7 que es un standart en el cual nosotros vamos a normalizar un resquest.

Si nos entramos a la página de [PSR](https://www.php-fig.org/psr/) nosotros vamos a ocupar el **PSR7** que es una interzas para mensajes de HTTP.

Esta interfaz lo que realmente nos va a dar es que se brindan ciertas interfaces que nosotros podemos implementar en nuestras clases y a partir de esas interfaces nosotros estamos asegurando que este objeto request va a funcionar con una clase o con otra, y esto va a permitir que nuestro proyecto sea más interoperable. Y que nosotros puedamos cambiar componentes incluso en el futuro si fuera necesario.

## htaccess

Archivo de configuración de APACHE

**htaccess de raiz.**
```php

RewriteEngine On
RewriteCond %{THE_REQUEST} /public/([^\s?]*) [NC]
RewriteRule ^ %1 [L,NE,R=302]
RewriteRule ^((?!public/).*)$ public/$1 [L,NC]

```

htaccess de Public.
```php
# RewriteEngine para inicializarlo 
	RewriteEngine On 
# RewriteCond Significa que vamos a poner una condición.
# RewriteCond %{REQUEST_FILENAME} !-d Si el archivo que estamos pidiendo,
# no es un Directorio entonces sigamos probando, Si si es un directorio entonces
# ya no va a Entrar, esto es para que todos los recursos No se redireccionen.
	RewriteCond %{REQUEST_FILENAME} !-d
# RewriteCond %{REQUEST_FILENAME} !-f Si no existe un archivo.

	RewriteCond %{REQUEST_FILENAME} !-f
# Si no es un Directorio y no es un Archivo entonces vete a la Regla que está abajo. 
# RewriteRule Es que vamos a hacer una Regla 
	RewriteRule ^ index.php [QSA,L]
#Todo lo que sea que venga lo vamos a mandar a Index.php
# Le pasamos 2 modificadores que son: [QSA,L]
# Lo que hace [QSA= QueryString Append]: que todo lo que le mandemos se agrege al QueryString  
# Y la [L]: significa que esta es la ultima, si hacemos esto quiere decir que ya no queremos que redireccione más.```
```

<div align="center">
  <small><a href="#Configurar Base de Datos">🡡 Configurar Base de Datos</a></small>
</div>

## Route

Vamos a regresar a nuestra página donde buscamos nuestros paquetes y buscaremos una **libreria router** que sea compatible con **psr-7**.

En este caso vamos a utilizar el paquete de **aura/router** Hasta ahora estamos mezclando packetes de diferentes frameworks, componentes de diferentes librarias pero como estamos tratando de utilizar los estandares de PHP y estamos tratando de generar las mejores prácticas, **Todo esto puede ser compatible** y lo podemos ir integrando y adaptando. 

Una vez instalado el paquete haremos los siguiente:

1. Primero vamos a declarar que vamos a utilizar este aura router.
2. Crearemos un contenedor de rutas.
3. Despues vamos a agregar un Mapa, antes de agregar cualquier ruta
un mapa es lo que va a definir que ruta corresponde a que cosa.
```php
<?php
// 1
use Aura\Router\RouterContainer;
// 2
$routerContainer = new RouterContainer();

// 3
// To add a route, first retrieve the Map from the RouterContainer.
$map = $routerContainer->getMap();
?>
```
4. Despues vamos a crear un Mapa utilizando el Método GET

```php
<?php
$map->get('blog.read', '/blog/{id}', function ($request, $response) {
    $id = (int) $request->getAttribute('id');
    $response->getBody()->write("You asked for blog entry {$id}.");
    return $response;
});

// Nosotros en esté caso solo vamos a utilizar el metodos sin la function
$map->get('blog.read', '/blog/{id}', '¿que vamos a regresar?');

// En el primer párametro nosotros vamos a poner el nombre,  y como segundo parametro le enviaremos la ruta.
// Como tercer párametro nosotros vamos a regresar un String que contendra la dirección de nestra ruta.
$map->get('index', '/', '../index.php');
$map->get('addJobs', '/jobs/add', '../addJobs.php');

?>
```

5. En el primer párametro nosotros vamos a poner el nombre,  y como segundo parametro le enviaremos la ruta.
6. El tercer párametro es lo que nosotros vamos a regresar cuando hagamos match o cuando encontremos algo.

7. Vamos a obtener el matcher, es un objeto en el cual podemos llamar un match que ahora si compara el objeto request con lo que tenemos en nuestro Mapa.
```php 
<?php
$matcher = $routerContainer->getMatcher();
?>
```
8. Para terminar haremos la prueba final
```php
<?php
# and pass $request to match method
# @var Psr\Http\Message\ServerRequestInterface $request 

$route = $matcher->match($request);
?>
``` 
<div align="right">
  <small><a href="#Configurar Base de Datos">🡡 Configurar Base de Datos</a></small>
</div>

## Modelo, View, Controller (MVC), 

Es un patrón de diseño de tipo arquitectónico que lo que trata de solucionarnos es una estructura general de nuestra aplicación y lo trata de hacer dividiendo nuestra aplicación en 3 partes fundamentales: **Models, Views and Controllers (MVC)**. 

Los modelos y las vistas nunca deben hablar entre sí, y las vistas deben de ser como muy tontas, no deben hacer nada, deben de ser solo despliegue de datos, *siempre traten de no tener lógica en las vistas*.

## Creando Controllers

1. Primero creamos una carpeta Controllers dentro de App
2. Creamos 1 archivo IndexController que a su vez será una clase.
3. En la clase vamos a declarar una function, que será la acction de este controllador.
4. Debemos crear un **namespace** para despues poder usar está clase.
```php
<?php

namespace App\Controllers;

class IndexController {
  public function indexAction() {
    echo "IndexAction";
  }
}
?>
```
5. Iremos a nuestra carpeta donde estamos haciendo el routeo.
6. Modificaremos el string que devuelve el handler, y crearemos un objeto.
7. Este Objeto debe tener como valores, la clase del controllador y la action del mismo controllador.
```php
<?php
$map->get('index', '/introductionPHP/', [
  'controller' => 'App\Controllers\IndexController',
  'action' => 'indexAction'
]);
?>
```
8. Ahora en el else donde hacemos el routeo, vamos a crear una nueva instancia de la clase IndexController, la cual la vamos a obtener desde el objeto del handler.
9. Despues vamos a mandar llamar a la action con el objeto que creamos desde el Objeto handler con la llave de la action.
```php
<?php
if(!$route) {
  echo 'No route';
} else {
  $handlerData = $route->handler;
  $actionName = $handlerData['action'];
  $controllerName = $handlerData['controller'];
  // Creamos una nueva instancia del string handlerData de su posición controller que 
  // tiene como valor la declaración de la clase IndexData, por lo tanto estamos creando
  // una instancia directa de IndexController
  // $controller = new $handlerData['controller'];
  $controller = new $controllerName;
  // El objeto controller es un objeto de Tipo IndexController.
  // Ahora mandamos a llamar a la action del objeto IndexController.
  // Debemos poner parentesis al actionName para que mande a llamar a la function
  $controller->$actionName();
}
?>
```
<div align="right">
  <small><a href="#Configurar Base de Datos">🡡 Configurar Base de Datos</a></small>
</div>

## MVC Reestructurando Vistas y Controladores

Ahora que ya tenemos estamos retornando la Action del Controlador de IndexController, lo que vamos a hacer es retornar la vista HTML, pero para ello, vamos a poner las vistas en la carpeta **Views** una vez que tenemos las vistas ahí **index y addJob**, empecemos Modificando el IndexController.

1. Vamos a llevarnos la opción donde Llamamos a todos los Jobs y los Projects a la function IndexController, despues de eso tenemos que mandar a traer la vista con un require. No olvidemos los usar el **namespace de project y job**.
2. Tenemos que borrar Toda la lógica de PHP de la vista, Solo vamos a dejar la pura vista.
```php
<?php

namespace App\Controllers;
use App\Models\{Job, Project};

class IndexController {
  public function indexAction() {
  $jobs = Job::all();
  $projects = Project::all();
  
  require_once '../views/index.php';

  }
}
```
3. Ahora al entrar a la diracción debe de mostrarse correctamente.

**Ahora vamos a aplicar lo mismo para el addJob**

1. Primero debemos crear un Controllador para el AddJob como el siguiente:
```php
<?php
namespace App\Controllers;
  class JobsController {
    public function getAddJobAction() {
      echo 'getAddJobAction';
    }
  }
```
2. Ahora debemos Crear un Arreglo con la Clase y la Action del Objeto JobsController dentro del Handler en la carpeta **public** que es donde hacemos el routeo.
```php
<?php

$map->get('addJobs', '/introductionPHP/jobs/add', [
  'controller' => 'App\Controllers\JobsController',
  'action' => 'getAddJobAction'
]);

// El else ya lo tenemos definido desde el request anterior que queda así:
if(!$route) {
  echo 'No route';
} else {
  $handlerData = $route->handler;
  $actionName = $handlerData['action'];
  $controllerName = $handlerData['controller'];
  $controller = new $controllerName;
  $controller->$actionName();
}
```
**Ahora que ya tenemos corriendo la action del controller al entrar a la ruta, debemos hacer lo siguiente:**

1. Primero Vamos a llevarnos toda la lógica de la vista **addJob** a nuestra **action** del controllador.
2. Pegamos la lógica y despues hacemos un require o un include de la vista, que ya debe estar en la carpeta **views** no debemos olvidar incluir el uso del **namespace** de **Job y Project**.
```php
<?php
namespace App\Controllers;
use App\Models\{Job, Project};

class JobsController {
  public function getAddJobAction() {
    // Si $post No esta vacio vamos a guardar los datos y si esta vacío no hacemos nada.
    if(!empty($_POST)) {
      if($_POST['title'] == '' && $_POST['description'] == '') {

      } else {
        $job = new Job();
        $job->title = $_POST['title'];
        $job->description = $_POST['description'];
        $job->save();
      }
      if($_POST['titleProyect'] == '' && $_POST['descriptionProyect'] == '') {

      } else {
        $project = new Project();
        $project->title = $_POST['titleProyect'];
        $project->description = $_POST['descriptionProyect'];
        $project->visible = true;
        $project->save();
      }
    }

    require_once '../views/addJob.php';

  }
}
```
<div align="right">
  <small><a href="#Configurar Base de Datos">🡡 Configurar Base de Datos</a></small>
</div>

## Guardando datos en la base de datos.

Si revisamos nuestra vista addJob ahora nos marca un problema y es que ahora no podemos guardar los datos que el usuario nos manda por los input.

1. Primero porque tenemos que especificar que la ruta de la action del Form ha cambiado, tenemos que agregar la nueva ruta que definimos en las rutas.
2. Tambíen debemos agregar otro Mapa de ruta, porque el mapa por el que entramos al la vista es por el método Get, entonces nosotros podemos duplicar el Mapa y especificar que también usaremos el método POST.
3. Podemos cambiarle y nombre y la action que realiza si nosotros quisieramos, pero unicamente le cambiaremos el nombre.
```php 
<?php
$map->get('addJobs', '/introductionPHP/jobs/add', [
  'controller' => 'App\Controllers\JobsController',
  'action' => 'getAddJobAction'
]);
$map->post('saveJobs', '/introductionPHP/jobs/add', [
  'controller' => 'App\Controllers\JobsController',
  'action' => 'getAddJobAction'
]);
```
4. Una vez que nosotros agregamos el mapa con el método POST esto ya debe de volver a funcionar. Pero sin embargo cuando nosotros estamos trabajando con **DEACTOROS y con PSR7** Nosotros tenemos una cantidad enorme de métodos y características que se han ya normalizado y han echo que nosotros tengamos una interfaz más amigable y no estar utilizando las SUPERGlOBALES directamente.

5. Primero nosotros temos que detectar cual es el request cuando accedemos a la action del controlador. Para ello tenemos que pasarselo como párametro a la action.

```php
<?php
namespace App\Controllers;

class IndexController {
  public function IndexActionController($request) {

  }
}
```

6. Por lo tanto al hacer el routeo támbien podemos pasarle el request.
```php
<?php
if(!$route) {
  echo 'No route';
} else {
  $handlerData = $route->handler;
  $actionName = $handlerData['action'];
  $controllerName = $handlerData['controller'];
  $controller = new $controllerName;
  $controller->$actionName($request); // Pasamos el request
```
7. Al hacer esto nosotros ya podemos obtener el Método que está utilizando el request, ya sea si es POST o GET
```php 
var_dump($request->getMethod()); // Nos imprimira el Método que esta usando
```
8. Támbien nosotros podemos acceder al cuerpo del mensaje con el Método **getBody** y también tenemos el método getParsetBody que nos devuelve los párametros como un arreglo asociativo.
```php
<?php
var_dump($request->getBody()); // Accedemos al cuerpo del mensaje
var_dump($request->getParsetBody()); // Nos devuelve los párametros del Metodo como un arreglo asociativo 
```

9. Al usar estos métodos nosotros ya podemos acceder a los valores del método POST sin utilizar la superGlobal $_POST.

```php
// Ya que nosotros podemos acceder los párametros del método con:
$postData = $request->getParsedBody();
// Y despues cambiar $_POST por la nueva variable que hemos definido.
```
10. Al final esto quedaría de la siguiente manera:

```php
<?php
namespace App\Controllers;
use App\Models\{Job, Project};

class JobsController {
  public function getAddJobAction($request) {
    # Si $post esta vacio No guardamos nada, y si no esta vacío entonces lo guardamos.
    // Si Request->getMethod == POST entonces sigue adelante.
    if($request->getMethod() == 'POST') {
      $postData = $request->getParsedBody();
      if($postData['title'] == '' && $postData['description'] == '') {

      } else {
        $job = new Job();
        $job->title = $postData['title'];
        $job->description = $postData['description'];
        $job->save();
      }
      if($postData['titleProyect'] == '' && $postData['descriptionProyect'] == '') {

      } else {
        $project = new Project();
        $project->title = $postData['titleProyect'];
        $project->description = $postData['descriptionProyect'];
        $project->visible = true;
        $project->save();
      }
    }

    require_once '../views/addJob.php';

  }
}
```
<div align="right">
  <small><a href="#Configurar Base de Datos">🡡 Configurar Base de Datos</a></small>
</div>

## Template engines

Son motores que sirven para renderear el código html y sustituir las partes de código con los datos que se tienen que imprimir.

PHP a pesar de que fue pensado para ser un template engine, se ha enfocado más en la programación, por eso tenemos librerías que se concentran totalmente en esto.

Los templates Engines nos van a servir para evitar ataques **XSS** **Cross-site Scripting**.

Estos ataques pueden ser que un Usuario nos este mandando un código para que sea ejecutado en nuestra aplicación y si nosotros no temos cuidado, ese código podría afectar a otros usuarios o podria afectar nuestro sistema.

*Por ello nunca debemos confiar en la entrada de los usuarios, siempre tenemos que agregar validaciones*

<div align="right">
  <small><a href="#Configurar Base de Datos">🡡 Configurar Base de Datos</a></small>
</div>

## Twig

Twig es un Template Engine que nos ayudará a manejar la seguridad en los elementos de entrada de la aplicación.

Para instalarlo lo hacemos a traves de composer. ``composer twig/twig ``.

<div align="right">
  <small><a href="#Configurar Base de Datos">🡡 Configurar Base de Datos</a></small>
</div>

### Como implementar Twig.

1. En esté caso lo que vamos a hacer es aplicar herencia.
2. Crearemos un Controlador Padre que implementará Twig y apartir de ahí lo heredaremos a todos los hijos.
3. En el controlador Padre nosotros vamos a inicializar Twig y vamos a crear un Constructor para inicializar Twig y crear un entorno de tiwg.
4. Vamos a mandarle el loader como párametro.
5. En *cache* nosotros lo vamos a dejar en false, ya que no lo vamos a estar utilizando.
Nosotros podemos usar la cache para que se preformateen algunos documentos y despúes los pueda utilizar directamente desde la cache. Para desarrollo no es necesario.
6. Vamos a utilizar *debug* en true. 
Debug nos va a permitir también que nos muestre errores en caso de que los encuentre.
7. De está forma nosotros ya tenemos inicializado nuestro template engine. 
```php
<?php
namespace App\Controller;

class BaseController {
  protected $templateEngine;
  public function __construct() {
    $loader = new Twig_Loader_Filesystem('../views');
    $this->templateEngine = new Twig_Environment($loader, array(
      'debug' => true,
      'cache' => false,
    ));
  }
}
```
8. Ahora nosotros vamos a crear una función publica, lo que vamos a hacer es decirle que archivo queremos renderear. Y le vamos a pasar los datos que queremos incluir dentro de nuestro template.

```php
class BaseController {
  protected $templateEngine;
  public function __construct() {
    $loader = new Twig_Loader_Filesystem('../views');
    $this->templateEngine = new Twig_Environment($loader, array(
      'debug' => true,
      'cache' => false,
    ));
  }
  // Qué archivo queremos Renderear? y los datos queremos incluir, por defecto le pasaremos un arreglo Vacio.
  public function renderHTML($fileName, $data = []) {
    return $this->templateEngine->render($fileName, $data);
  }
}
```
9. Una vez que inicializamos el templateEngine y creamos la función para renderizar nuestro HTML, ahora lo que haremos es implementarlo con nuestros controlladores hijos. 

10. En lugar de hacer un include o un require de nuestra vista, lo que haremos será imprimir con **echo** nuestra vista: 
```php
// require_once '../views/addJob.php';
echo $this->renderHTML('addJob.php');
```
<div align="right">
  <small><a href="#Configurar Base de Datos">🡡 Configurar Base de Datos</a></small>
</div>

## Templates con Twig

Ahora que ya instalamos Twig, preparemos nuestra aplicación para usarlo.

1. Cambiaremos el formato de nuestras vistas por **.twig**
2. Lo primero que vamos a ver es que Twig ya no permite que utilicemos **PHP** internamente.
3. Ahora si revisamos la documentación de twig, notaremos que twig usa una sintaxis diferente para que hagamos el rendereo de las cosas enn nuestra aplicación. 
Básicamente todo lo vamos a estar utilizando con doble llave {{ InformacionRender }}
4. Nuestro objeto donde hacemos el rendereo tenemos que pasarle el valor de la llave 'name'.
**ejemplo para nuestro index**
```html
<div class="info">
          <h1> {{ name }} </h1>
          <h2>PHP Developer</h2>
</div>
```
La idea de Twig es que nosotros ya no puedamos estar metiendo lógica en nuestras vistas, pues el objetivo de twig es que solo muestremos información final, para ello lo que debemos hacer es poner la lógica en nuestros modelos o en nuestro controlador, para que de está manera twig solo muestre el despliegue de información.

**ejemplo para hacer un For en twig con nuestro index**
```html 
<ul>
  {% for job in jobs %}
  <li class="work-position">
      <h3>{{ job.title }}</h3>
      <p> {{ job.description }} </p>
      <p><strong> {{ job.getDurationAsString() }} </strong></p>
      <strong>Achievements:</strong>
      <ul>
      <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
      <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
      </ul>
  </li>
  {% endfor %}
</ul>
```
5. Es importante que nosotros mandemos los valores que vamos a imprimir dentro del arreglo render, con las **clave-valor** para que puedamos acceder a la información dentro de twig.

Twig automáticamente va hacer un scape o un escapado, una especie de validación cuando se encuentre cosas de este estilo, y esto nos va ayudar por default a tener esa ventaja, una guarda antes de que nos pueda pasar un ataque **XSS**.

Pero realmente si nosotros quisieramos hacer un ataque de XSS podemos hacerlo, pero tendríamos que utilizar los helpers que ofrece twigy y podemos enviar texto sin escapar. Pero para evitar esto nosotros podemos hacer validaciones para especificar que queremos texto sin escapar.

6. Para Terminar nosotros vamos a hacer un pequelo cambio en la parte de indexController y vamos a camnbiaar el **echo** por un **return** porque queremos tener un poco de más control sobre las cosas que están pasando.
 
Para ello vamos a cambiar el return para que nos regrese un HTML. Pero como estamos utilizando renderHTML, lo que queremos es tener una respuesta HTML y como estamos utilizando **PSR-7** también podemos crear unas respuestas que sean compatibles con PSR-7 y que también puedan ser utilizadas con otras librerías si lo queremos asi más adelante. 
- Primero vamos a nuestro BaseController, aqui vamos a usar ``use Zend\Diactoros\Response\HtmlResponse;`` *Response* es lo que vamos a regresar aqui.
- cuando hagamos el return del render lo que vamos a especificar es que nos haga un HtmlResponse. 
```php
public function renderHTML($fileName, $data = []) {
    return new HtmlResponse($this->templateEngine->render($fileName, $data));
  }
```
- Y en Index donde hacemos el routeo en lugar de solo tener: 
```php
$controller->$actionName($request);
```
- Vamos a hacer un:
```php
$response = $controller->$actionName($request);
  
echo $response->getBody();
```
Ahora nuestra respuesta ya no es una respuesta que estamos imprimiendo en medio de nuestra aplicación, ya tenemos un flujo mucho más razonable, Ya podemos ver que estamos utilizando PSR7 completamente; tenemos nuestro router, tenemos un request que enviamos, obtenemos una respuesta, y con la respuesta la enviamos al cliente. 

<div align="right">
  <small><a href="#Configurar Base de Datos">🡡 Configurar Base de Datos</a></small>
</div>

## Extendiendo Templates con Twig

Extender templates nos permitirá hacer sitios más dinámicos reutilizando código HTML.

Denotaremos con la palabra reservada extends el código que queremos reutilizar y con la palabra block el código que deseamos sea dinámico, este último debe tener una palabra clave que le sirva de identificador para el código que se estará reemplazando.

Al declarar un layout, se va a usar {% block content %}{% endblock %} para indicar en qué parte del layout se va a mostrar el contenido de los HTML hijos.

```html
<!doctype html>
<htmllang="en">
<head>
  <title>Resume</title>
</head>

<body>
  <divclass="container">
    {% block content %}
    {% endblock %}
  </div>
</body>
</html>
```
Para usar el layout, se tiene que hacer lo siguiente:

- Declarar el layout con usando ``extends``.
- Indicar el código HTML sue se va a mostrar con ``block content``.

```php
{% extends "layout.twig" %}

{% block content %}
  <p>Estoy usando un layout</p>
{% endblock %}
```
<div align="right">
  <small><a href="#Configurar Base de Datos">🡡 Configurar Base de Datos</a></small>
</div>

## Validaciones

Usaremos esta dependencia: [Respect/validation](https://packagist.org/packages/respect/validation) la cual integraremos usando composer.

Haremos validaciones del lado del servidor

1. Primero integraremos la librería respect/validation.
2. En el tamplate donde guardamos los datos del usuario agregaremos la validación.
3. En JobsController tenemos que hacer uso del **namespace** de validation.
4. La parte donde hacemos verificamos el metodo POST vamos a agregar la validation para title y description.
5. También vamos a agregar una nueva section en la vista de addJobs donde pondremos el mensaje de error y de éxito.
6. Declararemos una variable llamada ResponseMessage.
7. Mandaremos la respuesta al cliente por medio del objeto donde hacemos ReanderHTML.
7. Usaremos un **try-catch** para manejar el error.
El código quedará de la siguiente manera:
```php
<?php
namespace App\Controllers;
use App\Models\{Job, Project};
use Respect\Validation\Validator as v;

class JobsController extends BaseController {
  public function getAddJobAction($request) {
    $responseMessage = null;
    # Si $post esta vacio No guardamos nada, y si no esta vacío entonces lo guardamos.
    // Si Request->getMethod == POST entonces sigue adelante.
    if($request->getMethod() == 'POST') {
      $postData = $request->getParsedBody();
      $jobValidator = v::key('title', v::stringType()->notEmpty())
                  ->key('description', v::stringType()->notEmpty());
        try {
          $jobValidator->assert($postData);
          if($postData['title'] == '' && $postData['description'] == '') {

          } else {
            $job = new Job();
            $job->title = $postData['title'];
            $job->description = $postData['description'];
            $job->save();
          }
          if($postData['titleProyect'] == '' && $postData['descriptionProyect'] == '') {

          } else {
            $project = new Project();
            $project->title = $postData['titleProyect'];
            $project->description = $postData['descriptionProyect'];
            $project->visible = true;
            $project->save();
          }
          $responseMessage = 'SAVE!!';
        } catch(\Exception $e) {
          $responseMessage = $e->getMessage();
        }
    }

    return $this->renderHTML('addJob.twig', [
      'responseMessage' => $responseMessage,
    ]);

  }
}
```
## Subida de archivos

Al subir archivos debemos tener muchos puntos de seguridad en cuenta, pues exponemos el acceso al servidor.

1. Primero agregamos un nuevo input de tipo: file
2. Prepararemos el form colocando la propiedad: enctype='multipart/form-data
3. En la parte donde guardamos los datos JobsController vamos a guardar los archivos que subimos en una variable, de la siguiente manera: 
```php
    // Regresame en está variable Todos los archivos que se subieron.
    $files = $request->getUploadedFiles();
    // Checkamos lo que tiene $files. 
    var_dump($files);
```

4. La Forma en la que lo vamos a acceder es atraves del request, con la llave del name que definimos en HTML: **logo**
```php
  try {
    $jobValidator->assert($postData);
    // Regresame en está variable Todos los archivos que se subieron.
    $files = $request->getUploadedFiles();
    // Checkamos lo que tiene $files.
    // var_dump($files);
    // Lo vamos a acceder atraves del request
    $logo = $files->['logo'];
    
    $responseMessage = 'SAVE!!';
  } catch(\Exception $e) {
    $responseMessage = $e->getMessage();
  }

```
Lo mas recomendable es que nosotros tengamos todos nuestros archivos en otro servidor, no en el servidor donde estamos desarrollando nuestra aplicación, es decir, tener los archivos en otra parte y solo tener el código de php en el servidor actual. Eso sería lo ideal, pero para este ejemplo vamos a crear una carpeta de subidas.

Nosotros tendriamos que validar acerca del archivo que se sube, muchas cosas se podrían considerar aquí, porque podríamos tener problemas de seguridad. Por ejemplo si permitimos que un usuario suba un archivo .php y lo logra acceder, entonces el podría estar ejecutando código PHP en nuestro servidor, imaginense que peligros podría ser eso. Entre otras más validaciones, etc.

5. Validamos si la subida del archivo se realizó correctamente; entonces vamos a obtener el nombre del archivo, incluso nosotros podemos cambiar el nombre del archivo, en esté caso solo lo vamos a obtener.

```php
if($logo->getError() == UPLOAD_ERR_OK) {
            $fileName = $logo->getClientFileName();
          }
```
Está interfaz: *getClientFileName()* viene dada de las interfaces declaradas en PSR7 

6. Apartir de aquí nosotros vamos a mover nuestro archivo a la carpeta de Uploads

Debemos mover el archivo si deseamos guardarlo, ya que el archivo se encuentra en una zona de memoria que está utilizando PHP para mantener los archivos intermedios, y luego si nosotros queremos guardarlo lo tenemos que salvar.

```php
  if($logo->getError() == UPLOAD_ERR_OK) {
    $fileName = $logo->getClientFileName();
    $logo->moveTo("uploads/$fileName");
  }
```

### En caso de error

Si nosotros no podemos guardar el archivo correctamente y nos muestra un mensaje de: *El directorio uploads no existe o no es escribible* nosotros simplemente tenemos que darle los permisos a la carpeta uploads y volver a intentar.

<div align="right">
  <small><a href="#Configurar Base de Datos">🡡 Configurar Base de Datos</a></small>
</div>

## Tips de seguridad para subir archivos en PHP

Cuando permites subir archivos a tu servidor, estas exponiendote a posibles ataques o hackeos, por eso es muy importante tratar de tener cuidado con la forma en la que almacenamos los archivos.

Existen muchas formas de protegernos, pero aun asi, aqui te dejo algunos tips para que tengas mas tranquilidad a la hora de permitir que usuarios suban archivos a tus aplicaciones:

**De ser posible almacena los archivos en un servicio externo a tu aplicación como Amazon S3.**

Un ataque muy común es tratar de subir un archivo que no es lo que nosotros esperamos, un atacante podría intentar subir un archivo PHP para que al mandarlo llamar el tenga acceso al servidor, pero si almacenamos los archivos en otro sitio él no tendrá acceso a nuestro servidor.

### Cuida los permisos.

Cuando subimos un archivo podemos usar la función chmod para cambiar los permisos e indicarle al sistema operativo que ese archivo no es ejecutable.

### Verifica el tipo de archivo que están subiendo.

Podemos verificar la extensión del archivo, el mime type y lo encabezados para validar que el archivo es del tipo que estamos pidiendo.

### Limita el tamaño de los archivos permitidos

Dependiendo de tu aplicación, tu puedes saber qué tamaño de archivo es razonable, de ser así, limita el tamaño de la subida de archivos.

### Si tu aplicación usa login

Solo permite que los usuarios registrados hagan la subida de archivos.

### Genera un nombre de archivo aleatorio y añade la extensión previamente generada.

Muchas veces los atacantes trataran de esconder sus archivos, tu puedes cambiar el nombre de un archivo y poner otro que para ti sea claro que es un archivo subido por un usuario.

### No confíes sólo en una validación por el lado del cliente, no es suficiente.

Lo ideal es implementar una seguridad tanto por el lado del cliente como por el lado del servidor. También podemos comenzar validaciones del lado del cliente usando javascript, sin duda son buenas, pero es relativamente sencillo sobrepasarse y enviar un archivo malicioso.

### No uses solo una medida de protección.

Combina todas las que te sean posibles para tener mayor seguridad en tu app.

<div align="right">
  <small><a href="#Configurar Base de Datos">🡡 Configurar Base de Datos</a></small>
</div>

## Autenticando usuarios

Una vez creada nuestro MVC de la addUser, ahora queremos Autenticar los Usuarios, para ello Utilizaremos Eloquent para acceder a la tabla User de la base de datos y obtener el password, para después compararlo y ejecutar la validación.
Las validaciones de password las haremos con la función password_verify()

1. Vamos a crear una nueva ruta de tipo get, la que hará el Login.
```php
$map->get('loginForm', '/introductionPHP/login', [
  'controller' => 'App\Controllers\AuthController',
  'action' => 'getLogin'
]);
```
2. Vamos a crear un nuevo controlador que se va a llamar AuthController el cúal tendra un método llamado getLogin.
```php
<?php
namespace App\Controllers;
class AuthController extends BaseController {
  public function getLogin() {
    return $this->renderHTML('login.twig');
  }
}
```
3. Esté nuevo controlador va a rederear una nueva vista, que es donde haremos nuestro Login
4. Nuestra vista, unicamente tendra 2 campos: email y password.
5. La action que devolverá nuestra vista será a un nueva ruta de tipo **post** hacia '/auth'.
```html
<form action="/introductionPHP/auth" method="post" class="container">
  <h1>Login</h1>
  <input type="email" name="email" id="" placeholder="Email" />
  <input type="password" name="password" id=""  placeholder="Contraseña"/>
  <button type="submit" class="btn">Login</button>  
</form>
```
6. Vamos a crear la ruta con el mismo controlador AuthController, pero la action será una nueva función que es donde haremos la validación del email y password.
```php
namespace App\Controllers;
use App\Models\User;

class AuthController extends BaseController {
  public function getLogin() {
    return $this->renderHTML('login.twig');
  }
  public function postLogin($request) {
    $postData = $request->getParsedBody();
    // Validation here
    $user = User::where('correo', $postData['email'])->first();
    if($user) {
      if(password_verify($postData['password'], $user->password)) {
        echo 'Correct';
      } else {
        echo 'Wrong';
      }
    } else {
      echo 'Not Found';
    }
  }
}
```
La función **where** hace una busquedad, como primer párametro le pasamos el nombre de campo de la DataBase, como segundo párametro le pasamos, el dato que queremos comparar.

La funcíon **password_verify** es el complemento de **password_hash** que sirve para verificar si el password que ingresa el usuario es el mismo que el de la base de datos. Recordemos que el password está encriptado, por lo tanto nosotros jámas lo veremos!

<div align="right">
  <small><a href="#Configurar Base de Datos">🡡 Configurar Base de Datos</a></small>
</div>

## Obteniendo Respuesta.

Ahora que ya validamos nuestros usuario, lo que queremos es obtener una respuesta, para ello vamos vamos a agregar una section en nuestro HTML donde vamos a mandar el mensaje de respuesta en caso de que no este correcto. Y si está correcto vamos a redirectionar al usuario a otra página.

1. Crearemos una nueva section en nuestra vista HTML donde mandaremos el mensaje por medio de Twig.
```html
<section class="box-message">
  <div class="validation">
   <p> {{ responseMessage }} </p>
   </div>
  </section>
```
2. Si la validacion es correcta entonces nosotros podemos crear una respuesta de redireccionamiento, para ello utilizaremos **Deactoros** recuerden que lo estamos utilizando en nuestro **BaseController**.

Deactoros tiene una clase especial para hacer rediccionamiento que se llama **RedirectResponse** y vamos a utilizarla de la siguiente manera:

1. Usamos el namespace donde se encuentra la clase ``use Zend\Diactoros\Response\RedirectResponse;``
2. Ahora cuando la validación sea valida nosotros vamos a hacer un return, donde crearemos una instancia de la clase **RedirectResponse** y le pasaremos una ruta.
```php
 if(password_verify($postData['password'], $user->password)) {
        return new RedirectResponse('/admin');
      } else {
        $responseMessage = 'Bad Credentials';
      }
```
Si lo probamos así tal cual, no va a funcionar y nos va a dejar una página en blanco totalmente, como si nos hubiera regresado una respuesta vacía, lo que pasa es que cuando nosotros queremos hacer un redireccionamiento interno en PHP, lo que tenemos que hacer es escribir un Header(encabezado).
Cuando nosotros estamos utilizando respuestas dentro de PHP nosotros tenemos diferentes cosas que se envían. No solo se envían los datos de la respuesta tál cual que es la parte del HTML, también se pueden enviar otros datos especiales que indican ciertas cosas extras. 
Nosotros podemos envíar: el tipo de mensaje,(podría ser que enviemos texto HTML,plano,Json) o podría que nosotros enviemos redireccionamiento, etc. Entonces podríamos enviar diferentes cosas: diferentes encabezados en la respuesta.

Si vamos a la parte donde hacemos el despach de la ruta, donde nosotros terminamos haciendo un **echo** con la respuesta del $response que generamos, pero si nos damos cuenta solo es el Body.

Lo que tenemos que hacer es leer los headers y mandarlos a imprimir

3. Nosotros tendremos que ir a donde hacemos el Despach de la ruta
4. Vamos a leer los headers y los vamos a imprimir con un ciclo *ForEach*.

El foreach siginifica que vamos recorrer un arreglo y cada elemento lo vamos a utilizar.
```php
// Para cada header que tenemos de $name => valor
// Obtenemos todos los encabezados que se han generado en nuestras respuestas.
// Estos encabezados tienen 1 nombre pero pueden contener más de un solo valor 
foreach($response->getHeaders() as $name => $values) {
  // Pero nosotros vamos a imprimirlo 1 por 1 {nombre: valor, nombre: valor, etc.}
    foreach($values as $value) {
      // Con la función header y como imprimimos los encabezados.
      // sprintf: nos permite imprimir cosas dentro de una cadena.
      // con %s: le decimos que inserte 1 cadena, seguido de otra cadena.
      header(sprintf('%s: %s', $name, $value), false);
    }
  }
  // http_response_code: Nos permite establecer cual es el codigo de respuesta que nosotros vamos a enviar.
  // Nuesta respuesta trae el status correcto de redireccionamiento.
  http_response_code($response->getStatusCode());
  echo $response->getBody();
```
PD: Los códigos de respuesta indican diferentes cosas cuando estamos trabajando con mensajes HTTP, el código más común es el **código 200:** Significa que todo salío correcto.
Existen diferentes mensajes; NotFound:404, Error_servidor:500, y los mensajes **300**: que son de **Redireccionamiento**. 

<div align="right">
  <small><a href="#Configurar Base de Datos">🡡 Configurar Base de Datos</a></small>
</div>

## Manejo de sesiones 

Manejaremos sesiones con PHP

Una vez que el usuario esté logeado almacenaremos su id en la variable $_SESSION, esta variable representará la sesión y estará viva mientras el usuario esté logeado.

Utilizaremos session_start(); para inicializar la sesión y controlarla en todas las páginas que tiene acceso.

## Redirigir a otra página

Para redrigir hay que agregar un use a `Zend\Diactoros\Response\RedirectResponse`.

```php
use Zend\Diactoros\Response\RedirectResponse;
```

Luego, la redirección se hace de la siguiente manera:

```php
return new RedirectResponse('/admin');
```

Además, para que las redirecciones funcionen, hay que agregar las cabeceras al response.

```php
foreach($response->getHeaders() as $name => $values) {
  foreach($values as $value) {
    header(sprintf('%s: %s', $name, $value), false);
  }
}
http_response_code($response->getStatusCode());

echo $response->getBody();
```

<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

## Sesiones

Para poder usar las sesiones, se debe de usar la sentencia `session_start`.

```php
session_start();
```

Para setear un valor en la sesión:

```php
$_SESSION['userId'] = $user->id;
```

Para leer el valor de una sesión:

```php
$userId = $_SESSION['userId'];
```

<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

## Restringir acceso a usuarios autenticados

Para restringir el acceso a ciertas rutas, se va a agregar un key al array de enrutamiento:

```php
$map->get('admin', '/admin', [
  'controller' => 'IndexController',
  'action' => 'getIndex',
  'auth' => true
]);
```

Luego, al momento de mostrar la respectiva plantilla para el ruteo, hacer hacer una verificación de la sesión en casi se requiera autenticación:

```php
$needsAuth = $handlerData['auth'] ?? false;

$sessionUserId = $_SESSION['userId'] ?? null;
if($needsAuth && !$sessionUserId) {
  echo 'access denied';
  die;
}
```

<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

## Variables de Entorno

Los datos de configuración de la base de datos no deberían de encontrarse hardcodeados. Es una buena práctica usar variables de entorno para sacarlas de ahí.

Utilizaremos [vlucas/phpdotenv](https://packagist.org/packages/vlucas/phpdotenv) para cargar las variables de entono en super variables.

Se va a instalar de la siguiente manera:

```bash
$ php composer.phar require vlucas/phpdotenv
```

Para usarlo, se debe de crear un archivo **.env** en donde se van a almacenar las variables de entorno:

```php
BD_HOST=localhost
DB_DATABASE=cursophp
```

Para obtener los datos de las variables, se usa `getenv`:

```php
$host = getenv('DB_HOST');
$database = getenv('DB_DATABASE');
```

<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>

## Deploy

Para poder desplegar en Heroku se tiene que hacer lo siguiente:

1. Crear una nueva app desde el hashboard de Heroku.

2. Linkear al repositorio remoto de Heroku a la app.

3. Hacer un push de la aplicación al repositorio remoto de Heroku.

```bash
$ git push heroku master
```

4. Instalar Heroku Posgress:
https://elements.heroku.com/addons/heroku-postgresql

5. Luego, te vas a la sección de **resources** de tu app en Heroku y entras a 
**Heroku Postgres :: Database**

6. Te vas a la pestaña **Settings** y ahí te deberían de aparecer los datos de conexión a la DB de Posgress

7. Vuelves a la vista de tu app en Heroku y vas a la pestaña **Settings**.

8. Haces click en **Reveal Config Vars**.

9. Agregas las variables de entorno con los datos de conexión a la base de datos. Estas variables son las mismas que has agrega en el archivo .env solo que contienen la data de conexión a la base de datos de postgress.

```
BD_HOST
DB_NAME
DB_USER
DB_PASS
DB_DRIVER
DB_PORT
```

<div align="right">
  <small><a href="#tabla-de-contenido">🡡 volver al inicio</a></small>
</div>