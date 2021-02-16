<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM case_de_discuri WHERE id=:id_casa';
$statement = $connection->prepare($sql);
$statement->execute([':id_casa' => $id ]);
$person = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['nume'])  && isset($_POST['oras']) && isset($_POST['strada']) && isset($_POST['telefon']) ) {
  $nume = $_POST['nume'];
  $oras = $_POST['oras'];
  $strada = $_POST['strada'];
  $telefon = $_POST['telefon'];
  $sql = 'UPDATE case_de_discuri SET nume=:nume, oras=:oras , strada=:strada , telefon=:telefon WHERE id=:id';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':nume' => $nume, ':oras' => $oras, ':strada' => $strada, ':telefon' => $telefon, ':id_casa' => $id])) {
    header("Location: index.php");
  }
}
 ?>
<?php require 'header.php'; ?>   
<div class="container">                   
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update person</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="name">Nume</label>
          <input value="<?= $person->nume; ?>" type="text" name="nume" id="nume" class="form-control">
        </div>
		
        <div class="form-group">
          <label for="email">Oras</label>
          <input type="email" value="<?= $person->oras; ?>" name="oras" id="oras" class="form-control">
        </div>     
		
		<div class="form-group">
          <label for="email">Strada</label>
          <input type="email" value="<?= $person->strada; ?>" name="strada" id="strada" class="form-control">
        </div>
		
		<div class="form-group">
          <label for="email">Telefon</label>
          <input type="email" value="<?= $person->telefon; ?>" name="telefon" id="telefon" class="form-control">
        </div>
		
		
		
        <div class="form-group">
          <button type="submit" class="btn btn-info">Update person</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>