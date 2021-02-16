<?php
require 'ardb.php';
$id_artist = $_GET['id_artist'];
$sql = 'DELETE FROM artisti WHERE id_artist=:id_artist';
$statement = $connection->prepare($sql);
if ($statement->execute([':id_artist' => $id_artist])) {
  header("Location: arindex.php");
}