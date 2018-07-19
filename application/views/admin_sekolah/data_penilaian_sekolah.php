				<!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Data Sekolah</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url( 'admin-sekolah' ) ?>">Home</a></li>
                            <li class="breadcrumb-item active">Penilaian <?= $sekolah->nama_sekolah ?></li>
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
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title"><?= $sekolah->nama_sekolah ?></h4>
                                <table class="table table-hover table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Kriteria</th>
                                            <th>Deskripsi</th>
                                            <th>Nilai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($penilaian as $row): ?>
                                        <tr>
                                            <td><?= $row->kriteria ?></td>
                                            <td><?= $row->deskripsi ?: 'Tidak ada deskripsi' ?></td>
                                            <td><?= $row->nama ?: 'Belum dinilai' ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->