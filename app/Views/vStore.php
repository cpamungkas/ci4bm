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
                <div class="alert alert-block alert-success">
                    <button type="button" class="close" data-dismiss="alert">
                        <i class="ace-icon fa fa-times"></i>
                    </button>
                    <i class="ace-icon fa fa-check green"></i>
                    Hello <strong class="green"><?= $name; ?></strong>, welcome to Store Setup.
                </div>
                <?php if (isset($validation)) : ?>
                    <div class="alert alert-warning">
                        <?= $validation->listErrors() ?>
                    </div>
                <?php endif; ?>
                <div class="justify">
                    <!-- <div class="col-xs-12 col-sm-12"> -->
                    <div class="widget-box">
                        <div class="widget-header">
                            <h4 class="widget-title">Store Setup</h4>
                            <div class="widget-toolbar">
                                <a href="#" data-action="collapse">
                                    <i class="ace-icon fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main">
                                <form action="<?php echo base_url(); ?>/CStore/saveStore" method="post" class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label class="col-sm-1 control-label no-padding-left no-padding-top">Store Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="form-field-1" name="storename" id="storename" placeholder="Store Name" style="width:77%;" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-1 control-label no-padding-left no-padding-top">Store Code</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="storecode" id="storecode" style="width:26%;;" placeholder="Store Code" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-1 control-label no-padding-right no-padding-top" for="kwhmeter1">KWH Meter 1 </label>
                                        <div class="col-sm-8">
                                            <div class="bootstrap-duallistbox-container row moveonselect">
                                                <div class="box1 col-md-6">
                                                    <select class="form-control" id="kwhmeter1" name="kwhmeter1" style="width:60%;">
                                                        <option value="0">Select Item</option>
                                                        <?php foreach ($getKWHMeter1 as $kwh1) : ?>
                                                            <?= '<option value="' . $kwh1['kwhmeter1'] . '">' . $kwh1['kwhmeter1'] . ' KVA</option>' ?>
                                                        <?php endforeach; ?>
                                                        <!-- <option value="2.2">2.2 KVA</option>
                                                        <option value="41.5">41.5 KVA</option>
                                                        <option value="53">53 KVA</option>
                                                        <option value="66">66 KVA</option>
                                                        <option value="82.5">82.5 KVA</option>
                                                        <option value="105">105 KVA</option>
                                                        <option value="131">131 KVA</option>
                                                        <option value="135">135 KVA</option>
                                                        <option value="147">147 KVA</option>
                                                        <option value="164">164 KVA</option>
                                                        <option value="165">165 KVA</option>
                                                        <option value="197">197 KVA</option>
                                                        <option value="240">240 KVA</option>
                                                        <option value="270">270 KVA</option>
                                                        <option value="345">345 KVA</option>
                                                        <option value="415">415 KVA</option>
                                                        <option value="555">555 KVA</option>
                                                        <option value="865">865 KVA</option>
                                                        <option value="1110">1,110 KVA</option>
                                                        <option value="1210">1,210 KVA</option>
                                                        <option value="1250">1,250 KVA</option>
                                                        <option value="1385">1,385 KVA</option> -->
                                                    </select>
                                                </div>
                                                <div class="box2 col-md-6">
                                                    <span class="info-container">
                                                        <label class="col-sm-3 control-label no-padding-left  no-padding-top" for="kwhmeter1">Id PLN 1 </label>
                                                        <input type="text" id="idpln1" name="idpln1" placeholder="Id PLN 1" style="width:200px;" />
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-1 control-label no-padding-right no-padding-top" for="kwhmeter1">KWH Meter 2 </label>
                                        <div class="col-sm-8">
                                            <div class="bootstrap-duallistbox-container row moveonselect">
                                                <div class="box1 col-md-6">
                                                    <select class="form-control" id="kwhmeter2" name="kwhmeter2" style="width:60%;">
                                                        <option value="0">Select Item</option>
                                                        <?php foreach ($getKWHMeter2 as $kwh2) : ?>
                                                            <?= '<option value="' . $kwh2['kwhmeter2'] . '">' . $kwh2['kwhmeter2'] . ' KVA</option>' ?>
                                                        <?php endforeach; ?>
                                                        <!-- <option value=" 2.2">2.2 KVA</option>
                                                            <option value="66">66 KVA</option>
                                                            <option value="82.5">82.5 KVA</option>
                                                            <option value="147">147 KVA</option>
                                                            <option value="197">197 KVA</option> -->
                                                    </select>
                                                </div>
                                                <div class="box2 col-md-6">
                                                    <span class="info-container">
                                                        <label class="col-sm-3 control-label no-padding-left  no-padding-top" for="kwhmeter2">Id PLN 2 </label>
                                                        <input type="text" name="idpln2" id="idpln2" placeholder="Id PLN 2" style="width:200px;" />
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="hr hr-16 hr-dotted"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-offset-5 col-md-9">
                                        <button class="btn btn-success" type="button" name="btnAdd" id="btnAdd" onclick="submitAdd()">
                                            <i class="ace-icon fa fa-check bigger-110"></i>
                                            Add
                                        </button>
                                        &nbsp;&nbsp;&nbsp;
                                        <button class="btn" type="reset" name="btnReset" id="btnReset" onclick="resetbtn()">
                                            <i class="ace-icon fa fa-undo bigger-110"></i>
                                            Reset
                                        </button>
                                    </div>
                                </form>
                                <div class="hr hr-16 hr-dotted"></div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h3 class="header smaller lighter blue">Store dataTables</h3>
                                        <div class="clearfix">
                                            <div class="pull-right tableTools-container"></div>
                                        </div>
                                        <!-- div.table-responsive -->
                                        <!-- div.dataTables_borderWrap -->
                                        <div>
                                            <table id="grid-table"></table>
                                            <div id="grid-pager"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                    <!-- /.row -->
                </div>

                <!-- < ?php foreach ($tablestore as $ts) : ?>
                    {< ?= $ts['StoreName']; ?>},
                < ?php endforeach; ?> -->

                <?php //echo json_encode($getDataTableStore);
                ?>

                <!-- PAGE CONTENT ENDS -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.page-content -->
</div>

<?= $this->endSection(); ?>