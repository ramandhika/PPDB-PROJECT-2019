<?php include "header.php" ?>
<script>

//Random password generator- by javascriptkit.com
//Visit JavaScript Kit (http://javascriptkit.com) for script
//Credit must stay intact for use

var keylist="ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789"
var temp=''

function generatepass(plength){
temp=''
for (i=0;i<plength;i++)
temp+=keylist.charAt(Math.floor(Math.random()*keylist.length))
return temp
}

function populateform(enterlength){
document.pgenerate.pass.value=generatepass(enterlength)
}
</script>
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-edit bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Daftar Akun Siswa</h5>
                                            <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
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
                        <hr>
                        <h4 align="center">Daftar Siswa Data NISN & Password</h4>
                        <hr>
                        <br>
                        <div class="row justify-content-center">
                            <div class="col-md-5">
                                <div class="card">
                                    <div class="card-header"><h3>Pendaftaran Siswa NISN & Password</h3></div>
                                    <div class="card-body">
                                        <form class="forms-sample" name="pgenerate" method="POST">
                                            <div class="form-group">
                                                <label for="nisn">NISN</label>
                                                <input type="text" name="nisn" class="form-control" id="nisn" placeholder="NISN" require>
                                            </div>
                                            <div class="form-group">
                                                <label for="pass">Password</label>
                                                <input type="text" name="pass" class="form-control" id="pass" placeholder="Password">
                                                <input type="button" class="btn btn-warning" value="Acak Password" onClick="populateform(this.form.thelength.value)"><br />
                                                <input type="hidden" name="thelength" size=3 value="5">
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
                <style>
                test {
                    text-
                }
                </style>

<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//variabel untuk menampung inputan dari form
		$nisn 	= $_POST['nisn'];
        $password = $_POST['pass'];
        $password1 = md5($password);
        
        $cek = mysqli_num_rows(mysqli_query($konek,"SELECT nisn FROM tabel_datadiri WHERE nisn='$nisn'"));
        if ($cek > 0){
            echo "<script>window.alert('Data Tersebut Sudah Ada, Mohon Ganti Dengan Data Yang Lain')</script>";
        }else {
            $cekkode = mysqli_query($konek,"SELECT right(kode_siswa,2) as ka from tabel_datadiri 
            WHERE left(kode_siswa,2)='SW' 
            order by kode_siswa desc limit 1");
            
            $row = mysqli_fetch_array($cekkode);
            $kd = $row['ka'];

            $kod = $kd+1;

            if($kod<10){
                $kode='SW'."000".$kod;
            }else if($kod<100){
                $kode='SW'."00".$kod;
            }else if($kod<1000){
                $kode='SW'."0".$kod;
            }else{
                $kode='SW'.$kod;
            }

            //proses simpan
            if($nisn=='' || $password==''){
                echo "Form belum lengkap...";
            }else{
                $simpan = mysqli_query($konek, "insert into tabel_datadiri(kode_siswa,nisn,password)
                        values('$kode','$nisn','$password1')");
                mysqli_query($konek, "insert into tabel_ortuwali(kode_siswa) values ('$kode')");
                mysqli_query($konek, "insert into tabel_pendaftaran(kode_siswa) values ('$kode')");
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