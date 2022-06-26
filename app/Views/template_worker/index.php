<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Header -->
    <?= $this->include('template_worker/header_worker'); ?>
    <!-- End of Header -->
</head>

<body class="no-skin">
    <!-- Header Navbar -->
    <?= $this->include('template_worker/navbar_worker'); ?>
    <!-- End of Header Navbar -->

    <div class="main-container ace-save-state" id="main-container">
        <script type="text/javascript">
            try {
                ace.settings.loadState('main-container')
            } catch (e) {}
        </script>


        <!-- Sidebar -->
        <div id="sidebar">
            <?= $this->include('template_worker/sidebar_worker'); ?>
        </div>
        <!-- End of Sidebar -->

        <div class="main-content">
            <!-- Begin Page Content -->
            <?= $this->renderSection('page-content'); ?>
            <!-- /.container-fluid -->
        </div><!-- /.main-content -->

        <!-- Footercopyright -->
        <?= $this->include('template_worker/footer_copyright_worker'); ?>
        <!-- End of Footercopyright -->

        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
        </a>
    </div><!-- /.main-container -->



    <!-- Footer -->
    <?= $this->include('template_worker/footer_worker'); ?>
    <!-- End of Footer -->
</body>

</html>