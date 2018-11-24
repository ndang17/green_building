<style>
    .nav-pills>li>a {
        border-radius: 0px;
        /*border-right: 1px solid #ccc;*/
        border-right: 1px solid #ccc;
    }
    .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
        background-color: #607D8B;
    }
    .nav-pills>li+li {
        margin-left: 0px;
    }

    #tableDtPengunjung th {
        text-align: center;
        background: #607d8b;
        color: #FFFFFF;
    }
    #tableDtPengunjung td {
        text-align: center;
    }
    h3.title-modal {
        margin-top: 0px;
        border-left: 10px solid orange;
        padding-left: 8px;
    }

    #tablePoint th {
        text-align: center;
    }
    #tablePoint td {
        text-align: center;
    }
</style>

<!--<pre>-->
<?php //print_r($this->session->userdata('login'));?>
<!--</pre>-->

<div class="row">
    <div class="col-md-12">
        <div class="thumbnail">
            <ul class="nav nav-pills">
                <li role="presentation" class=""><a href="http://localhost:8080/f/admin/master/add-question"><i class="fa fa-th-large margin-right"></i> List User Test</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="thumbnail">
            <table class="table table-bordered" id="tableDtPengunjung">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Pengguna</th>
                    <th>Proyek</th>
                    <th>Medali</th>
                    <th>Milai</th>
                    <th><i class="fa fa-cog"></i></th>
                </tr>
                </thead>
                <tbody id="dataRw"></tbody>
            </table>
        </div>
    </div>
</div>




