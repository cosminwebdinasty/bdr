<?php
require 'ardb.php';
$message = '';

if (isset ($_POST['id_artist']) && isset($_POST['nume']) && isset($_POST['prenume']) && isset($_POST['data_nasterii']) && isset($_POST['email']) && isset($_POST['id_casa']) ) {
  $id_artist = $_POST['id_artist'];
  $nume = $_POST['nume'];
  $prenume = $_POST['prenume'];
  $data_nasterii = $_POST['data_nasterii'];
  $email = $_POST['email'];
  $id_casa = $_POST['id_casa'];
  $sql = 'INSERT INTO artisti(id_artist, nume, prenume, data_nasterii, email, id_casa) VALUES(:id_artist, :nume, :prenume, :data_nasterii, :email, :id_casa)';
  $statement = $connection->prepare($sql);
   if ($statement->execute([':id_artist' => $id_artist, ':nume' => $nume, ':prenume' => $prenume, ':data_nasterii' => $data_nasterii, ':email' => $email, ':id_casa' => $id_casa])) {
    $message = 'data inserted successfully';
  }
}
 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Adauga artist</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="name">ID Artist</label>
          <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="name">Nume</label>
          <input type="text" name="name" id="name" class="form-control">
        </div>
		 <div class="form-group">
          <label for="name">Prenume</label>
          <input type="text" name="name" id="name" class="form-control">
        </div>
		 <div class="form-group">
          <label for="name">Data nasterii</label>
          <input type="text" name="name" id="name" class="form-control">
        </div>
		<div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control">
        </div>
		 <div class="form-group">
          <label for="name">ID Label</label>
          <input type="text" name="name" id="name" class="form-control">
        </div>
		
        <div class="form-group">
          <button type="submit" class="btn btn-info">Create a person</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>