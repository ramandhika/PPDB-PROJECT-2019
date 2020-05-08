<?php 
include "header.php";
$sqlEdit = mysqli_query($konek, "SELECT kode_admin, left(kode_admin,2) as gen, nama, email, no_telp FROM tabel_admin WHERE kode_admin='$_GET[id]'");
$e=mysqli_fetch_array($sqlEdit);

if ($e['gen'] == "SA") {
    $jen = "Super Admin";
}else {
    $jen = "General Admin";
}
?>
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-file-text bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Profile Admin</h5>
                                            <span>Berikut Data Admin</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-7">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center"> 
                                            <img src="img/default.jpg" class="rounded-circle" width="150" />
                                            <h4 class="card-title mt-10"><?php echo $e['nama'] ?></h4>
                                            <h5 class="card-subtitle">Sebagai</h5>
                                            <p class="card-subtitle"><?php echo $jen ?></p>
                                        </div>
                                    </div>
                                    <hr class="mb-0"> 
                                    <div class="card-body"> 
                                        <small class="text-muted d-block">Alamat Email</small>
                                        <h6><?php echo $e['email'] ?></h6> 
                                        <small class="text-muted d-block pt-10">Telepon</small>
                                        <h6><?php echo $e['no_telp'] ?></h6> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php include "footer.php"?>
