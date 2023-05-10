<?php 
 require_once '../../database/dbkoneksi.php';
?>
<?php 
   $_id = $_POST['id'];
   $_nama_motor = $_POST['nama_motor'];
   $_cc = $_POST['cc'];
   $_tipe_motor_id = $_POST['tipe_motor_id'];
   $_harga = $_POST['harga'];
   $_merk_id = $_POST['merk_id'];
   $_stok = $_POST['stok'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_id; // ? 1
   $ar_data[]=$_nama_motor; // ? 2
   

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO merk (id,nama_motor,cc,tipe_motor_id,harga,merk_id,stok) VALUES (?,?)";
   }else if($_proses == "Update"){
      // update data 
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE merk SET id=?,nama_motor,cc,tipe_motor_id,harga,merk_id,stok=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location: table_merk.php');
?>