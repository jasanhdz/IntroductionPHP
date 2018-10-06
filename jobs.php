<?php 

use App\Models\{Job, Project, Printable};
require 'vendor/autoload.php';

$jobs = Job::all();
$projects = Project::all();

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