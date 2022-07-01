<?= $this->extend('template_worker/index_worker'); ?>
<?= $this->section('page-content'); ?>
<div class="main-content-inner">
    <div class="page-content">
        <div class="ace-settings-container" id="ace-settings-container">
            <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                <i class="ace-icon fa fa-cog bigger-130"></i>
            </div>

            <div class="ace-settings-box clearfix" id="ace-settings-box">
                <div class="pull-left width-50">
                    <div class="ace-settings-item">
                        <div class="pull-left">
                            <select id="skin-colorpicker" class="hide">
                                <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                                <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                            </select>
                        </div>
                        <span>&nbsp; Choose Skin</span>
                    </div>
                    <div class="ace-settings-item">
                        <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
                        <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                    </div>
                    <div class="ace-settings-item">
                        <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
                        <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                    </div>
                </div>
                <!-- /.pull-left -->
            </div>
            <!-- /.ace-settings-box -->
        </div>
        <!-- /.ace-settings-container -->

        <!-- <div class="page-header"> -->
        <!-- <h1> -->
        <!-- Dashboard -->
        <!-- <small>
                                <i class="ace-icon fa fa-angle-double-right"></i>
                                top menu &amp; navigation
                            </small> -->
        <!-- </h1> -->
        <!-- </div> -->
        <!-- /.page-header -->

        <div class="row">
            <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                <!-- <div class="alert alert-info visible-sm visible-xs">
                                <button type="button" class="close" data-dismiss="alert">
                                    <i class="ace-icon fa fa-times"></i>
                                </button>
                                Please note that
                                <span class="blue bolder">top menu style</span>
                                is visible only in devices larger than
                                <span class="blue bolder">991px</span>
                                which you can change using CSS builder tool.
                            </div> -->
                <div class="alert alert-block alert-success">
                    <button type="button" class="close" data-dismiss="alert">
                        <i class="ace-icon fa fa-times"></i>
                    </button>
                    <i class="ace-icon fa fa-check green"></i>
                    Hello <strong class="green"><?= $name; ?></strong>, welcome to dashboard.
                </div>
                <!-- <div class="well well-sm visible-sm visible-xs">
                                Top menu can become any of the 3 mobile view menu styles:
                                <em>default</em>
                                ,
                                <em>collapsible</em>
                                or
                                <em>minimized</em>.
                            </div> -->

                <!-- <div class="hidden-sm hidden-xs">
                    <button type="button" class="sidebar-collapse btn btn-white btn-primary" data-target="#sidebar">
                        <i class="ace-icon fa fa-angle-double-up" data-icon1="ace-icon fa fa-angle-double-up" data-icon2="ace-icon fa fa-angle-double-down"></i>
                        Collapse/Expand Menu
                    </button>
                </div> -->

                <div class="center">
                    <div class="row">
                        <div class="space-6"></div>

                        <div class="col-sm-6 infobox-container">
                            <a href="store" class="blue">
                                <div class="infobox infobox-green">
                                    <div class="infobox-icon">
                                        <i class="ace-icon fa fa-building-o"></i>
                                    </div>
                                    <div class="infobox-data">
                                        <span class="infobox-data-number">2</span>
                                        <div class="infobox-content">Store</div>
                                    </div>
                                    <!-- <div class="stat stat-success">8%</div> -->
                                </div>
                            </a>

                            <a href="#employee" class="blue">
                                <div class="infobox infobox-blue">
                                    <div class="infobox-icon">
                                        <i class="ace-icon fa fa-users"></i>
                                    </div>
                                    <div class="infobox-data">
                                        <span class="infobox-data-number">11</span>
                                        <div class="infobox-content">Employee</div>
                                    </div>
                                    <!-- 
                                <div class="badge badge-success">
                                    +32%
                                    <i class="ace-icon fa fa-arrow-up"></i>
                                </div> -->
                                </div>
                            </a>

                            <a href="#equipment">
                                <div class="infobox infobox-pink">
                                    <div class="infobox-icon">
                                        <i class="ace-icon fa fa-wrench"></i>
                                    </div>
                                    <div class="infobox-data">
                                        <span class="infobox-data-number">8</span>
                                        <div class="infobox-content">Equipment</div>
                                    </div>
                                    <!-- <div class="stat stat-important">4%</div> -->
                                </div>
                            </a>
                            <a href="#schedule">
                                <div class="infobox infobox-red">
                                    <div class="infobox-icon">
                                        <i class="ace-icon fa fa-list"></i>
                                    </div>

                                    <div class="infobox-data">
                                        <span class="infobox-data-number">7</span>
                                        <div class="infobox-content">Schedule</div>
                                    </div>
                                </div>
                            </a>

                            <a href="#storeequipment">
                                <div class="infobox infobox-purple">
                                    <div class="infobox-icon">
                                        <!-- <span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"></span> -->
                                        <i class="ace-icon fa fa-chain-broken"></i>
                                    </div>

                                    <div class="infobox-data">
                                        <span class="infobox-data-number">6</span>
                                        <div class="infobox-content">Store Equipment</div>
                                    </div>

                                    <!-- <div class="badge badge-success">
                                    7.2%
                                    <i class="ace-icon fa fa-arrow-up"></i>
                                </div> -->
                                </div>
                            </a>
                            <a href="#operational">
                                <div class="infobox infobox-blue2">
                                    <!-- <div class="infobox-progress">
                                    <div class="easy-pie-chart percentage" data-percent="42" data-size="46">
                                        <span class="percent">42</span>%
                                    </div>
                                </div> -->
                                    <div class="infobox-icon">
                                        <!-- <span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"></span> -->
                                        <i class="ace-icon fa fa-truck"></i>
                                    </div>

                                    <div class="infobox-data">
                                        <span class="infobox-data-number">10</span>
                                        <div class="infobox-content">Operational</div>

                                        <!-- <div class="infobox-content">
                                        <span class="bigger-110">~</span>
                                        58GB remaining
                                    </div> -->
                                    </div>
                                </div>
                            </a>
                            <a href="#maintenance">
                                <div class="infobox infobox-blue">
                                    <div class="infobox-icon">
                                        <i class="ace-icon fa fa-gears"></i>
                                    </div>

                                    <div class="infobox-data">
                                        <span class="infobox-data-number">2</span>
                                        <div class="infobox-content">Maintenance</div>
                                    </div>
                                    <!-- <div class="stat stat-success">8%</div> -->
                                </div>
                            </a>
                            <a href="#complaint">
                                <div class="infobox infobox-red">
                                    <div class="infobox-icon">
                                        <i class="ace-icon fa fa-commenting"></i>
                                    </div>

                                    <div class="infobox-data">
                                        <span class="infobox-data-number">2</span>
                                        <div class="infobox-content">Complaint Handling</div>
                                    </div>
                                    <!-- <div class="stat stat-success">8%</div> -->
                                </div>
                            </a>
                            <a href="#report">
                                <div class="infobox infobox-black">
                                    <div class="infobox-icon">
                                        <i class="ace-icon fa fa-file-text-o"></i>
                                    </div>

                                    <div class="infobox-data">
                                        <span class="infobox-data-number">2</span>
                                        <div class="infobox-content">Report</div>
                                    </div>
                                    <!-- <div class="stat stat-success">8%</div> -->
                                </div>
                            </a>

                            <div class="space-6"></div>

                            <!-- <div class="infobox infobox-green infobox-small infobox-dark">
                                <div class="infobox-progress">
                                    <div class="easy-pie-chart percentage" data-percent="61" data-size="39">
                                        <span class="percent">61</span>%
                                    </div>
                                </div>

                                <div class="infobox-data">
                                    <div class="infobox-content">Task</div>
                                    <div class="infobox-content">Completion</div>
                                </div>
                            </div> -->
                            <!-- 
                            <div class="infobox infobox-blue infobox-small infobox-dark">
                                <div class="infobox-chart">
                                    <span class="sparkline" data-values="3,4,2,3,4,4,2,2"></span>
                                </div>

                                <div class="infobox-data">
                                    <div class="infobox-content">Earnings</div>
                                    <div class="infobox-content">$32,000</div>
                                </div>
                            </div> -->
                            <!-- 
                            <div class="infobox infobox-grey infobox-small infobox-dark">
                                <div class="infobox-icon">
                                    <i class="ace-icon fa fa-download"></i>
                                </div>

                                <div class="infobox-data">
                                    <div class="infobox-content">Downloads</div>
                                    <div class="infobox-content">1,205</div>
                                </div>
                            </div> -->
                        </div>

                        <div class="vspace-12-sm"></div>

                        <!-- <div class="col-sm-5">
                            <div class="widget-box">
                                <div class="widget-header widget-header-flat widget-header-small">
                                    <h5 class="widget-title">
                                        <i class="ace-icon fa fa-signal"></i>
                                        Traffic Sources
                                    </h5>

                                    <div class="widget-toolbar no-border">
                                        <div class="inline dropdown-hover">
                                            <button class="btn btn-minier btn-primary">
                                                This Week
                                                <i class="ace-icon fa fa-angle-down icon-on-right bigger-110"></i>
                                            </button>

                                            <ul class="dropdown-menu dropdown-menu-right dropdown-125 dropdown-lighter dropdown-close dropdown-caret">
                                                <li class="active">
                                                    <a href="#" class="blue">
                                                        <i class="ace-icon fa fa-caret-right bigger-110">&nbsp;</i>
                                                        This Week
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        <i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
                                                        Last Week
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        <i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
                                                        This Month
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        <i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
                                                        Last Month
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="widget-body">
                                    <div class="widget-main">
                                        <div id="piechart-placeholder"></div>

                                        <div class="hr hr8 hr-double"></div>

                                        <div class="clearfix">
                                            <div class="grid3">
                                                <span class="grey">
                                                    <i class="ace-icon fa fa-thumbs-up fa-2x blue"></i>
                                                    &nbsp; likes
                                                </span>
                                                <h4 class="bigger pull-right">1,255</h4>
                                            </div>

                                            <div class="grid3">
                                                <span class="grey">
                                                    <i class="ace-icon fa fa-commenting fa-2x purple"></i>
                                                    &nbsp; complain
                                                </span>
                                                <h4 class="bigger pull-right">941</h4>
                                            </div>

                                            <div class="grid3">
                                                <span class="grey">
                                                    <i class="ace-icon fa fa-check-square fa-2x red"></i>
                                                    &nbsp; task's
                                                </span>
                                                <h4 class="bigger pull-right">1,050</h4>
                                            </div>
                                        </div>
                                    </div>
                                    < !-- /.widget-main -- >
                                </div>
                                < !-- /.widget-body -- >
                            </div>
                            < !-- /.widget-box -- >
                        </div> -->
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- PAGE CONTENT ENDS -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.page-content -->
</div>

<!-- /.main-content -->

<?= $this->endSection(); ?>