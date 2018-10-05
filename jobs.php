<?php 
# Creando Template Jobs

$job1 = [
  'title' => 'PHP Developer',
  'description' => 'this is a amazing',
  'months' => 10,
  'visible' => true
];
$job2 = [
  'title' => 'JavaScript Developer',
  'description' => 'This is awesoome!!',
  'months' => 12,
  'visible' => true
];
$job3 = [
  'title' => 'Java Dev',
  'description' => 'is a lenguages interesting!!',
  'months' => 18,
  'visible' => true
];

$jobs = [
  $job1,
  $job2,
  $job3
];

# Creando Template Proyects

$project1 = [
  'title' => 'Project X',
  'description' => 'és un projecte molt interessant php, on usamos el marc de laravel',
  'months' => 22,
  'visible' => true
];
$project2 = [
  'title' => 'Project Y',
  'description' => 'és un projecte molt interessant de JavaScript, on fem servir el framework de react per fer un Aplication mòbil',
  'months' => 10,
  'visible' => true
];
$project3 = [
  'title' => 'Puzzle 8',
  'description' => 'Proyecto para el curso de Tecnologias web que esta muy cool :P',
  'months' => 2,
  'visible' => true
];

# Creando Arreglo de Proyectos

$projects = [
  $project1,
  $project2,
  $project3
];

# Creando Funciones de Jobs

function getDuration($months) {
  $years = floor($months / 12);
  $meses =  $months % 12;

  if($years > 0) {
    if ($years == 1) {
      return "<strong>Total de Job:</strong> $years Year, $meses Months";
    } else {
      return "<strong>Total de Job:</strong> $years Years, $meses Months";
    }
  } else {
    return "<strong>Total de Job:</strong> $meses Months";
  }
}

function printJobs($job) {
  if($job['visible'] == false) {
    return;
  }
  echo '<li class="work-position">';
  echo '<h3>'. $job['title'] .'</h3>';
  echo '<p>'. $job['description'] .'</p>';
  echo '<p>'. getDuration($job['months']) .'</p>';
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
  if($project['visible'] == false) {
    return;
  }
  echo '<div class="row">';
  echo '<div class="col-3">';
  echo '<h3 class="sub">'. $project['title'] .'</h3>';
  echo '<img id="profile-picture" src="https://ui-avatars.com/api/?name=Jasan+Hdz&size=255" alt="">';
  echo '</div>';
  echo '<div class="col">';
  echo '<p>'. getDuration($project['months']) .'</p>';
  echo '<p>'. $project['description'] .'</p>';
  echo '<h4>Technologies used:</h4>';
  echo '<span>PHP</span>';
  echo '<span>HTML</span>';
  echo '<span>CSS</span>';
  echo '</div>';
  echo '</div>';
}