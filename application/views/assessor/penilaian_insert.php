				<!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Insert Penilaian Sekolah</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url( 'assessor' ) ?>">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url( 'assessor/data-penilaian' ) ?>">Data Penilaian Sekolah</a></li>
                            <li class="breadcrumb-item active">Insert Penilaian Sekolah</li>
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
                            	<?= form_open( 'assessor/insert-penilaian', [ 'class' => 'form-horizontal form-material' ] ) ?>
                                    <div class="form-group">
                                        <label class="col-md-12">Nama Sekolah</label>
                                        <div class="col-md-12">
                                            <select class="form-control form-control-line" name="id_sekolah">
                                                <option>Pilih Sekolah</option>
                                                <?php foreach ( $sekolah as $row ): ?>
                                                <option value="<?= $row->id_sekolah ?>"><?= $row->nama_sekolah ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <?php foreach ( $kriteria as $row ): ?>
                                    <div class="form-group">
                                        <label class="col-md-12">Kriteria <?= $row->kriteria ?></label>
                                        <div class="col-md-12">
                                            <input type="hidden" name="id_kriteria[]" value="<?= $row->id_kriteria ?>">
                                            <select name="id_bobot[]" class="form-control form-control-line">
                                                <option>Pilih Nilai</option>
                                                <?php  
                                                    $bobot = $this->bobot_m->get([ 'id_kriteria' => $row->id_kriteria ]);
                                                    foreach ( $bobot as $b ):
                                                ?>
                                                <option value="<?= $b->id_bobot ?>"><?= $b->nama ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
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