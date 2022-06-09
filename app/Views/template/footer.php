<script src="<?php echo base_url(); ?>/js/excanvas.min.js"></script>
<script src="<?php echo base_url(); ?>/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>/js/jquery.ui.custom.js"></script>
<script src="<?php echo base_url(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>/js/jquery.flot.min.js"></script>
<script src="<?php echo base_url(); ?>/js/jquery.flot.resize.min.js"></script>
<script src="<?php echo base_url(); ?>/js/jquery.peity.min.js"></script>
<script src="<?php echo base_url(); ?>/js/fullcalendar.min.js"></script>
<script src="<?php echo base_url(); ?>/js/jquery.uniform.js"></script>
<script src="<?php echo base_url(); ?>/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>/js/select2.min.js"></script>
<script src="<?php echo base_url(); ?>/js/maruti.js"></script>
<script src="<?php echo base_url(); ?>/js/maruti.tables.js"></script>
<script src="<?php echo base_url(); ?>/js/maruti.dashboard.js"></script>
<script src="<?php echo base_url(); ?>/js/maruti.chat.js"></script>

<script type="text/javascript">
    // $(document).ready(function() {
    //     $('#tablestore').DataTable({
    //         columnDefs: [{
    //             orderable: false,
    //             className: 'select-checkbox',
    //             targets: 0
    //         }],
    //         select: {
    //             style: 'os',
    //             selector: 'td:first-child'
    //         },
    //         order: [
    //             [1, 'asc']
    //         ]
    //     });
    // });
    // This function is called from the pop-up menus to transfer to
    // a different page. Ignore if the value returned is a null string:
    function goPage(newURL) {
        // if url is empty, skip the menu dividers and reset the menu selection to default
        if (newURL != "") {
            // if url is "-", it is this page -- reset the menu:
            if (newURL == "-") {
                resetMenu();
            }
            // else, send page to designated URL
            else {
                document.location.href = newURL;
            }
        }
    }

    // resets the menu selection upon entry to this page:
    function resetMenu() {
        document.gomenu.selector.selectedIndex = 2;
    }
</script>