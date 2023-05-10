<?php 
 require_once '../../database/dbkoneksi.php';

// $query = "DELETE FROM produk WHERE id='$_GET[iddel]'"; 
// $delete = $dbh->prepare($query);
// $delete->execute();

// header('Location: list_produk.php');

$id = $_GET['iddel'];
$sql = "DELETE FROM produk WHERE id=?";
$statement = $dbh->prepare($sql);
$statement->execute([$id]);

header('Location: ../../pages/produk/list_produk.php');

?>


