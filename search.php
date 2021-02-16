<?php 


$con = new PDO('mysql:dbname=proiectbdr;host=localhost', 'root', '');
if (isset($_GET['q'])) {
  $q = $_GET['q'];
  $statement = $con->prepare("select * from case_de_discuri where nume like :nume or oras like :oras");
  $statement->execute([
    ':nume' => '%' . $q .'%',
    ':oras' => '%' . $q .'%'
	
  ]);
} else {
  $statement = $con->prepare('select * from case_de_discuri');
  $statement->execute();
}
$case_de_discuri = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Search</title>
  <link rel="stylesheet" href="bootstrap.min.css">
  
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body class="bg-info">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create.php">Create a person</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="search.php">Search</a>
      </li>
      
    </ul>
  </div>
</nav>
  
  
  
</head>
<body>
  <div class="container mt-5">
    <div class="card">
      <div class="card-header">
        <h2>All people </h2>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6 mx-auto">
            <form class="my-4">
              <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="search....">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-outline-info">Search</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <table class="table table-bordered">
          <tr>
            <th>ID</th>
          <th>Nume</th>
          <th>Oras</th>
		  <th>Strada</th>
		  <th>Telefon</th>
          
          </tr>
          <?php foreach($case_de_discuri as $person): ?>
            <tr>
              <td><?= $person->id_casa; ?></td>
            <td><?= $person->nume; ?></td>
            <td><?= $person->oras; ?></td>
			<td><?= $person->strada; ?></td>
            <td><?= $person->telefon; ?></td>
            </tr>
          <?php endforeach; ?>

        </table>
      </div>
    </div>
  </div>
</body>
</html>