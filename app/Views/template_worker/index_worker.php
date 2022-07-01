<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Header -->
    <?= $this->include('template_worker/header_worker'); ?>
    <!-- End of Header -->
</head>

<body class="no-skin skin-3">
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
        <?= $this->include('template_worker/sidebar_worker'); ?>
        <!-- End of Sidebar -->

        <!-- /.main-content -->
        <div class="main-content">
            <?= $this->renderSection('page-content'); ?>
        </div>
        <!-- end main-content -->

        <!-- Footercopyright -->
        <?= $this->include('template_worker/footer_copyright_worker'); ?>
        <!-- End of Footercopyright -->

        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
        </a>
    </div>
    <!-- /.main-container -->
    <!-- basic scripts -->

    <!-- Footer -->    
    <?= $this->include('template_worker/footer_worker'); ?>
    <!-- End of Footer -->

</body>

</html>