<script>
    $(document).ready(function () {
        loadData();
    });
    
    function loadData() {
        var data = {
            action : 'readPengunjung'
        };
        var url = base_url_js+'api/crudPengunjung';

        $.post(url,{dataForm : data},function (jsonResult){
            console.log(jsonResult);
            $('#dataRw').empty();
            if(jsonResult.length>0){
                var no = 1;
                for(var i=0;i<jsonResult.length;i++){
                    var d = jsonResult[i];
                    $('#dataRw').append('<tr>' +
                        '<td>'+no+'</td>' +
                        '<td style="text-align: left;">'+d.Name+'<br/><span style="color:blue">'+d.Email+'</span></td>' +
                        '<td style="text-align: left;">'+d.ProjectName+'<br/>'+d.Location+'</td>' +
                        '<td>' +
                        '<img src="'+base_url_js+'assets/images/icon/'+d.MedaliIcon+'" style="max-width: 40px;"><br/>'+d.Medali+'</td>' +
                        '<td>'+d.Percentage.toFixed(2)+'</td>' +
                        '<td>' +
                        '   <button class="btn btn-sm btn-default btnDetail" data-id="'+d.ID+'"><i class="fa fa-info-circle"></i> Detail</button> ' +
                        '   <button class="btn btn-sm btn-danger btnDelete" data-id="'+d.ID+'"><i class="fa fa-trash"></i></button> ' +
                        '</td>' +
                        '</tr>');
                    no += 1;
                }
            } else {
                $('#dataRw').append('<tr>' +
                    '<td colspan="5">-- Data Not Yet --</td>' +
                    '</tr>');
            }
        });
    }

    $(document).on('click','.btnDelete',function (jsonResult) {

        if(confirm('Hapus data?')){
            $('.btnDelete').prop('disabled',true);

            var ID = $(this).attr('data-id');
            var data = {
                action : 'deletePengunjung',
                IDUser : ID
            };
            var url = base_url_js+'api/crudPengunjung';
            $.post(url,{dataForm:data},function (jsonResult) {
                toastr.success('Data berhasil dihapus','Success');
                setTimeout(function () {
                    loadData();
                },500);
            });
        }

    });
    
    $(document).on('click','.btnDetail',function () {

        var ID = $(this).attr('data-id');
        var data = {
            action : 'detailPengunjung',
            IDUser : ID
        };
        var url = base_url_js+'api/crudPengunjung';
        $.post(url,{dataForm:data},function (jsonResult) {
            $('#myModal .modal-footer').addClass('hide');
            $('#myModal .modal-title').html('Detail Pengunjung');

            if(jsonResult.length>0){
                var d = jsonResult[0];
                var bd = '' +
                    '<div class="row">' +
                    '    <div class="col-md-12">' +
                    '       <h3 class="title-modal">Pengguna</h3>' +
                    '        <table class="table table-striped">' +
                    '            <tr>' +
                    '                <td style="width: 25%;">Nama</td>' +
                    '                <td style="width: 1%;">:</td>' +
                    '                <td>'+d.Name+'</td>' +
                    '            </tr>' +
                    '            <tr>' +
                    '                <td>Jabatan</td>' +
                    '                <td>:</td>' +
                    '                <td>'+d.Position+'</td>' +
                    '            </tr>' +
                    '            <tr>' +
                    '                <td>Email</td>' +
                    '                <td>:</td>' +
                    '                <td>'+d.Email+'</td>' +
                    '            </tr>' +
                    '            <tr>' +
                    '                <td>Pekerjaan</td>' +
                    '                <td>:</td>' +
                    '                <td>'+d.JobsDesc+'</td>' +
                    '            </tr>' +
                    '            <tr>' +
                    '                <td>Pekerjaan Lain</td>' +
                    '                <td>:</td>' +
                    '                <td>'+d.JobOther+'</td>' +
                    '            </tr>' +
                    '            <tr>' +
                    '                <td>Projek</td>' +
                    '                <td>:</td>' +
                    '                <td>'+d.ProjectName+'</td>' +
                    '            </tr>' +
                    '            <tr>' +
                    '                <td>Lokasi Projek</td>' +
                    '                <td>:</td>' +
                    '                <td>'+d.Location+'</td>' +
                    '            </tr>' +
                    '            <tr>' +
                    '                <td>Luas Lahan</td>' +
                    '                <td>:</td>' +
                    '                <td>'+d.LandArea+'</td>' +
                    '            </tr>' +
                    '            <tr>' +
                    '                <td>Luas Bangunan</td>' +
                    '                <td>:</td>' +
                    '                <td>'+d.BuildingArea+'</td>' +
                    '            </tr>' +
                    '        </table>' +
                    '<div>' +
                    '<hr/>' +
                    '<h3 class="title-modal">Kriteria</h3>' +
                    '<table class="table table-striped">' +
                    '    <tbody id="loadKriteria"></tbody>' +
                    '</table>' +
                    '</div>' +
                    '<hr/>' +
                    '<h3 class="title-modal">Detail Nilai</h3>' +
                    '<table class="table table-striped" id="tablePoint">' +
                    '    <thead>' +
                    '    <tr>' +
                    '        <th style="width: 1%;">No</th>' +
                    '        <th style="width: 10%;">Kode</th>' +
                    '        <th>Judul</th>' +
                    '        <th style="width: 15%;">Nilai</th>' +
                    '    </tr>' +
                    '    </thead>' +
                    '    <tbody id="loadDetailPoint"></tbody>' +
                    '    <tr>' +
                    '        <td style="text-align: right;" colspan="3">Total</td>' +
                    '        <td><b id="viewTotalNilai">0</b></td>' +
                    '    </tr>' +
                    '</table>' +
                    '<hr/>' +
                    '<div style="text-align: right;"><button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button></div>' +
                    '    </div>' +
                    '</div>';

                $('#myModal .modal-body').html(bd);

                var dataCriteria = d.Elig;
                if(dataCriteria.length>0){
                    var noC = 1;
                    for(var c=0;c<dataCriteria.length;c++){
                        var dc = dataCriteria[c];
                        $('#loadKriteria').append('<tr>' +
                            '<td style="width: 1%;text-align: center;">'+noC+'</td>' +
                            '<td>'+dc.Description+'</td>' +
                            '</tr>');
                        noC += 1;
                    }
                }

                var dataLog = d.DetailLog;
                if(dataLog.length>0){
                    var noL = 1;
                    var totalPoint = 0;
                    for(var l=0;l<dataLog.length;l++){
                        var dL = dataLog[l];
                        var point = parseFloat(dL.Percentage).toFixed(2);
                        totalPoint = totalPoint + parseFloat(dL.Percentage);
                        $('#loadDetailPoint').append('<tr>' +
                            '<td>'+noL+'</td>' +
                            '<td>'+dL.Code+'</td>' +
                            '<td style="text-align: left;" >'+dL.Title+'</td>' +
                            '<td>'+point+'</td>' +
                            '</tr>');

                        if(noL == dataLog.length){
                            $('#viewTotalNilai').html(totalPoint.toFixed(2));
                        }

                        noL += 1;
                    }
                }
            } else {
                var bd = 'Data Not Yet - <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>';
                $('#myModal .modal-body').html(bd);
            }


            $('#myModal').modal('show');
        });




    });
</script>