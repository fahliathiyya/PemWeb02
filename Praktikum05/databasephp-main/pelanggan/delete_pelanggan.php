<?php 
include '../dbkoneksi.php';

$query = "DELETE FROM pelanggan WHERE id='$_GET[iddel]'"; 
$data = $dbh->prepare($query);
$data->execute();

header('Location: list_pelanggan.php');
?>