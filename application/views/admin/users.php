
<style>
    #tableAdmin th {
        text-align: center;
        background: #607D8B;
        color: #ffff;
    }
    #tableAdmin td {
        text-align: center;
    }
</style>

<div class="row">
    <div class="col-md-12">
        <div class="thumbnail" style="min-height: 10px;padding: 14px;">
            <div style="text-align: right;margin-bottom: 15px;">
                <button class="btn btn-sm btn-success" id="btnAddAdmin">Tambah Admin</button>
            </div>
            <table class="table table-bordered table-striped" id="tableAdmin">
                <thead>
                <tr>
                    <th style="width: 1%;">No</th>
                    <th>Nama</th>
                    <th style="width: 15%;">Username</th>
                    <th style="width: 15%;">Password</th>
                    <th style="width: 15%;">Last Login</th>
                    <th style="width: 5%;"><i class="fa fa-cog"></i></th>
                </tr>
                </thead>
                <tbody id="dataAdmin"></tbody>
            </table>
        </div>
    </div>
</div>



<script>
    $(document).ready(function () {
        loadAdmin();
    });
    
    $('#btnAddAdmin').click(function () {

        $('#myModal .modal-footer').addClass('hide');
        $('#myModal .modal-title').html('Tambah Admin');

        var bd = '<div class="row">' +
            '    <div class="col-md-12">' +
            '        <table class="table table-bordered table-hover">' +
            '            <tr>' +
            '                <td style="width: 25%;">Nama</td>' +
            '                <td style="width: 1%;">:</td>' +
            '                <td><input class="form-control" id="formName"></td>' +
            '            </tr>' +
            '            <tr>' +
            '                <td>Username</td>' +
            '                <td>:</td>' +
            '                <td><input class="form-control" id="formUsername"></td>' +
            '            </tr>' +
            '            <tr>' +
            '                <td>Password</td>' +
            '                <td>:</td>' +
            '                <td><input class="form-control" id="formPassword"></td>' +
            '            </tr>' +
            '            <tr>' +
            '                <td colspan="3" style="text-align: right;">' +
            '                    <button class="btn btn-sm btn-success" id="btnSaveNewAdmin">Simpan</button>' +
            '                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Keluar</button>' +
            '                </td>' +
            '            </tr>' +
            '        </table>' +
            '    </div>' +
            '</div>';
        $('#myModal .modal-body').html(bd);
        $('#myModal').modal('show');
    });

    function loadAdmin() {
        var data = {
            action : 'readAdmin'
        };
        var url = base_url_js+'api/crudAdmin';

        $.post(url,{dataForm : data},function (jsonResult){
            console.log(jsonResult);
            $('#dataAdmin').empty();
            if(jsonResult.length>0){
                var no = 1;
                for(var i=0;i<jsonResult.length;i++){
                    var d = jsonResult[i];
                    $('#dataAdmin').append('<tr>' +
                        '<td>'+no+'</td>' +
                        '<td style="text-align: left;">'+d.Name+'</td>' +
                        '<td>'+d.Username+'</td>' +
                        '<td>'+d.PasswordTxt+'</td>' +
                        '<td>'+d.LastLogin+'</td>' +
                        '<td><button class="btn btn-sm btn-danger btnDelAdmin" data-id="'+d.ID+'"><i class="fa fa-trash"></i></button></td>' +
                        '</tr>');

                    no += 1;
                }
            }
        });
    }

    $(document).on('click','#btnSaveNewAdmin',function () {

        $('#btnSaveNewAdmin, button[data-dismiss=modal]').prop('disabled',true);

        var formName = $('#formName').val();
        var formUsername = $('#formUsername').val();
        var formPassword = $('#formPassword').val();


        if(formName!='' && formName!=null &&
            formUsername!='' && formUsername!=null &&
        formPassword!='' && formPassword!=null){

            var data = {
                action : 'addNewAdmin',
                dataInsert : {
                    Username : formUsername,
                    Name : formName,
                    PasswordTxt : formPassword
                }
            };

            var url = base_url_js+'api/crudAdmin';
            $.post(url,{dataForm : data},function (jsonResult){
                loadAdmin();
                toastr.success('Admin berhasil ditambahkan','Success');
                setTimeout(function () {
                    $('#myModal').modal('hide');
                },500);
            });



        } else {
            toastr.error('Semua data wajib diisi');
        }
    });

    $(document).on('click','.btnDelAdmin',function () {
        if(confirm('Hapus admin ini?')){
            var ID = $(this).attr('data-id');

            var data = {
                action : 'deleteAdmin',
                ID : ID
            };
            var url = base_url_js+'api/crudAdmin';
            $.post(url,{dataForm : data},function (jsonResult){
                toastr.success('Data berhasil dihapus','Success');
                loadAdmin();
            });

        }
    });
</script>