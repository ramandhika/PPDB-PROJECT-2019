<?php include "header.php" ?>
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-edit bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Tambah Jurusan</h5>
                                            <span>Tambah Jurusan</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.php"><i class="ik ik-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">Daftar Akun Siswa</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <form class="forms-sample" method="POST">
                                            <div class="form-group">
                                                <label for="jurusan">Jurusan</label>
                                                <input type="text" name="jurusan" class="form-control require" id="jurusan" placeholder="Jurusan" require>
                                            </div>
                                            <div class="form-group">
                                                <label for="kouta">Kouta Jurusan</label>
                                                <input type="number" name="kouta" class="form-control" id="kouta" placeholder="Kouta Jurusan" require>
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                            <button class="btn btn-light">Cancel</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//variabel untuk menampung inputan dari form
        $jurusan = htmlspecialchars($_POST['jurusan']);
        $kouta = htmlspecialchars($_POST['kouta']);
        
        $cek = mysqli_query($konek,"SELECT left(id_jur,2) as jur from tabel_jurusan
        order by id_jur desc limit 1");
        
        $row = mysqli_fetch_array($cek);
        $kd = $row['jur'];

        $kod = $kd+1;

        if($kod<10){
            $kode="0".$kod;
        }else{
            $kode=$kod;
        }

        //proses simpan
		if($jurusan=='' || $kouta==''){
			echo "Form belum lengkap...";
		}else{
			$simpan = mysqli_query($konek, "insert into tabel_jurusan(id_jur,jurusan,kuota)
                    values('$kode','$jurusan','$kouta')");
			if(!$simpan){
				echo '<script>alert("Gagal Menyimpan Data")</script>';
			}else{
                echo '<script>alert("Data Berhasil Disimpan")</script>';
			}
        }
    }
?>      
<?php include "footer.php" ?>