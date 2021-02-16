<?php
require 'mdb.php';
$sql = 'SELECT * FROM melodii';
$statement = $connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Melodii</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>Numar</th>
          <th>Titlu</th>
		  <th>Gen</th>
		  <th>Lungime</th>
		  <th>ID Label</th>
         
        </tr>
        <?php foreach($people as $person): ?>
          <tr>
            <td><?= $person->id_melodie; ?></td>
            <td><?= $person->numar; ?></td>
            <td><?= $person->titlu; ?></td>
			<td><?= $person->gen; ?></td>
            <td><?= $person->lungime; ?></td>
			<td><?= $person->id_album; ?></td>
            
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>