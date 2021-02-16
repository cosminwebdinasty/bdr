<?php
require 'db.php';
$sql = 'SELECT * FROM case_de_discuri';
$statement = $connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Case de discuri</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>Nume</th>
          <th>Oras</th>
		  <th>Strada</th>
		  <th>Telefon</th>
          
        </tr>
        <?php foreach($people as $person): ?>
          <tr>
            <td><?= $person->id_casa; ?></td>
            <td><?= $person->nume; ?></td>
            <td><?= $person->oras; ?></td>
			<td><?= $person->strada; ?></td>
            <td><?= $person->telefon; ?></td>
            
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>