<body>
<head>
  <title>Sterge un fotograf</title>
</head>
<body bgcolor="#99AABB">






<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Sterge artist</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="get">
        <div class="form-group">
          <label for="name">Nume</label>
          <input type="text" name="nume" id="name" class="form-control">
        </div>
        
		
        <div class="form-group">
          <button type="submit" class="btn btn-info">Sterge</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>


<?php


include "my_connect.php";
if(isset($_GET['nume']))
{
	$nume=$_GET['nume'];
	
	$query="DELETE FROM artisti where nume='$nume'";
	$result=mysqli_query($conexiune,$query);
	if(!$result)
	{
		die('Nu gasesc datele!'.mysql_error());
	}
	echo "Artistul cu numele ".$nume." a fost sters din BD<br>";
}

?>

<!-- <a href="arindex.php">Afiseaza artisti</a> -->

</body>
</body>
