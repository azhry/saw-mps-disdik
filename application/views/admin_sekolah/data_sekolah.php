				<!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Data Sekolah</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url( 'admin-sekolah' ) ?>">Home</a></li>
                            <li class="breadcrumb-item active"><?= $sekolah->nama_sekolah ?></li>
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
                                    <tbody>
                                        <tr>
                                            <th>Nama Sekolah</th>
                                            <td><?= $sekolah->nama_sekolah ?></td>
                                        </tr>
                                        <tr>
                                            <th>Lokasi Sekolah</th>
                                            <td><?= $sekolah->lokasi_sekolah ?></td>
                                        </tr>
                                        <tr>
                                            <th>NPSN</th>
                                            <td><?= $sekolah->npsn ?></td>
                                        </tr>
                                        <tr>
                                            <th>Kabupaten</th>
                                            <td><?= $sekolah->kabupaten ?></td>
                                        </tr>
                                        <tr>
                                            <th>Desa</th>
                                            <td><?= $sekolah->desa ?></td>
                                        </tr>
                                        <tr>
                                            <th>Kecamatan</th>
                                            <td><?= $sekolah->kecamatan ?></td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td><?= $sekolah->status ?></td>
                                        </tr>
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