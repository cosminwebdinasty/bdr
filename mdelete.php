<?php
require 'mdb.php';
$id = $_GET['id_melodie'];
$sql = 'DELETE FROM melodii WHERE id=:id_melodie';
$statement = $connection->prepare($sql);
if ($statement->execute([':id_melodie' => $id])) {
  header("Location: mindex.php");
}