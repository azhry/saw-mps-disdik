				<!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Edit Kriteria</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url( 'admin' ) ?>">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url( 'admin/data-kriteria' ) ?>">Data Kriteria</a></li>
                            <li class="breadcrumb-item active">Edit Kriteria</li>
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
                            	<?= form_open( 'admin/edit-kriteria/' . $id_kriteria, [ 'class' => 'form-horizontal form-material' ] ) ?>
                                    <div class="form-group">
                                        <label class="col-md-12">Nama Kriteria</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?= $kriteria->kriteria ?>" name="kriteria" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Deskripsi</label>
                                        <div class="col-md-12">
                                            <textarea class="form-control form-control-line" name="deskripsi"><?= $kriteria->deskripsi ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Bobot Prioritas</label>
                                        <div class="col-md-12">
                                            <input type="number" step="any" value="<?= $kriteria->nilai_prioritas ?>" name="nilai_prioritas" class="form-control form-control-line">
                                        </div>
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