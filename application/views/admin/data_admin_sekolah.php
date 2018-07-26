				<!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Admin Sekolah</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url( 'admin' ) ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Admin Sekolah</li>
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
                                <h4 class="card-title">Admin Sekolah</h4>
                                <div class="card-subtitle">
                                	<a href="<?= base_url( 'admin/tambah-admin-sekolah' ) ?>" class="btn btn-success"><i class="fa fa-plus"></i></a>
                                </div>
                                <div class="table-responsive">
                                    <?= $this->session->flashdata( 'msg' ) ?>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>NIP</th>
                                                <th>Nama</th>
                                                <th>Sekolah</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 0; foreach ( $admin as $row ): ?>
                                        	<tr>
                                        		<td><?= ++$i ?></td>
                                        		<td><?= $row->nip ?></td>
                                        		<td><?= $row->nama ?></td>
                                                <td><?= $row->nama_sekolah ?></td>
                                        		<td>
                                        			<a href="<?= base_url( 'admin/data-admin-sekolah?delete=true&id=' . $row->id ) ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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