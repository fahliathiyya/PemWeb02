<?php
require '../../database/dbkoneksi.php'
?>

<?php 
   $id = $_GET['idedit'];
   $sql = "SELECT * FROM pesanan WHERE id=?";
   $statement = $dbh->prepare($sql);
   $statement->execute([$id]);
   $result = $statement->fetch();
?>


<?php require '../template/nav.php' ?>

        <div id="layoutSidenav">

        <?php require '../template/sidebar.php' ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Form Edit Pesanan</h1>
                        
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                
                            </div>
                            <div class="card-body">
                                <div class="container">
                                    <!-- <h2 class="text-center">Form Produk</h2> -->
                                    <form method="POST" action="proses.php">
                                    <input type="hidden" name="idedit" value="<?=$result['id']?>" >
                                        <div class="form-group">
                                            <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
                                            <input id="nama_pelanggan" name="nama_pelanggan"  value="<?=$result['nama_pelanggan']?>" type="text" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="alamat_pelanggan" class="form-label">Alamat Pelanggan</label>
                                            <input id="alamat_pelanggan" name="alamat_pelanggan"  value="<?=$result['alamat_pelanggan']?>" type="text" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="motor_id" class="form-label">ID Motor</label>
                                            <input id="motor_id" name="motor_id"  value="<?=$result['motor_id']?>" type="text" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="quantity" class="form-label">Qty</label>
                                            <input id="quantity" name="quantity"  value="<?=$result['quantity']?>" type="text" class="form-control" required>
                                        </div>
                                        
                                        <div class="form-group mt-4">
                                            <input type="submit" name="proses" type="submit" class="btn btn-primary form-control" value="Update" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>
