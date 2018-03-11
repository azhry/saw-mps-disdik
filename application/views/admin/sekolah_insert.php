				<!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Insert Sekolah</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url( 'admin-dinas' ) ?>">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url( 'admin-dinas/data-sekolah' ) ?>">Data Sekolah</a></li>
                            <li class="breadcrumb-item active">Insert Sekolah</li>
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
                            <div class="card-block">
                            	<?= form_open( 'admin-dinas/insert-sekolah', [ 'class' => 'form-horizontal form-material' ] ) ?>
                                    <div class="form-group">
                                        <label class="col-md-12">Nama Sekolah</label>
                                        <div class="col-md-12">
                                            <input type="text" name="nama_sekolah" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Lokasi Sekolah</label>
                                        <div class="col-md-12">
                                            <textarea class="form-control" rows="4" name="lokasi_sekolah"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">NPSN</label>
                                        <div class="col-md-12">
                                            <input type="text" name="npsn" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Kabupaten</label>
                                        <div class="col-md-12">
                                            <textarea class="form-control" rows="4" name="kabupaten"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Desa</label>
                                        <div class="col-md-12">
                                            <textarea class="form-control" rows="4" name="desa"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Kecamatan</label>
                                        <div class="col-md-12">
                                            <textarea class="form-control" rows="4" name="kecamatan"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Kelurahan</label>
                                        <div class="col-md-12">
                                            <textarea class="form-control" rows="4" name="kelurahan"></textarea>
                                        </div>
                                    </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" value="Negeri" checked>
                                            <label class="form-check-label">
                                                Negeri
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" value="Swasta">
                                            <label class="form-check-label">
                                                Swasta
                                            </label>
                                        </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                        	<input type="submit" name="submit" value="Submit" class="btn btn-success">
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