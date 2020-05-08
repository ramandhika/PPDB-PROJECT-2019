<?php include "header.php" ?>
<div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-edit bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Edit Akun Siswa</h5>
                                            <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"><i class="ik ik-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Components</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header"><h3>Pendaftaran Siswa</h3></div>
                                    <div class="card-body">
                                        <form class="forms-sample">
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
                                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                            <button class="btn btn-light">Cancel</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php include "footer.php" ?>