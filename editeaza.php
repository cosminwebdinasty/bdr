<body>
<head>
  <title>Editeaza un fotograf</title>
</head>
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
<body bgcolor="#99AABB">
<?php
require_once("my_connect.php");
$id=$_GET['id_artist'];
$actualizare=$_GET['actualizare'];
if($actualizare==1)
{ 
	$id=$_POST['id_artist'];
	$nume=$_POST['nume'];
	$prenume=$_POST['prenume'];
	$data=$_POST['data_nasterii'];
	$email=$_POST['email'];
	$idc=$_POST['id_casa'];
	
	$query="UPDATE artisti SET nume='$nume', prenume='$prenume',
data_nasterii='$data', email='$email' where id_artist='$id'";
	$result=mysqli_query($conexiune,$query);
	echo "S-au actualizat datele!<br><br><br>";
	
	echo "
		<form method='post' action='editeaza.php?actualizare=1&id_artist=$id'>
			ID:  <input type='text' name='idm' value='$id'><br><br>
			Nume:  <input type='text' name='numem' value='$nume'><br><br>
			Prenume: <input type='text' name='prenumem' value='$prenume'><br><br>
			Data nasterii:     <input type='text' name='experientam' value='$data'><br><br>
			E-mail:     <input type='text' name='telefonm' value='$email'><br><br>
			ID Label:     <input type='text' name='telefonm' value='$idc'><br><br>
			<input type='submit' name='modifica' value='Modifica'>
		</form>";
	
	echo "<br><br><br><a href='arindex.php'>Editare</a>";
}
else
{

$query="SELECT * FROM artisti WHERE id_artist='$id'";
$result=mysqli_query($conexiune,$query);
$row=mysqli_fetch_array($result,MYSQL_ASSOC);
$id=$row['id_artist'];
$nume=$row['nume'];
$prenume=$row['prenume'];
$data=$row['data_nasterii'];
$email=$row['email'];
$idc=$row['id_casa'];

echo "
		<form method='post' action='editeaza.php?actualizare=1&id_artist=$id'>
			ID:  <input type='text' name='idm' value='$id_artist'><br><br>
			Nume:  <input type='text' name='numem' value='$nume'><br><br>
			Prenume: <input type='text' name='prenumem' value='$prenume'><br><br>
			Data nasterii:     <input type='text' name='experientam' value='$data'><br><br>
			Email:     <input type='text' name='telefonm' value='$email'><br><br>
			ID Label:     <input type='text' name='telefonm' value='$idc'><br><br>
			<input type='submit' name='modifica' value='Modifica'>
		</form>";
}		
?>

</body>
</html>