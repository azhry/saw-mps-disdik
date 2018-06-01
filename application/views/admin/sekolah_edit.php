				<!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Edit Sekolah</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url( 'admin' ) ?>">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url( 'admin/data-sekolah' ) ?>">Data Sekolah</a></li>
                            <li class="breadcrumb-item active">Edit Sekolah</li>
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
                                <?= $this->session->flashdata( 'msg' ) ?>
                            	<?= form_open( 'admin/edit-sekolah/' . $id_sekolah, [ 'class' => 'form-horizontal form-material' ] ) ?>
                                    <div class="form-group">
                                        <label class="col-md-12">Nama Sekolah</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?= $sekolah->nama_sekolah ?>" name="nama_sekolah" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Lokasi Sekolah</label>
                                        <div class="col-md-12">
                                            <textarea class="form-control" rows="4" name="lokasi_sekolah" value="<?= $sekolah->lokasi_sekolah ?>"><?= $sekolah->lokasi_sekolah ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">NPSN</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?= $sekolah->npsn ?>" name="npsn" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Kabupaten</label>
                                        <div class="col-md-12">
                                            <textarea value="<?= $sekolah->kabupaten ?>" class="form-control" rows="4" name="kabupaten"><?= $sekolah->kabupaten ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Desa</label>
                                        <div class="col-md-12">
                                            <textarea value="<?= $sekolah->desa ?>" class="form-control" rows="4" name="desa"><?= $sekolah->desa ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Kecamatan</label>
                                        <div class="col-md-12">
                                            <textarea value="<?= $sekolah->kecamatan ?>" class="form-control" rows="4" name="kecamatan"><?= $sekolah->kecamatan ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Kelurahan</label>
                                        <div class="col-md-12">
                                            <textarea value="<?= $sekolah->kelurahan ?>" class="form-control" rows="4" name="kelurahan"><?= $sekolah->kelurahan ?></textarea>
                                        </div>
                                    </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" value="Negeri" <?= $sekolah->status == 'Negeri' ? 'checked' : '' ?>>
                                            <label class="form-check-label">
                                                Negeri
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" value="Swasta" <?= $sekolah->status == 'Swasta' ? 'checked' : '' ?>>
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