<?php
ini_set('display_errors', 1);
ini_set('display_starup_error', 1);

error_reporting(E_ALL);

require '../vendor/autoload.php';

session_start();

$dotenv = new Dotenv\Dotenv(__DIR__ . '/..');
$dotenv->load();

use Illuminate\Database\Capsule\Manager as Capsule;
use Aura\Router\RouterContainer;
$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => getenv('DB_HOST'),
    'database'  => getenv('DB_NAME'),
    'username'  => getenv('DB_USER'),
    'password'  => getenv('DB_PASS'),
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

$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
  $_SERVER,
  $_GET,
  $_POST,
  $_COOKIE,
  $_FILES
);

function printJobs($job) {
  if($job->visible == false) {
    return;
  }
  echo '<li class="work-position">';
  echo '<h3>'. $job->title .'</h3>';
  echo '<p>'. $job->description .'</p>';
  echo '<p>'. $job->getDurationAsString() .'</p>';
  echo '<strong>Achievements:</strong>';
  echo '<ul>';
  echo  '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo   '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo  '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '</ul>';
  echo '</li>';
}

# Creando Funciones de Projects
function printProject($project) {
  if($project->visible == false) {
    return;
  }
  echo '<div class="row">';
  echo '<div class="col-3">';
  echo '<h3 class="sub">'. $project->title .'</h3>';
  echo '<img id="profile-picture" src="https://ui-avatars.com/api/?name=Jasan+Hdz&size=255" alt="">';
  echo '</div>';
  echo '<div class="col">';
  echo '<p>'. $project->getDurationAsString() .'</p>';
  echo '<p>'. $project->description .'</p>';
  echo '<h4>Technologies used:</h4>';
  echo '<span>PHP</span>';
  echo '<span>HTML</span>';
  echo '<span>CSS</span>';
  echo '</div>';
  echo '</div>';
}

$routerContainer = new RouterContainer();

$map = $routerContainer->getMap();
$map->get('index', '/introductionPHP/', [
  'controller' => 'App\Controllers\IndexController',
  'action' => 'indexAction'
]);
$map->get('addJobs', '/introductionPHP/jobs/add', [
  'controller' => 'App\Controllers\JobsController',
  'action' => 'getAddJobAction',
  'auth' => true
]);
$map->post('saveJobs', '/introductionPHP/jobs/add', [
  'controller' => 'App\Controllers\JobsController',
  'action' => 'getAddJobAction'
]);
$map->get('addUser', '/introductionPHP/users/add', [
  'controller' => 'App\Controllers\UsersController',
  'action' => 'getUserAction',
  'auth' => true
]);
$map->post('saveUser', '/introductionPHP/users/save', [
  'controller' => 'App\Controllers\UsersController',
  'action' => 'getUserAction'
]);
$map->get('loginForm', '/introductionPHP/login', [
  'controller' => 'App\Controllers\AuthController',
  'action' => 'getLogin'
]);
$map->post('auth', '/introductionPHP/auth', [
  'controller' => 'App\Controllers\AuthController',
  'action' => 'postLogin'
]);
$map->get('admin', '/introductionPHP/admin', [
  'controller' => 'App\Controllers\AdminController',
  'action' => 'getIndex',
  'auth' => true
]);
$map->get('logout', '/introductionPHP/logout', [
  'controller' => 'App\Controllers\AuthController',
  'action' => 'getLogout'
]);

$matcher = $routerContainer->getMatcher();
$route = $matcher->match($request);
if(!$route) {
  echo 'No route';
} else {
  $handlerData = $route->handler;
  $controllerName = $handlerData['controller'];
  $actionName = $handlerData['action'];

  $needsAuth = $handlerData['auth'] ?? false;
  $sessionUserId = $_SESSION['userId'] ?? null;
  if($needsAuth && !$sessionUserId) {
    echo "<p style='font-size:24px; padding:10px;'>I am sorry :( . You have to <a href='/introductionPHP/login'>log in</a> to access this page.</p>";
    die;
  }

  $controller = new $controllerName;
  $response = $controller->$actionName($request);

  foreach($response->getHeaders() as $name => $values) {
    foreach($values as $value) {
      header(sprintf('%s: %s', $name, $value), false);
    }
  }
  http_response_code($response->getStatusCode());
  echo $response->getBody();

  // var_dump($route->handler);
}

// Si si encontraste esa ruta quiero que me digas cual es el manejador de esa ruta.
// var_dump($route->handler);

// $route = $_GET['route'] ?? '/';

// if($route == '/') {
//   require_once '../index.php';
// } elseif($route == 'addJob') {
//   require_once '../addJob.php';
// }
