<?php 
include "header.php";
include "plugins/date.php";

$result = mysqli_query($konek,"
SELECT nama FROM tabel_admin where username = '". $_SESSION['username'] . "'");
    while ($row = mysqli_fetch_array($result)) {                                            

?>

                <div class="main-content">
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading text-center">Selamat Datang, <b> <?php echo $row['nama']; ?></b></h4>
                        <h3 id="clock" class="text-center font-weight-bold"></h3>
                    </div>
                    <br><hr><br>
                    <div class="container-fluid">
                        <div class="row clearfix justify-content-center">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <?php
                                                $result = mysqli_query($konek,"
                                                SELECT COUNT(kode_siswa) as jml FROM tabel_datadiri");
                                                    while ($jumlah_siswa = mysqli_fetch_array($result)) {  
                                                ?>
                                                <h2><?php echo $jumlah_siswa['jml'] ?></h2>
                                                <h5>Siswa</h5>
                                                <?php } ?>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-users"></i>
                                            </div>
                                        </div><br>
                                        <a href="daftar_siswa.php"><span>Lihat Lebih Detail</span><i class="ik ik-chevrons-right float-right"></i></a>
                                    </div>
                                    <!-- <div class="progress progress-sm">
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h2>42</h2>
                                                <h5>Pendaftar</h5>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-folder"></i>
                                            </div>
                                        </div><br>
                                        <span>Lihat Lebih Detail</span><i class="ik ik-chevrons-right float-right"></i>
                                    </div>
                                    <!-- <div class="progress progress-sm">
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h2>42</h2>
                                                <h5>Pendaftar</h5>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-folder"></i>
                                            </div>
                                        </div><br>
                                        <span>Lihat Lebih Detail</span><i class="ik ik-chevrons-right float-right"></i>
                                    </div>
                                    <!-- <div class="progress progress-sm">
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <br><hr>
<?php } ?>
<?php include "footer.php" ?>
