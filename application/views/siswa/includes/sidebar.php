	<!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <?php if ( isset( $pengguna ) ): ?>
                        <li>
                            <a href="<?= base_url( 'siswa' ) ?>" class="waves-effect"><i class="fa fa-clock-o m-r-10" aria-hidden="true"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="<?= base_url( 'siswa/data-sekolah' ) ?>" class="waves-effect"><i class="fa fa-columns m-r-10" aria-hidden="true"></i>Data Sekolah</a>
                        </li>
                        <?php else: ?>
                        <li>
                            <a href="<?= base_url( 'web' ) ?>" class="waves-effect"><i class="fa fa-clock-o m-r-10" aria-hidden="true"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="<?= base_url( 'web/data-sekolah' ) ?>" class="waves-effect"><i class="fa fa-columns m-r-10" aria-hidden="true"></i>Data Sekolah</a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">