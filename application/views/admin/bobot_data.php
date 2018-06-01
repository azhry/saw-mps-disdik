				<!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Data Bobot</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url( 'admin' ) ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Bobot</li>
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
                                <h4 class="card-title">Data Bobot</h4>
                                <div class="card-subtitle">
                                	<a href="<?= base_url( 'admin/insert-bobot' ) ?>" class="btn btn-success"><i class="fa fa-plus"></i></a>
                                </div>
                                <div class="table-responsive">
                                    <?= $this->session->flashdata( 'msg' ) ?>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama</th>
                                                <th>Nilai</th>
                                                <th>Kriteria</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 0; foreach ( $bobot as $row ): ?>
                                        	<tr>
                                        		<td><?= ++$i ?></td>
                                        		<td><?= $row->nama ?></td>
                                                <td><?= $row->nilai ?></td>
                                                <td><?= $row->kriteria ?></td>
                                        		<td>
                                        			<a href="<?= base_url( 'admin/edit-bobot/' . $row->id_bobot ) ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        			<a href="<?= base_url( 'admin/data-bobot?delete=true&id_bobot=' . $row->id_bobot ) ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        		</td>
                                        	</tr>
                                        	<?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->