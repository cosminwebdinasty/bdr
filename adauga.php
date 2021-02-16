<html>
	<head>
		<title>Adaugare artist</title>
	</head>
<body bgcolor="#99AABB">

<?php
error_reporting(0);
$dt=$_GET['date_trimise'];
if(!isset($dt))
{
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
	
	 <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Vizualizare
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php">Case de discuri</a>
          <a class="dropdown-item" href="arindex.php">Artisti</a>
		  <a class="dropdown-item" href="trindex.php">Trupe</a>
		  <a class="dropdown-item" href="alindex.php">Albume</a>
		  <a class="dropdown-item" href="mindex.php">Melodii</a>
          <div class="dropdown-divider"></div>
		  <li class="nav-item">
	
	
	
     
		<li class="nav-item">
        <a class="nav-link" href="adauga.php">Adaugare artisti</a>
		<li class="nav-item">
        <a class="nav-link" href="sterge.php">Stergere artisti</a>
		<li class="nav-item">
        <a class="nav-link" href="editeaza.php">Actualizare artisti</a>
		
		 <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cauta in
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="search.php">Case de discuri</a>
          <a class="dropdown-item" href="arsearch.php">Artisti solo</a>
		  <a class="dropdown-item" href="trsearch.php">Formatii</a>
		  <a class="dropdown-item" href="alsearch.php">Albume</a>
		  <a class="dropdown-item" href="msearch.php">Melodii</a>
          <div class="dropdown-divider"></div>
		  <li class="nav-item">
       
          
        </div>
      </li>
      
    </ul>
  </div>
</nav>



<br>


<form method="get">
	ID Artist: <input type="text" name="id_artist"><br><br>
	Nume: <input type="text" name="nume"><br><br>
	Prenume: <input type="text" name="prenume"><br><br>
	Data nasterii: <input type="text" name="data_nasterii"><br><br>
	E-mail: <input type="text" name="email"><br><br>
	ID Label: <input type="text" name="id_casa"><br><br>
 
 <input type="hidden" name="date_trimise" value="1">
 <input type="submit" name="submit" value="ADAUGA">
</form>
<?php 
}
else
{    
    $id_artist = $_GET['id_artist'];
	$id_artist=trim($id_artist);
	$nume = $_GET['nume'];
	$nume=trim($nume);
	$prenume = $_GET['prenume'];
	$prenume=trim($prenume);
	$data_nasterii = $_GET['data_nasterii'];
	$data_nasterii=trim($data_nasterii);
	$email = $_GET['email'];
	$email=trim($email);
	$id_casa = $_GET['id_casa'];
	$id_casa=trim($id_casa);
	
	echo "<h2> Ati introdus:</h2>";
    echo "$id_artist <br>"."$nume <br>"."$prenume <br>"."$data_nasterii <br>"."$email <br>"."$id_casa <br>";
	include "my_connect.php";
	
	$query="INSERT INTO `proiectbdr`.`artisti` ( `id_artist`, `nume`, `prenume`, `data_nasterii`, `email`, `id_casa`) 
	VALUES ('$id_artist','$nume','$prenume','$data_nasterii','$email','$id_casa')";
	$result=mysqli_query($conexiune,$query);
	if($result)
	{
		echo "Datele au fost adaugate in baza de date";
	}
}
?>

</body>
</html>