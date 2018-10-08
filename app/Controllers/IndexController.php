<?php

namespace App\Controllers;
use App\Models\{Job, Project};

class IndexController extends BaseController{
  public function indexAction() {
  $jobs = Job::all();
  $projects = Project::all();

  $lastName = 'Hernández';
  $name = 'Jasan ' . $lastName;
  
  return $this->renderHTML('index.twig', [
    'name' => $name,
    'jobs' => $jobs,
    'projects' => $projects
  ]);

  }
}