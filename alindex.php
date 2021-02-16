<?php
require 'aldb.php';
$sql = 'SELECT * FROM albume';
$statement = $connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Albume</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>Titlu</th>
          <th>Compozitor</th>
		  <th>Producator</th>
		  <th>An</th>
		  <th>ID Label</th>
          
        </tr>
        <?php foreach($people as $person): ?>
          <tr>
            <td><?= $person->id_album; ?></td>
            <td><?= $person->titlu; ?></td>
            <td><?= $person->compozitor; ?></td>
			<td><?= $person->producator; ?></td>
            <td><?= $person->an; ?></td>
			<td><?= $person->id_casa; ?></td>
            
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>