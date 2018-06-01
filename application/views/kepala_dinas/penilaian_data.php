				<!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Data Penilaian Sekolah</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url( 'admin' ) ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Penilaian Sekolah</li>
                        </ol>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Data Penilaian Sekolah</h4>
                                <div class="table-responsive">
                                    <?= $this->session->flashdata( 'msg' ) ?>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama Sekolah</th>
                                                <th>Lokasi Sekolah</th>
                                                <th>Hasil Akhir</th>
                                                <!-- <th>Aksi</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 0; foreach ( $sekolah as $row ): ?>
                                        	<tr>
                                        		<td><?= ++$i ?></td>
                                        		<td><?= $row->nama_sekolah ?></td>
                                                <td><?= $row->lokasi_sekolah ?></td>
                                                <td><?= $row->nilai ?></td>
                                        		<!-- <td>
                                        			<a href="<?= base_url( 'admin/edit-penilaian/' . $row->id_sekolah ) ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        			<a href="<?= base_url( 'admin/data-penilaian?delete=true&id_sekolah=' . $row->id_sekolah ) ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        		</td> -->
                                        	</tr>
                                        	<?php endforeach; ?>
                                        </tbody>
                                    </table>

                                    <canvas id="grafik"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->

                <script type="text/javascript" src="<?= base_url( 'assets/assets/plugins/chartjs/Chart.min.js' ) ?>"></script>
                <script type="text/javascript">
                    var config = {
                        type: 'line',
                        data: {
                            labels: [
                                <?php foreach ( $sekolah as $row ): ?>
                                    "<?= $row->nama_sekolah ?>",
                                <?php endforeach; ?>
                            ],
                            datasets: [{
                                label: 'Data Penilaian Sekolah',
                                backgroundColor: 'rgb(255, 0, 0)',
                                borderColor: 'rgb(255, 0, 0)',
                                fill: false,
                                data: [
                                    <?php foreach ( $sekolah as $row ): ?>
                                        <?= $row->nilai ?>,
                                    <?php endforeach; ?>
                                ]
                            }]
                        },
                        options: {
                            responsive: true,
                            scales: {
                                yAxes: [{
                                    display: true,
                                    ticks: {
                                        beginAtZero: true,
                                        max: 1
                                    }
                                }]
                            }
                        }
                    };
                    var ctx = document.getElementById( 'grafik' ).getContext( '2d' );
                    new Chart( ctx, config );
                </script>