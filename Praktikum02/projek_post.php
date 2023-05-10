<?php
$username = $_POST['username'];
$password = $_POST['password'];


if ($username == "fahlia" && $password == "fahlia") {
    echo "Login berhasil!";
}else {
    echo "login gagal";
}
?>