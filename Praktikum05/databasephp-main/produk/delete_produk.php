<?php 
include '../dbkoneksi.php';

$query = "DELETE FROM produk WHERE id='$_GET[iddel]'"; 
$delete = $dbh->prepare($query);
$delete->execute();

header('Location: list_produk.php');
?>