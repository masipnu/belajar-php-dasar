<?php
/**
 * Test : Helper/Input.php
 */

 require_once "../Helper/Input.php";

$nama = input("Nama");
$alamat = input("Alamat");

echo "Halo $nama";
echo "Kamu tinggal di $alamat";