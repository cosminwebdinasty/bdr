<?php
$dsn = 'mysql:host=localhost;dbname=proiectbdr';
$username = 'root';
$password = '';
$options = [];
try {
$connection = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e) {
}

$sql = 'SELECT * FROM trupe';
$statement = $connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Trupe</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>Nume</th>
          <th>Membrii</th>
		  <th>Pagina web</th>
		  <th>Telefon</th>
		  <th>ID Label</th>
         
        </tr>
        <?php foreach($people as $person): ?>
          <tr>
            <td><?= $person->id_trupa; ?></td>
            <td><?= $person->nume; ?></td>
            <td><?= $person->membrii; ?></td>
			<td><?= $person->site; ?></td>
            <td><?= $person->telefon; ?></td>
			<td><?= $person->id_casa; ?></td>
           
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>