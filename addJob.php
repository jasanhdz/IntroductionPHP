<?php 

use App\Models\{Job, Project};

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
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registro</title>
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Source+Sans+Pro" rel="stylesheet">
  <link rel="stylesheet" href="style/addjob.css">
  <link rel="stylesheet" href="../style/addjob.css">
  <style>
  .btn,input{font-size:20px}.box,.box-message{display:flex;align-content:center}.validation,h2{text-align:center}body{background-color:#f5f5f5;font-family:'Source Sans Pro',sans-serif}.box{justify-content:center;height:560px;padding:20px 0}.btn,.container,input{padding:10px}.container{display:flex;flex-direction:column;width:400px;border:1px solid #000;border-radius:4px;height:inherit}input{margin-top:15px}.btn{color:#fff;margin:15px;width:150px;align-self:center;background:#ff7368;border-radius:7px;cursor:pointer;border-bottom:5px solid #ff3728}.box-message{justify-content:center;width:1440px}.validation{border-radius:8px;margin-top:10px;margin-left:40px;width:600px;height:80px;background-color:#add8e6}
  </style>
</head>
<body>
  <div class="box">
  <form action="/introductionPHP/addJob.php" method="post" class="container">
  <h2>Add Job</h2>
  <input type="text" name="title" placeholder="Title" />
  <input type="text" name="description" placeholder="Description" />
  <input type="text" name="titleProyect" placeholder="Proyect" />
  <input type="text" name="descriptionProyect" placeholder="Proyect-description" />
  <input type="file" name="logo" />
  <button type="submit" class="btn">Save</button>  
  </form>
  </div>
</body>
</html>