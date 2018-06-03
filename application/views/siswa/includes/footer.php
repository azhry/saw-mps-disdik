		</div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                <!-- © 2017 Monster Admin by wrappixel.com -->
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?= base_url( 'assets' ) ?>/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url( 'assets' ) ?>/assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="<?= base_url( 'assets' ) ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?= base_url( 'assets/monster-lite' ) ?>/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url( 'assets/monster-lite' ) ?>/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url( 'assets/monster-lite' ) ?>/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?= base_url( 'assets' ) ?>/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url( 'assets/monster-lite' ) ?>/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?= base_url( 'assets' ) ?>/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

    <?php 
        if ( isset( $page_script ) && strlen( $page_script ) > 0 ) {
            $this->load->view( $page_script );
        } 
    ?>

</body>

</html>
