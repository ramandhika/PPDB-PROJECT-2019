<?php 
include "header.php";
include "plugins/date.php";                                   

?>
                    <?php 
                    $result = mysqli_query($konek,"
                    SELECT kode_siswa, nama, nisn FROM tabel_datadiri where kode_siswa = '". $_SESSION['kode_siswa'] . "'");
                        while ($row = mysqli_fetch_array($result)) {  
                    ?> 
                    <div class="main-content">
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading text-center">Selamat Datang, Siswa <br> <strong> <?php echo $row['nama'] ?></strong></h4>
                            <h3 id="clock" class="text-center font-weight-bold"></h3>
                        </div><br><hr>
                    <h6 class="font-weight-bold">Langkah 1 :</h6>
                    <?php 
                        if ($row['nama'] == "") {
                            echo "<div class='alert alert-danger' role='alert'>";
                            echo "<h5 class='alert-heading text-justify'><strong>Dimohon , untuk segera mengisi formulir Data Diri & Orang Tua ! <a href='daftar.php?id=$row[kode_siswa]' class='alert-heading float-right'>Formulir<i class='ik ik-chevrons-right float-right'></i></a></strong></h5>";
                            echo "</div>";
                        }else { 
                            echo "<div class='alert alert-success' role='alert'>";
                            echo "<h5 class='alert-heading text-justify'><strong>Data Diri & Data Orang Tua Sudah Di Update <i class='ik ik-check-circle'></i></a></strong></h5>";
                            echo "</div>";
                        }
                    }
                    ?><hr>
                    <h6 class="font-weight-bold">Langkah 2 :</h6>
                    <?php 
                    $result = mysqli_query($konek,"
                    SELECT kode_siswa, nama_ayah FROM tabel_ortuwali where kode_siswa = '". $_SESSION['kode_siswa'] . "'");
                        while ($row = mysqli_fetch_array($result)) {   
                        if ($row['nama_ayah'] == "") {
                            echo "<div class='alert alert-danger' role='alert'>";
                            echo "<h5 class='alert-heading text-justify'><strong>Dimohon , untuk segera mengisi Nilai UN ( Mandiri ) ! <a href='data_ortu.php?id=$row[kode_siswa]' class='alert-heading float-right'>Formulir<i class='ik ik-chevrons-right float-right'></i></a></strong></h5>";
                            echo "</div>";
                        }else { 
                            echo "<div class='alert alert-success' role='alert'>";
                            echo "<h5 class='alert-heading text-justify'><strong>Data Orang Tua Sudah Di Update <i class='ik ik-check-circle'></i></a></strong></h5>";
                            echo "</div>";
                        }
                    }
                    ?><hr><br>
<?php include "footer.php" ?>
