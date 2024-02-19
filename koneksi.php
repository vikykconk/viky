<?php
$koneksi = mysqli_connect("localhost","root","","kasirviky");

if (mysqli_connect_errno()){
    echo "koneksi database gagal : ". mysqli_connect_errno();
}
?>