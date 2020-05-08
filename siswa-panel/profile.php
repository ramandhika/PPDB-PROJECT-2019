<?php include "header.php" ?>
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-file-text bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Profile Siswa</h5>
                                            <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center"> 
                                            <img src="img/default.jpg" class="rounded-circle" width="150" />
                                            <h4 class="card-title mt-10">John Doe</h4>
                                            <p class="card-subtitle">Front End Developer</p>
                                        </div>
                                    </div>
                                    <hr class="mb-0"> 
                                    <div class="card-body"> 
                                        <small class="text-muted d-block">Email address </small>
                                        <h6>johndoe@admin.com</h6> 
                                        <small class="text-muted d-block pt-10">Phone</small>
                                        <h6>(123) 456 7890</h6> 
                                        <small class="text-muted d-block pt-10">Address</small>
                                        <h6>71 Pilgrim Avenue Chevy Chase, MD 20815</h6>
                                    </div>
                                </div>
                            </div>
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
                                                <form class="form-horizontal">
                                                <div class="form-group">
                                                <label for="exampleInputName1">NISN</label>
                                                <input type="text" class="form-control" id="exampleInputName1" placeholder="NISN" require>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName1">Nama Lengkap</label>
                                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama Lengkap" require>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail3">Tempat Lahir</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Tempat Lahir">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleSelectGender">Tanggal Lahir</label>
                                                        <input type="date" class="form-control" id="exampleInputEmail3" placeholder="Tanggal">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label for="exampleSelectGender">Golongan Darah</label>
                                                        <select class="form-control" id="exampleSelectGender">
                                                            <option>A</option>
                                                            <option>B</option>
                                                            <option>AB</option>
                                                            <option>O</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleSelectGender">Jenis Kelamin</label>
                                                        <select class="form-control" id="exampleSelectGender">
                                                            <option>Laki-Laki</option>
                                                            <option>Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            
                                            <div class="form-group">
                                                <label>Alamat Siswa</label>
                                                <div class="input-group col-xs-12">
                                                    <input type="text" class="form-control" id="example" placeholder="Alamat Siswa">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputno_telepon">No Telepon</label>
                                                <input type="password" class="form-control" id="exampleInputno_telepon" placeholder="No Telepon">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputemail">Email</label>
                                                <input type="password" class="form-control" id="exampleInputemail" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword4">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-2">Update</button>
                                            <button class="btn btn-light">Cancel</button>
                                            <button type="submit" class="btn btn-danger mr-2">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php include "footer.php"?>
