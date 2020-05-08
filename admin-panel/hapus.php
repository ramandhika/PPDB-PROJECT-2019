<?php
	include "koneksi.php";
	$hapus = mysqli_query($konek, "DELETE FROM tabel_datadiri WHERE kode_siswa='$_GET[id]'");
	mysqli_query($konek, "DELETE FROM tabel_ortuwali WHERE kode_siswa='$_GET[id]'");
	mysqli_query($konek, "DELETE FROM tabel_pendaftaran WHERE kode_siswa='$_GET[id]'");

	mysqli_query($konek, "DELETE FROM tabel_admin WHERE kode_admin='$_GET[id]'");
	
	if($hapus){
        echo '<script>alert("Data Berhasil Dihapus")</script>';
		header('location:index.php');
	}else{
		echo '<script>alert("Gagal Menyimpan Data")</script>';
		header('location:daftar_siswa.php');
	}
?>