<?php
require 'db.php';
$message = '';
if (isset ($_POST['nume'])  && isset($_POST['oras']) && isset($_POST['strada']) && isset($_POST['telefon']) ) {
  $nume = $_POST['nume'];
  $oras = $_POST['oras'];
  $strada = $_POST['strada'];
  $telefon = $_POST['telefon'];
  $sql = 'INSERT INTO case_de_discuri(nume, oras, strada, telefon) VALUES(:nume, :oras, :strada, :telefon)';
  $statement = $connection->prepare($sql);
   if ($statement->execute([':nume' => $nume, ':oras' => $oras, ':strada' => $strada, ':telefon' => $telefon, ':id_casa' => $id])) {
    $message = 'data inserted successfully';
  }
}
 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Adauga casa de discuri</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control">
        </div>
		<div class="form-group">
          <label for="email">Emawl</label>
          <input type="email" name="email" id="email" class="form-control">
        </div>
		<div class="form-group">
          <label for="email">Emael</label>
          <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Create a person</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>