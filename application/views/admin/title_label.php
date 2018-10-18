
<div class="thumbnail">
    <ul class="nav nav-pills">
        <li role="presentation"><a href="<?php echo base_url('admin/add-question'); ?>">Question</a></li>
        <li role="presentation" class="active"><a href="<?php echo base_url('admin/title-label'); ?>">Title & Label</a></li>
    </ul>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bars margin-right"></i> Title</h3>
            </div>
            <div class="panel-body" style="min-height: 100px;">
                <div class="row">
                    <div class="col-md-4">
                        <table class="table">
                            <tr>
                                <td style="width: 7%;">Code</td>
                                <td style="width: 1%;">:</td>
                                <td>
                                    <input class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <span>Label</span>
                                    <input class="form-control">
                                </td>
                            </tr>
                            <tr>
                               <td colspan="3" style="text-align: right;">
                                   <button class="btn btn-success"><i class="fa fa-paper-plane margin-right"></i> Save</button>
                               </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-8">
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 1%;">No</th>
                                <th style="width: 15%;">Code</th>
                                <th>Label</th>
                                <th style="width: 1%;">Action</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bars margin-right"></i> Label</h3>
            </div>
            <div class="panel-body" style="min-height: 100px;">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <table class="table">
                            <tr>
                                <td style="width: 25%;">Title</td>
                                <td style="width: 1%;">:</td>
                                <td>
                                    <select class="form-control"></select>
                                </td>
                            </tr>
                            <tr>
                                <td>Code</td>
                                <td>:</td>
                                <td>
                                    <input class="form-control" style="max-width: 150px;">
                                </td>
                            </tr>
                            <tr>
                                <td>Label</td>
                                <td>:</td>
                                <td>
                                    <input class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Purpose</td>
                                <td>:</td>
                                <td>
                                    <textarea class="form-control" rows="5"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>Total Point</td>
                                <td>:</td>
                                <td>
                                    <input class="form-control" style="max-width: 150px;">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" style="text-align: right;">
                                    <button class="btn btn-success"><i class="fa fa-paper-plane margin-right"></i> Save</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Code</th>
                                <th>Label</th>
                                <th>Purpose</th>
                                <th>Point</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>