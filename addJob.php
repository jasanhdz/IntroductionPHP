<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registro</title>
  <link rel="stylesheet" href="style/addjobstyle.css">
</head>
<body>
  <div class="box">
  <form action="/introductionPHP/jobs/add" method="post" class="container" enctype="multipart/form-data">
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