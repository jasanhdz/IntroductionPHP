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
          // Regresame en está variable Todos los archivos que se subieron.
          $files = $request->getUploadedFiles(); 
          // var_dump($files);
          $logo = $files['logo'];
          if($logo->getError() == UPLOAD_ERR_OK) {
            $fileName = $logo->getClientFileName();
            $logo->moveTo("uploads/$fileName");
          }
          // if($postData['title'] == '' && $postData['description'] == '') {

          // } else {
          //   $job = new Job();
          //   $job->title = $postData['title'];
          //   $job->description = $postData['description'];
          //   $job->save();
          // }
          // if($postData['titleProyect'] == '' && $postData['descriptionProyect'] == '') {

          // } else {
          //   $project = new Project();
          //   $project->title = $postData['titleProyect'];
          //   $project->description = $postData['descriptionProyect'];
          //   $project->visible = true;
          //   $project->save();
          // }
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