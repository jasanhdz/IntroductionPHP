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