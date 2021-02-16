<?php
require 'db.php';
$id = $_GET['id_casa'];
$sql = 'DELETE FROM case_de_discuri WHERE id=:id_casa';
$statement = $connection->prepare($sql);
if ($statement->execute([':id' => $id])) {
  header("Location: index.php");
}