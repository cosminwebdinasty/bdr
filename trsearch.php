<?php 


$con = new PDO('mysql:dbname=proiectbdr;host=localhost', 'root', '');
if (isset($_GET['q'])) {
  $q = $_GET['q'];
    $statement = $con->prepare("select * from trupe where nume like :nume or membrii like :membrii");
  $statement->execute([
    ':nume' => '%' . $q .'%',
    ':membrii' => '%' . $q .'%'
  ]);
} else {
  $statement = $con->prepare('select * from trupe');
  $statement->execute();
}
$trupe = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Gestiunea caselor de discuri</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body class="bg-info">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Case de discuri <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="arindex.php">Artisti</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="trindex.php">Trupe</a>
		<li class="nav-item">
        <a class="nav-link" href="alindex.php">Albume</a>
		<li class="nav-item">
        <a class="nav-link" href="mindex.php">Melodii</a>
		
		 <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cauta
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="search.php">Case de discuri</a>
          <a class="dropdown-item" href="arsearch.php">Artisti solo</a>
		  <a class="dropdown-item" href="trsearch.php">Formatii</a>
		  <a class="dropdown-item" href="alsearch.php">Albume</a>
		  <a class="dropdown-item" href="msearch.php">Melodii</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
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
          <th>Membrii</th>
		  <th>Pagina web</th>
		  <th>Telefon</th>
		  <th>ID Label</th>
                    
          
          </tr>
          <?php foreach($trupe as $person): ?>
            <tr>
             <td><?= $person->id_trupa; ?></td>
            <td><?= $person->nume; ?></td>
            <td><?= $person->membrii; ?></td>
			<td><?= $person->site; ?></td>
            <td><?= $person->telefon; ?></td>
			<td><?= $person->id_casa; ?></td>
            </tr>
          <?php endforeach; ?>

        </table>
      </div>
    </div>
  </div>
</body>
</html>