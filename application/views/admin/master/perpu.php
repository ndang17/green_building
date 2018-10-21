<style>
    #tablePurpose thead tr th {
        text-align: center;
        background: #607d8b;
        color: #FFFFFF;
    }
    #tablePurpose tbody tr td {
        text-align: center;
    }
    .note-insert {
        display: none;
    }
</style>


<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-bars margin-right"></i> PERPU</h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <tr>
                        <td style="width: 15%;">Title</td>
                        <td style="width: 1%;">:</td>
                        <td>
                            <input class="form-control hide" id="formPerpuID"/>
                            <select class="form-control" id="formPerpuIDTitle" style="max-width: 350px;"></select>
                        </td>
                    </tr>
                    <tr>
                        <td>Perpu</td>
                        <td>:</td>
                        <td>
                            <div id="divEditor"></div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" style="text-align: right;">
                            <button class="btn btn-success" id="btnSubmitPerpu"><i class="fa fa-paper-plane margin-right"></i> Save</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered" id="tablePurpose">
                        <thead>
                        <tr>
                            <th style="width: 1%;">No</th>
                            <th>Perpu</th>
                            <th style="width: 4%;">Action</th>
                        </tr>
                        </thead>
                        <tbody id="trDataPerpus"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        getSelectOptionTitle('#formPerpuIDTitle','');
        loadDataPerpu();
        loadEditor('');

    });

    $('#btnSubmitPerpu').click(function () {

        $('#btnSubmitPerpu').prop('disabled',true);

        var formPerpuID = $('#formPerpuID').val();
        var formPerpuIDTitle = $('#formPerpuIDTitle').val();
        var formPerpu = $('#formPerpu').val();

        if(formPerpuIDTitle!='' && formPerpuIDTitle!=null){

            var action = (formPerpuID!='' && formPerpuID!=null) ? 'editPerpu' : 'addPerpu';

            var data = {
                action : action,
                ID : formPerpuID,
                formInsert : {
                    IDTitle : formPerpuIDTitle,
                    Perpu : formPerpu,
                }
            }

            var url = base_url_js+'api/crudPurpose';
            $.post(url,{dataForm : data},function (result) {
                toastr.success('Data saved','Success');
                setTimeout(function () {
                    window.location.href = '';
                },500);
            });

        }
    });

    function loadEditor(value) {
        $('#divEditor').empty();
        $('#divEditor').html('<textarea id="formPerpu" name="editordata"></textarea>');
        if(value!='' && typeof value !== "undefined"){
            $('#formPerpu').summernote('code',value);
        } else {
            $('#formPerpu').summernote({
                height : 200,
                // width : 700,
                airMode : false
            });
        }

    }

    function loadDataPerpu() {
        var data = {
          action : 'readPerpu'  
        };
        var url = base_url_js+'api/crudPurpose';
        $.post(url,{dataForm:data},function (jsonResult) {
            // console.log(jsonResult);
            $('#trDataPerpus').empty();
            for(var i=0;i<jsonResult.length;i++){
                var d = jsonResult[i];
                $('#trDataPerpus').append('<tr>' +
                    '<td style="background: lightyellow;text-align: center;font-weight: bold;" colspan="5">'+d.Code+' - '+d.Title+'</td>' +
                    '</tr>');

                if(d.Perpu.length>0){
                    var no = 1;
                    for(var t=0;t<d.Perpu.length;t++){
                        var dt = d.Perpu[t];
                        $('#trDataPerpus').append('<tr>' +
                            '<td>'+no+'</td>' +
                            '<td style="text-align: left;">'+dt.Perpu+'</td>' +
                            '<td><a class="btnEditPerpu" data-id="'+d.ID+'"><i class="fa fa-edit"></i></a> | ' +
                            '<a class="btnDelPerpu" data-id="'+d.ID+'"><i class="fa fa-trash-o"></i></a></td>' +
                            '</tr>');

                        no += 1;
                    }
                }

            }
        });
    }

    $(document).on('click','.btnEditPerpu',function () {
        var data = {
            action : 'loadPerpu',
            ID : $(this).attr('data-id')
        };
        var url = base_url_js+'api/crudPurpose';
        $.post(url,{dataForm:data},function (jsonRsult) {
            if(jsonRsult.length>0){
                var d = jsonRsult[0];
                $('#formPerpuID').val(d.ID);
                $('#formPerpuIDTitle').val(d.IDTitle);
                // $('#formPerpu').val();
                // $('#summernote').summernote('editor.insertText', d.Perpu);
                loadEditor(d.Perpu);
            }

        });
    });

    $(document).on('click','.btnDelPerpu',function () {

        if(confirm('Delete data?')){

            $('.btnDelPerpu').prop('disabled',true);

            var ID = $(this).attr('data-id');
            var data = {
                action : 'deletePerpu',
                ID : ID
            };
            var url = base_url_js+'api/crudPurpose';
            $.post(url,{dataForm:data},function (result) {
                loadDataPerpu();
                setTimeout(function () {
                    $('.btnDelPerpu').prop('disabled',false);
                },500);
            });

        }
    });
</script>