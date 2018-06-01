				<!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Komentar</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url( 'kepala-dinas' ) ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Komentar</li>
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
                    <div class="col-md-12">
                        <?= form_open('kepala-dinas/komentar') ?>
                        <textarea rows="5" class="form-control" name="komentar" placeholder="Komentar anda"></textarea>
                        <input type="submit" class="btn btn-primary" value="Submit" name="submit">
                        <?= form_close() ?>
                    </div>
                </div>
                <hr>
                <?php foreach ($komentar as $row): ?>
                <div class="row">
                    <!-- column -->
                    <div class="<?= in_array($row->id_role, [1, 2]) ? 'offset-md-4' : '' ?> col-md-8">
                        <div class="card">
                            <div class="card-block">
                                <h6 class="card-title">
                                    <p class="pull-left <?= in_array($row->id_role, [1, 2]) ? 'text-danger' : '' ?>">
                                        <?php 
                                            if (in_array($row->id_role, [1, 2])) 
                                            {
                                                $pengguna = $this->pengguna_m->get_row(['id_pengguna' => $row->id_pengguna]);
                                                echo !empty($pengguna->nama) ? $pengguna->nama : 'Anonymous'; 
                                            }
                                            elseif ($row->id_role == 3)
                                            {
                                                $siswa = $this->siswa_m->get_row(['id_siswa' => $row->id_pengguna]);
                                                echo !empty($siswa->nama) ? $siswa->nama : 'Anonymous';
                                            }
                                            else
                                            {
                                                echo 'Anonymous';
                                            }
                                        ?>
                                    </p>
                                    <p class="pull-right"><small><?= $row->created_at ?></small></p>
                                </h6>
                                <div style="padding-top: 20px; font-size: 15px;" class="card-content"><p><?= $row->komentar ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->