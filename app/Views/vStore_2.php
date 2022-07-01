<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>
<div id="content-header">
    <div id="breadcrumb">
        <a href="<?= base_url(); ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="#" class="current">Store</a>
        <a href="#" class="current">Setup</a>
    </div>
</div>
<div class="container-fluid">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                ./. <span class="icon">
                    <i class="icon-th-list"></i>
                </span>
                <h5>Store setup</h5>
            </div>
            <div class="widget-content  ">
                <?php if (isset($validation)) : ?>
                    <div class="alert alert-warning">
                        <?= $validation->listErrors() ?>
                    </div>
                <?php endif; ?>
                <form action="<?php echo base_url(); ?>/CStore/saveStore" method="post" class="form-inline">
                    <div class="control-group form-row">
                        <div class="controls">
                            <label class="control-label">Store Name</label>
                            <div style="margin-left:88px;margin-top:-25px;">
                                <input type="text" name="storename" id="storename" style="width:35%;padding:5px" />
                            </div>
                        </div>
                    </div>
                    <div class="control-group form-row ">
                        <div class="controls">
                            <label class="control-label">Store Code</label>
                            <div style="margin-left:88px;margin-top:-25px;">
                                <input type="text" name="storecode" id="storecode" style="width:10%;padding:5px" />
                            </div>
                        </div>
                    </div>
                    <div class="control-group form-row">
                        <div class="controls">
                            <label class="control-label">KWH Meter 1</label>
                            <div style="margin-left:88px;margin-top:-25px;">
                                <select style="width:20%;padding:5px" name="kwhmeter1" id="kwhmeter1">
                                    <option value="0">Select Item</option>
                                    <option value="2.2">2.2 KVA</option>
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
                                    <option value="1385">1,385 KVA</option>
                                </select>
                                <label class="control-label" style="padding:0 0 0 15%;">Id PLN 1</label>
                                <input type="text" name="idpln1" id="idpln1" />
                            </div>
                        </div>
                    </div>
                    <div class="control-group form-row">
                        <div class="controls">
                            <label class="control-label">KWH Meter 2</label>
                            <div style="margin-left:88px;margin-top:-25px;">
                                <select style="width:20%;padding:5px" name="kwhmeter2" id="kwhmeter2">
                                    <option value="0">Select Item</option>
                                    <option value="2.2">2.2 KVA</option>
                                    <option value="66">66 KVA</option>
                                    <option value="82.5">82.5 KVA</option>
                                    <option value="147">147 KVA</option>
                                    <option value="197">197 KVA</option>
                                </select>
                                <label class="control-label" style="padding:5px 0 0 15%; ">Id PLN 2</label>
                                <input type="text" name="idpln2" id="idpln2" />
                            </div>
                        </div>
                    </div>
                    <div>
                        <input type="submit" value="Add" class="btn btn-success" style="width:8%;margin-left:48%;" />
                        <input type="submit" value="Clear" class="btn btn-success" style="width:8%;" />
                    </div>
                </form>
                <hr />
                <div class="widget-box">
                    <div class="widget-title">
                        <!-- <span class="icon">
                            <i class="icon-th-list"></i>
                        </span> -->
                        <h5>Table Store Setup</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table id="tablestoresetup" class="table table-bordered with-check data-table">
                            <thead>
                                <tr>
                                    <!-- <th><input type="checkbox" id="title-table-checkbox" name="title-table-checkbox" /></th> -->

                                    <th>No</th>
                                    <th>Store Name</th>
                                    <th>Store Code</th>
                                    <th>KWH Meter 1</th>
                                    <th>ID PLN 1</th>
                                    <th>KWH Meter 2</th>
                                    <th>ID PLN 2</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($tablestore as $ts) : ?>
                                    <tr class="gradeX">
                                        <!-- <td><input type="checkbox" /></td> -->

                                        <td><?= $i; ?></td>
                                        <td><?= $ts['StoreName']; ?></td>
                                        <td><?= $ts['StoreCode']; ?></td>
                                        <td class="center"><?= $ts['KWHMeter1']; ?></td>
                                        <td class="center"><?= $ts['idPLN1']; ?></td>
                                        <td class="center"><?= $ts['KWHMeter2']; ?></td>
                                        <td class="center"><?= $ts['idPLN2']; ?></td>
                                        <td>
                                            <a href="#myModalEdit<?= $i; ?>" data-toggle="modal"><i class="icon-edit tip-top" data-original-title="edit data"></i></a> |
                                            <a href="#myModalDelete<?= $i; ?>" data-toggle="modal"> <i class="icon-remove-sign tip-top" data-original-title="delete data"></i></a>
                                        </td>
                                    </tr>
                                    <div id="myModalEdit<?= $i; ?>" class="modal hide" aria-hidden="true" style="display: none;">
                                        <div class="modal-header">
                                            <button data-dismiss="modal" class="close" type="button">×</button>
                                            <h3>Edit Data Store <?= $ts['StoreName']; ?></h3>
                                        </div>
                                        <div class="modal-body">
                                            <!-- <p></p> -->
                                            <div class="widget-box nopadding">
                                                <div class="widget-content ">
                                                    <form action="#" method="get" class="form-horizontal">
                                                        <div class="control-group form-row">
                                                            <div class="controls">
                                                                <label class="control-label">Store Name</label>
                                                                <div style="margin-left:88px;margin-top:-25px;">
                                                                    <input type="text" name="storename" id="storename" style="width:35%;padding:5px" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="control-group form-row ">
                                                            <div class="controls">
                                                                <label class="control-label">Store Code</label>
                                                                <!-- <div style="margin-left:88px;margin-top:-25px;"> -->
                                                                <input type="text" name="storecode" id="storecode" style="width:10%;padding:5px" />
                                                                <!-- </div> -->
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <!-- <div class="controls"> -->
                                                            <label class="control-label">KWH Meter 1</label>
                                                            <!-- <div> -->
                                                            <select name="modalkwhmeter1" id="modalkwhmeter1">
                                                                <option value="0">Select Item</option>
                                                                <option value="2.2">2.2 KVA</option>
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
                                                                <option value="1385">1,385 KVA</option>
                                                            </select>
                                                            <!-- <label class="control-label" style="padding:0 0 0 15%;">Id PLN 1</label>
                                                                    <input type="text" name="idpln1" id="idpln1" /> -->
                                                            <!-- </div> -->
                                                            <!-- </div> -->
                                                        </div>
                                                        <div class="control-group">
                                                            <!-- <div class="controls"> -->
                                                            <label class="control-label">KWH Meter 2</label>
                                                            <!-- <div> -->
                                                            <select name="modalkwhmeter2" id="modalkwhmeter2">
                                                                <option value="0">Select Item</option>
                                                                <option value="2.2">2.2 KVA</option>
                                                                <option value="66">66 KVA</option>
                                                                <option value="82.5">82.5 KVA</option>
                                                                <option value="147">147 KVA</option>
                                                                <option value="197">197 KVA</option>
                                                            </select>
                                                            <!-- <label class="control-label" style="padding:5px 0 0 15%; ">Id PLN 2</label> -->
                                                            <!-- <input type="text" name="idpln2" id="idpln2" /> -->
                                                            <!-- </div> -->
                                                            <!-- </div> -->
                                                        </div>
                                                        <div class="form-actions">
                                                            <button type="submit" class="btn btn-success">Save</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a data-dismiss="modal" class="btn btn-primary" href="#">Confirm</a>
                                            <a data-dismiss="modal" class="btn" href="#">Cancel</a>
                                        </div>
                                    </div>
                                    <div id="myModalDelete<?= $i; ?>" class="modal hide" aria-hidden="true" style="display: none;">
                                        <div class="modal-header">
                                            <button data-dismiss="modal" class="close" type="button">
                                                ×
                                            </button>
                                            <h3>Delete Data Store</h3>
                                        </div>
                                        <div class="modal-body">
                                            <p><?= $ts['StoreName']; ?></p>
                                        </div>
                                        <div class="modal-footer">
                                            <a data-dismiss="modal" class="btn btn-primary" href="#">Delete</a>
                                            <a data-dismiss="modal" class="btn" href="#">Cancel</a>
                                        </div>
                                    </div>
                                    <?php $i++; ?>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- /.content-wrapper -->

<?= $this->endSection(); ?>