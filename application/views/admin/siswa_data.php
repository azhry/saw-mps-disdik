				<!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Data Siswa</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url( 'admin' ) ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Siswa</li>
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
                                <h4 class="card-title">Data Siswa</h4>
                                <div class="card-subtitle">
                                	<a href="<?= base_url( 'admin/insert-siswa' ) ?>" class="btn btn-success"><i class="fa fa-plus"></i></a>
                                </div>
                                <div class="table-responsive">
                                    <?= $this->session->flashdata( 'msg' ) ?>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>NIS</th>
                                                <th>Nama</th>
                                                <th>Sekolah</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 0; foreach ( $siswa as $row ): ?>
                                        	<tr>
                                        		<td><?= ++$i ?></td>
                                        		<td><?= $row->nis ?></td>
                                        		<td><?= $row->nama ?></td>
                                                <td><?= $row->nama_sekolah ?></td>
                                        		<td>
                                        			<a href="<?= base_url( 'admin/edit-siswa/' . $row->id_siswa ) ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        			<a href="<?= base_url( 'admin/data-siswa?delete=true&id_siswa=' . $row->id_siswa ) ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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