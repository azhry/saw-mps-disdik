				<!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Insert Bobot</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url( 'admin' ) ?>">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url( 'admin/data-bobot' ) ?>">Data Bobot</a></li>
                            <li class="breadcrumb-item active">Insert Bobot</li>
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
                            	<?= form_open( 'admin/insert-bobot', [ 'class' => 'form-horizontal form-material' ] ) ?>
                                    <div class="form-group">
                                        <label class="col-md-12">Nama Bobot</label>
                                        <div class="col-md-12">
                                            <input type="text" name="nama" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Nilai Bobot</label>
                                        <div class="col-md-12">
                                            <input type="number" name="nilai" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Kriteria</label>
                                        <div class="col-md-12">
                                            <select name="id_kriteria" class="form-control form-control-line">
                                                <option>Pilih Kriteria</option>
                                                <?php foreach ( $kriteria as $row ): ?>
                                                <option value="<?= $row->id_kriteria ?>"><?= $row->kriteria ?></option>
                                                <?php endforeach; ?>
                                            </select>
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