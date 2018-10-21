
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

<script>
    $(document).ready(function () {
        loadDataTitle();
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
</script>