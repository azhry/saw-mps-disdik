				<!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Edit Siswa</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url( 'admin' ) ?>">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url( 'admin/data-siswa' ) ?>">Data Siswa</a></li>
                            <li class="breadcrumb-item active">Edit Siswa</li>
                        </ol>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <?= $this->session->flashdata('msg') ?>
                            <div class="card-block">
                            	<?= form_open( 'admin/edit-siswa/' . $id_siswa, [ 'class' => 'form-horizontal form-material' ] ) ?>
                                    <div class="form-group">
                                        <label class="col-md-12">NIS</label>
                                        <div class="col-md-12">
                                            <input type="text" name="nis" value="<?= $siswa->nis ?>" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Nama</label>
                                        <div class="col-md-12">
                                            <input type="text" name="nama" value="<?= $siswa->nama ?>" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Jenis Kelamin</label>
                                        <?= form_dropdown('jenis_kelamin', ['Laki-laki' => 'Laki-laki', 'Perempuan' => 'Perempuan'], $siswa->jenis_kelamin, [ 'class' => 'form-control' ]) ?>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Sekolah</label>
                                        <?= form_dropdown('id_sekolah', $sekolah, $siswa->id_sekolah, [ 'class' => 'form-control' ]) ?>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Tempat Lahir</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?= $siswa->tempat_lahir ?>" name="tempat_lahir" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Tanggal Lahir</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?= $siswa->tanggal_lahir ?>" name="tanggal_lahir" placeholder="yyyy-mm-dd" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input type="password" name="password" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                        	<input type="submit" name="edit" value="Edit" class="btn btn-success">
                                        </div>
                                    </div>
                                <?= form_close() ?>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->