<?php include "header.php" ?>
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-edit bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Tambah Akun Admin</h5>
                                            <span>Tambah Akun Admin (Super Admin / General Admin)</span>
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
                                                <label for="jenisadmin">Jenis Admin</label>
                                                    <select name="jenis" class="form-control" id="jenisadmin">
                                                        <option value="">--={ Jenis Akun }=--</option>
                                                        <option value="SA">Super Admin</option>
                                                        <option value="GA">General Admin</option>
                                                    </select>
                                            </div>
                                            <div class="form-group">
                                            <label for="Nama">Nama Lengkap</label>
                                                <div class="input-group">
                                                        <span class="input-group-prepend">
                                                            <label class="input-group-text"><i class="ik ik-user"></i></label>
                                                        </span>
                                                        <input type="text" name="nama" class="form-control require" id="Nama" placeholder="Nama Lengkap" require>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <label for="username">Username</label>
                                                <div class="input-group">
                                                        <span class="input-group-prepend">
                                                            <label class="input-group-text"><i class="ik ik-user"></i></label>
                                                        </span>
                                                        <input type="text" name="username" class="form-control" id="username" placeholder="Username Anda" require>
                                                </div>     
                                            </div>
                                            <div class="form-group">
                                            <label for="password">Password</label>
                                                <div class="input-group">
                                                        <span class="input-group-prepend">
                                                            <label class="input-group-text"><i class="ik ik-lock"></i></label>
                                                        </span>
                                                        <input type="password" name="pass" class="form-control" id="password" placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <label for="email">Email</label>
                                                <div class="input-group">
                                                        <span class="input-group-prepend">
                                                            <label class="input-group-text"><i class="ik ik-mail"></i></label>
                                                        </span>
                                                        <input type="text" name="email" class="form-control" id="email" placeholder="xxxxxx@xxxx.xxx">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <label for="no_telp">No Telepon</label>
                                                <div class="input-group">
                                                        <span class="input-group-prepend">
                                                            <label class="input-group-text"><i class="ik ik-phone"></i></label>
                                                        </span>
                                                        <input type="number" name="no_telp" class="form-control" id="no_telp" placeholder="No Telepon">
                                                </div>
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
		$jenis 	= htmlspecialchars($_POST['jenis']);
		$nama 	= htmlspecialchars($_POST['nama']);
        $username 	= htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['pass']);
        $password1 = md5($password);
        $email = htmlspecialchars($_POST['email']);
        $no_telp = htmlspecialchars($_POST['no_telp']);
        
        $cek = mysqli_num_rows(mysqli_query($konek,"SELECT username, kode_admin FROM tabel_admin WHERE username='$username' or kode_admin='$jenis'"));
        if ($cek > 0){
            echo "<script>window.alert('Data Tersebut Sudah Ada, Mohon Ganti Dengan Data Yang Lain')</script>";
        }else {
        $cekkode = mysqli_query($konek,"SELECT right(kode_admin,2) as ka from tabel_admin 
        WHERE left(kode_admin,2)='$jenis' 
        order by kode_admin desc limit 1");
        
        $row = mysqli_fetch_array($cekkode);
        $kd = $row['ka'];

        $kod = $kd+1;

            if($kod<10){
                $kode=$jenis."0".$kod;
            }else{
                $kode=$jenis.$kod;
            }
            
            //proses simpan
            if($jenis=='' || $username=='' || $password=='' || $nama==''){
                echo '<script>alert("Data Belum Lengkap Mohon Dilengkapi Dahulu")</script>';
            }else{
                $simpan = mysqli_query($konek, "insert into tabel_admin(kode_admin,nama,username,password,email,no_telp)
                        values('$kode','$nama','$username','$password1','$email','$no_telp')");
                if(!$simpan){
                    echo '<script>alert("Gagal Menyimpan Data")</script>';
                }else{
                    echo '<script>alert("Data Berhasil Disimpan")</script>';
                }
            }
        }

    }
?>

<?php include "footer.php" ?>