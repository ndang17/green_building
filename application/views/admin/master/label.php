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
                                    <input class="form-control" onkeyup="this.value = this.value.toUpperCase();" id="formLabelCode" style="max-width: 150px;">
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
                                    <input class="form-control" type="number" id="formLabelPoint" style="max-width: 150px;">
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
       loadDataLabel();

        getSelectOptionTitle('#formLabelIDTitle','');
    });

    // ================ LABEL ===============
    function loadDataLabel() {
        var data = {
            action : 'readLabel'
        };
        var url = base_url_js+'api/crudLabel'

        $('#trTBLabel').empty();
        $.post(url,{dataForm:data},function (jsonResult) {

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
                Code : formLabelCode.toUpperCase().trim(),
                Label : formLabelLabel.trim(),
                Purpose : formLabelPurpose.trim(),
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