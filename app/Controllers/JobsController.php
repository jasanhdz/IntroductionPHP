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