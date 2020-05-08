<?php 
include "header.php";
    $sqlEdit = mysqli_query($konek, "SELECT * FROM tabel_datadiri WHERE kode_siswa='$_GET[id]'");
    $e=mysqli_fetch_array($sqlEdit);
?>
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-file-text bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Formulir Siswa</h5>
                                            <span>Mohon Isi Data Pribadi Anda, Untuk Mendaftar</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-7">
                                <div class="card">
                                    <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-setting-tab" data-toggle="pill" href="#previous-month" role="tab" aria-controls="pills-setting" aria-selected="true">Data Siswa</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                                            <div class="card-body">
                                                <form class="form-horizontal" action="" method="POST">
                                                <div class="form-group">
                                                <!-- <label for="exampleInputName1">NISN</label> -->
                                            </div>
                                            <hr>
                                            <h3 class="font-weight-bold text-center">Data Diri</h3>
                                            <hr>
                                            <input type="hidden" name="kode" class="form-control" id="exampleInputName1"  placeholder="Kode Siswa" value="<?php echo $e['kode_siswa'] ?>" require>
                                            <div class="form-group">
                                                <label for="exampleInputName1">Nama Lengkap</label>
                                                <input type="text" name="namalengkap" class="form-control required" id="exampleInputName1" placeholder="Nama Lengkap" require>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail3">Tempat Lahir</label>
                                                        <input type="text" name="tempatlahir" class="form-control required" id="exampleInputEmail3" placeholder="Tempat Lahir">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleSelectGender">Tanggal Lahir</label>
                                                        <input type="date" name="tgllahir" class="form-control required" id="exampleInputEmail3" placeholder="XX-XX-XXXX">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleSelectGender">Jenis Kelamin</label>
                                                        <select class="form-control" id="exampleSelectGender" name="kelamin">
                                                            <option value="">Pilih Jenis Kelamin</option>
                                                            <option value="L">Laki-Laki</option>
                                                            <option value="P">Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label for="exampleSelectGender">Golongan Darah</label>
                                                        <select class="form-control" id="exampleSelectGender" name="goldar">
                                                            <option value="">Pilih Golongan Darah</option>
                                                            <option value="A">A</option>
                                                            <option value="B">B</option>
                                                            <option value="AB">AB</option>
                                                            <option value="O">O</option>
                                                            <option value="-">Tidak Tahu</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>                                            
                                            <div class="form-group">
                                                <label>Alamat Siswa</label>
                                                <div class="input-group col-xs-12">
                                                    <input type="text" class="form-control" id="example" placeholder="Alamat Siswa" name="alamat">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputno_telepon">Nomor Telepon Siswa</label>
                                                <input type="number" class="form-control" id="exampleInputno_telepon" placeholder="Nomor Telepon Siswa" name="notelp">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputemail">Email</label>
                                                <input type="text" class="form-control" id="exampleInputemail" placeholder="Email" name="email">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword4">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Ganti Password Anda" name="pass">
                                            </div>
                                            <hr>
                                            <h3 class="font-weight-bold text-center">Data Nilai UN</h3>
                                            <hr>
                                            <div class="form-group">
                                                <label for="inputBhasa">Nilai Bahasa Indonesia</label>
                                                <input type="number" class="form-control" id="inputBhasa" placeholder="Masukkan Nilai Bahasa Indonesia" name="indo">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputmtk">Nilai Matematika</label>
                                                <input type="number" class="form-control" id="inputmtk" placeholder="Masukkan Nilai Matematika" name="mtk">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputbhsinggris">Nilai Bahasa Inggris</label>
                                                <input type="number" class="form-control" id="inputbhsinggris" placeholder="Masukkan Nilai Bahasa Inggris" name="inggris">
                                            </div>
                                            <hr>
                                            <h3 class="font-weight-bold text-center">Data Orang Tua</h3>
                                            <hr>
                                            <div class="form-group">
                                                <label for="inputNamaAyah">Nama Ayah</label>
                                                <input type="text" class="form-control" id="inputNamaAyah" placeholder="Nama Lengkap Ayah" name="n_ayah">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputNamaIbu">Nama Ibu</label>
                                                <input type="text" class="form-control" id="inputNamaIbu" placeholder="Nama Lengkap Ibu" name="n_ibu">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputno_telepon">Nomor Telepon Orang Tua</label>
                                                <input type="number" class="form-control" id="exampleInputno_telepon" placeholder="Nomor Telepon Orang Tua" name="notelp_ortu">
                                            </div>
                                            <div class="form-group">
                                                <label for="AlamatOrangTua">Alamat Orang Tua</label>
                                                <input type="text" class="form-control" id="AlamatOrangTua" placeholder="Alamat Orang Tua" name="alamat_ortu">
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-2">Simpan Data</button>
                                            <button class="btn btn-warning float-right">Cancel</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php 
include "footer.php";
if($_SERVER['REQUEST_METHOD']=='POST'){

	//variabel untuk menampung inputan dari form
	$kode 	= $_POST['kode'];
	$namalengkap 	= $_POST['namalengkap'];
    $tempatlahir 	= $_POST['tempatlahir'];
    $tgllahir       = $_POST['tgllahir'];
    $kelamin       = $_POST['kelamin'];
    $goldar       = $_POST['goldar'];
    $alamat       = $_POST['alamat'];
    $notelp       = $_POST['notelp'];
    $email       = $_POST['email'];
    $pass        = $_POST['pass'];
    $pass1 = md5($pass);
    // Input Nilai
    $indo  = $_POST['indo'];
    $mtk  = $_POST['mtk'];
    $inggris  = $_POST['inggris'];
    // Input Data Ortu
    $n_ayah = $_POST['n_ayah'];
    $n_ibu = $_POST['n_ibu'];
    $n_telp = $_POST['notelp_ortu'];
    $a_ortu = $_POST['alamat_ortu'];

    // $password       = $_POST['password'];

	if($kode=='' || $kelamin =='' || $goldar=='' || $pass1 == "" || $indo == "" || $n_ayah == "" || $a_ortu == "" ){
		echo "Form Belum lengkap....";
	}else{
        echo "<script>alert('Data Berhasil Disimpan . Terima Kasih')</script>";
        
		$update = mysqli_query($konek, "UPDATE tabel_datadiri 
                                        SET nama='$namalengkap',
                                            tempat_lahir = '$tempatlahir',
                                            tanggal_lahir = '$tgllahir',
                                            jenis_kelamin = '$kelamin',
                                            gol_darah = '$goldar',
                                            alamat_siswa = '$alamat',
                                            no_telp = '$notelp',
                                            email = '$email',
                                            n_bhsinggris = '$inggris',
                                            n_mat = '$mtk',
                                            n_bhsindo = '$indo',
                                            password = '$pass1'
											-- password= '$password'
                                        WHERE kode_siswa='$kode'");

                mysqli_query($konek, "UPDATE tabel_ortuwali 
                SET nama_ayah='$n_ayah',
                    nama_ibu = '$n_ibu',
                    no_telepon = '$n_telp',
                    alamat = '$a_ortu'
                WHERE kode_siswa='$kode'");

		if(!$update){
			echo "Update data gagal...";

		}else{
			echo '<script>window.location.href = "index.php";</script>';
		}
	}
}
?>

