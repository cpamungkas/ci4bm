<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Header -->
    <?= $this->include('template/header'); ?>
    <!-- End of Header -->
</head>

<body>
    <!-- Header Navbar -->
    <?= $this->include('template/header_bar'); ?>
    <!-- End of Header Navbar -->

    <!-- Sidebar -->
    <div id="sidebar">
        <?= $this->include('template/sidebar'); ?>
    </div>
    <!-- End of Sidebar -->

    <div id="content">
        <!-- Begin Page Content -->
        <?= $this->renderSection('page-content'); ?>
        <!-- /.container-fluid -->
    </div>

    <!-- Footercopyright -->
    <?= $this->include('template/footercopyright'); ?>
    <!-- End of Footercopyright -->

    <!-- Footer -->
    <?= $this->include('template/footer'); ?>
    <!-- End of Footer -->

</body>

</html>