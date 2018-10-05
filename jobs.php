<?php 

require 'app/Models/Job.php';
require 'app/Models/Project.php';
require_once 'app/Models/Printable.php';

# Creando Objetos de tipo Job Con Constructor.
$job1 = new Job('PHP Developer', 'this is a amazing', 10);
$job2 = new Job('JavaScript Developer', 'This is awesoome!!', 12);
$job3 = new Job('', 'is a lenguages interesting!!', 18);
# Arreglo de Jobs
$jobs = [
  $job1,
  $job2,
  $job3
];

# Creando Objetos de tipo Project Con Contstructor.
$project1 = new Project('Project X', 'és un projecte molt interessant php, on usamos el marc de laravel');
$project1->months = 22;
$project2 = new Project('Project Y', 'és un projecte molt interessant de JavaScript, on fem servir el framework de react per fer un Aplication mòbil');
$project2->months = 10;
$project3 = new Project('Puzzle 8', 'Proyecto para el curso de Tecnologias web que esta muy cool :P');


# Creando Arreglo de Proyectos
$projects = [
  $project1,
  $project2,
  $project3
];

function printJobs(Printable $job) {
  if($job->visible == false) {
    return;
  }
  echo '<li class="work-position">';
  echo '<h3>'. $job->getTitle() .'</h3>';
  echo '<p>'. $job->getDescription() .'</p>';
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
  echo '<h3 class="sub">'. $project->getTitle() .'</h3>';
  echo '<img id="profile-picture" src="https://ui-avatars.com/api/?name=Jasan+Hdz&size=255" alt="">';
  echo '</div>';
  echo '<div class="col">';
  echo '<p>'. $project->getDurationAsString() .'</p>';
  echo '<p>'. $project->getDescription() .'</p>';
  echo '<h4>Technologies used:</h4>';
  echo '<span>PHP</span>';
  echo '<span>HTML</span>';
  echo '<span>CSS</span>';
  echo '</div>';
  echo '</div>';
}