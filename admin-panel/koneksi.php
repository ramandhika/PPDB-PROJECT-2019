<?php
//variabel koneksi
$konek = mysqli_connect("localhost","root","","ppdb_db");

if(!$konek){
	echo "Koneksi Database Gagal...!!!";
}
?>