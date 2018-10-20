
<style>
    #tableTitle thead tr th, #tableLabel thead tr th {
        text-align: center;
        background: #607d8b;
        color: #FFFFFF;
    }
    #tableTitle tbody tr td, #tableLabel tbody tr td {
        text-align: center;
    }
</style>

<div class="thumbnail">
    <ul class="nav nav-pills">
        <li role="presentation"><a href="<?php echo base_url('admin/add-question'); ?>">Question</a></li>
        <li role="presentation" class="active"><a href="<?php echo base_url('admin/title-label'); ?>">Title & Label</a></li>
    </ul>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
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
                                    <input class="form-control fm-title hide" id="formTitleID">
                                    <input class="form-control fm-title" id="formTitleCode">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <span>Title</span>
                                    <input class="form-control fm-title" id="formTitleTitle">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" style="text-align: right;">
                                    <button id="btnSubmitTitle" class="btn btn-success"><i class="fa fa-paper-plane margin-right"></i> Save</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-8">
                        <table class="table table-bordered table-striped" id="tableTitle">
                            <thead>
                            <tr>
                                <th style="width: 1%;">No</th>
                                <th style="width: 10%;">Code</th>
                                <th>Title</th>
                                <th style="width: 15%;">Action</th>
                            </tr>
                            </thead>
                            <tbody id="dataTRTitle"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
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
                                    <input class="form-control hide" id="formLabelID" style="max-width: 150px;">
                                    <select class="form-control" id="formLabelIDTitle"></select>
                                </td>
                            </tr>
                            <tr>
                                <td>Code</td>
                                <td>:</td>
                                <td>
                                    <input class="form-control" id="formLabelCode" style="max-width: 150px;">
                                </td>
                            </tr>
                            <tr>
                                <td>Label</td>
                                <td>:</td>
                                <td>
                                    <input class="form-control" id="formLabelLabel">
                                </td>
                            </tr>
                            <tr>
                                <td>Purpose</td>
                                <td>:</td>
                                <td>
                                    <textarea class="form-control" rows="5" id="formLabelPurpose"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>Total Point</td>
                                <td>:</td>
                                <td>
                                    <input class="form-control" id="formLabelPoint" style="max-width: 150px;">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" style="text-align: right;">
                                    <button id="btnSubmitLabel" class="btn btn-success"><i class="fa fa-paper-plane margin-right"></i> Save</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-12">
                        <table class="table table-bordered" id="tableLabel">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Code</th>
                                <th>Label</th>
                                <th>Purpose</th>
                                <th>Point</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody id="trTBLabel"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script>


    $(document).ready(function () {
        loadDataTitle();
        loadDataLabel();

        getSelectOptionTitle('#formLabelIDTitle','');
    });

    // ================ TITLE ===============
    function loadDataTitle() {
        $('#dataTRTitle').empty();
        var data = {
            action : 'readTitle'
        };
        var url = base_url_js+'api/crudTitle';
        $.post(url,{dataForm:data},function (jsonResult) {

            if(jsonResult.length>0){
                var no = 1;
                for(var i=0;i<jsonResult.length;i++){
                    var d = jsonResult[i];
                    $('#dataTRTitle').append('<tr>' +
                        '<td>'+no+'</td>' +
                        '<td>'+d.Code+'</td>' +
                        '<td style="text-align: left;">'+d.Title+'</td>' +
                        '<td>' +
                        '<a href="javascript:void(0);" class="btnEditTitle" data-id="'+d.ID+'" data-code="'+d.Code+'" data-label="'+d.Title+'"><i class="fa fa-edit"></i></a>' +
                        '<a href="javascript:void(0);" class="btnDeleteTitle hide" data-id="'+d.ID+'"><i class="fa fa-trash"></i></a>' +
                        '</td>' +
                        '</tr>');

                    no += 1;
                }
            }
        });
    }

    // -- Delete Title --
    $(document).on('click','.btnDeleteTitle',function () {

        if(confirm('Delete data ?')){
            var ID = $(this).attr('data-id');
            var data = {
                action : 'deleteTitle',
                ID : ID
            };
            var url = base_url_js+'api/crudTitle';
            $.post(url,{dataForm:data},function (result) {
                toastr.success('Data deleted','Success');
                loadDataTitle();

            });
        }

    });

    // -- Edit Title --
    $(document).on('click','.btnEditTitle',function () {
        var ID = $(this).attr('data-id');
        var Code = $(this).attr('data-code');
        var Label = $(this).attr('data-label');

        $('#formTitleID').val(ID);
        $('#formTitleCode').val(Code);
        $('#formTitleTitle').val(Label);

    });

    $('#btnSubmitTitle').click(function () {
        var formTitleID = $('#formTitleID').val();
        var formTitleCode = $('#formTitleCode').val();
        var formTitleTitle = $('#formTitleTitle').val();

        $('#btnSubmitTitle,.fm-title').prop('disabled',true);

        var action = (formTitleID!='' && formTitleID!=null) ? 'editTitle' : 'addTitle';

        var data = {
            action : action,
            ID :   formTitleID,
            Code : formTitleCode,
            Title : formTitleTitle
        };
        var url = base_url_js+'api/crudTitle';
        $.post(url,{dataForm:data},function (result) {
            loadDataTitle();
            setTimeout(function () {
                $('#btnSubmitTitle,.fm-title').prop('disabled',false);
                $('.fm-title').val('');
            },500);
        });

    });

    // ================ PENUTUP TITLE ===============


    // ================ LABEL ===============
    function loadDataLabel() {
        var data = {
          action : 'readLabel'
        };
        var url = base_url_js+'api/crudLabel'

        $('#trTBLabel').empty();
        $.post(url,{dataForm:data},function (jsonResult) {
            console.log(jsonResult);
            if(jsonResult.length>0){

                for(var i=0;i<jsonResult.length;i++){
                    var d = jsonResult[i];
                    $('#trTBLabel').append('<tr>' +
                        '<td colspan="6" style="background: lightyellow;font-weight: bold;">'+d.Code+' - '+d.Title+'</td>' +
                        '</tr>');

                    if(d.Label.length>0){
                        var no = 1;
                        for(var l=0;l<d.Label.length;l++){
                            var dl = d.Label[l];
                            $('#trTBLabel').append('<tr>' +
                                '<td>'+no+'</td>' +
                                '<td>'+dl.Code+'</td>' +
                                '<td>'+dl.Label+'</td>' +
                                '<td style="text-align: left;">'+dl.Purpose+'</td>' +
                                '<td>'+dl.TotalPoint+'</td>' +
                                '<td><a href="javascript:void(0)" class="btnlabelEdit" ' +
                                'data-id="'+dl.ID+'"' +
                                'data-idtitile="'+dl.IDTitle+'"' +
                                'data-code="'+dl.Code+'"' +
                                'data-label="'+dl.Label+'"' +
                                'data-purpose="'+dl.Purpose+'"' +
                                'data-point="'+dl.TotalPoint+'"' +
                                '><i class="fa fa-edit"></i></a></td>' +
                                '</tr>');
                            no += 1;
                        }


                    }


                }
            }
        });
    }

    $(document).on('click','.btnlabelEdit',function () {
        var id = $(this).attr('data-id');
        var idtitile = $(this).attr('data-idtitile');
        var code = $(this).attr('data-code');
        var label = $(this).attr('data-label');
        var purpose = $(this).attr('data-purpose');
        var point = $(this).attr('data-point');

        $('#formLabelID').val(id);
        $('#formLabelIDTitle').val(idtitile);
        $('#formLabelCode').val(code);
        $('#formLabelLabel').val(label);
        $('#formLabelPurpose').val(purpose);
        $('#formLabelPoint').val(point);

    });
    
    $('#btnSubmitLabel').click(function () {

        $('#btnSubmitLabel').prop('disabled',true);

        var formLabelID = $('#formLabelID').val();
        var formLabelIDTitle = $('#formLabelIDTitle').val();
        var formLabelCode = $('#formLabelCode').val();
        var formLabelLabel = $('#formLabelLabel').val();
        var formLabelPurpose = $('#formLabelPurpose').val();
        var formLabelPoint = $('#formLabelPoint').val();

        var action= (formLabelID!='' && formLabelID!=null) ? 'editLabel' : 'addLabel' ;

        var data = {
            action : action,
            ID : formLabelID,
            dataForm : {
                IDTitle : formLabelIDTitle,
                Code : formLabelCode,
                Label : formLabelLabel,
                Purpose : formLabelPurpose,
                TotalPoint : formLabelPoint
            }
        };

        var url = base_url_js+'api/crudLabel';

        $.post(url,{dataForm:data},function (result) {

            loadDataLabel();
            $('#formLabelID').val('');
            $('#formLabelIDTitle').val('');
            $('#formLabelCode').val('');
            $('#formLabelLabel').val('');
            $('#formLabelPurpose').val('');
            $('#formLabelPoint').val('');

            toastr.success('Data Saved','Success');

            setTimeout(function () {
                $('#btnSubmitLabel').prop('disabled',false);
            },500);

        });



    });
</script>