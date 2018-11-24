<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="wizard-container">
                <div class="card wizard-card" data-color="green" id="wizard" style="padding: 15px;padding-left: 30px;padding-right: 30px;">

                    <div class="wizard-header">
                        <h3 class="wizard-title">
                            Mulai Penilaian Sekarang
                        </h3>
                        <h5>Penilaian ini untuk membantu anda uji kelayakan gedung.</h5>
                    </div>

                    <div class="tab-content">


                        <div class="row">
                            <div class="col-md-6" style="min-height: 100px;">
                                <div class="input-group">
													<span class="input-group-addon">
														<i class="fa fa-user"></i>
													</span>
                                    <div class="form-group label-floating">
                                        <label class="control-label">Nama Penilai</label>
                                        <input type="text" id="formName" class="form-control">
                                    </div>
                                </div>
                                <div class="input-group">
													<span class="input-group-addon">
														<i class="fa fa-check-square-o"></i>
													</span>
                                    <div class="form-group label-floating">
                                        <label class="control-label">Jabatan</label>
                                        <input type="text" id="formPosition" class="form-control">
                                    </div>
                                </div>
                                <div class="input-group">
													<span class="input-group-addon">
														<i class="fa fa-envelope"></i>
													</span>
                                    <div class="form-group label-floating">
                                        <label class="control-label">E-mail</label>
                                        <input type="text" id="formEmail" class="form-control">
                                    </div>
                                </div>
                                <!--                                    <div class="input-group">-->
                                <!--													<span class="input-group-addon">-->
                                <!--														<i class="fa fa-bars"></i>-->
                                <!--													</span>-->
                                <!--                                        <div class="form-group label-floating">-->
                                <!--                                            <label class="control-label">Password</label>-->
                                <!--                                            <input type="password" id="formPassword" value="nandang" class="form-control">-->
                                <!--                                        </div>-->
                                <!--                                    </div>-->
                                <div class="input-group">
													<span class="input-group-addon">
														<i class="fa fa-briefcase"></i>
													</span>
                                    <div class="form-group label-floating">
                                        <label class="control-label">Pekerjaan</label>
                                        <select class="form-control valid" id="formJobID" aria-invalid="false">
                                            <option disabled="" selected=""></option>
                                            <?php foreach ($dataJob AS $item){
                                                echo '<option value="'.$item['ID'].'">'.$item['Description'].'</option>';
                                            } ?>

                                            <option disabled>---------------------</option>
                                            <option value="0">Lain - lain</option>
                                        </select>
                                        <span class="material-input"></span>
                                    </div>
                                </div>

                                <div class="input-group hide" id="input-oth">
													<span class="input-group-addon">
														<i class="fa fa-level-up"></i>
													</span>
                                    <div class="form-group label-floating">
                                        <label class="control-label">Input Pekerjaan Lain</label>
                                        <input type="text" id="formJobOther" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" style="min-height: 100px;">
                                <div class="input-group">
													<span class="input-group-addon">
														<i class="fa fa-tags"></i>
													</span>
                                    <div class="form-group label-floating">
                                        <label class="control-label">Nama Proyek</label>
                                        <input type="text" id="formProjectName" class="form-control">
                                    </div>
                                </div>
                                <div class="input-group">
													<span class="input-group-addon">
														<i class="fa fa-map-marker"></i>
													</span>
                                    <div class="form-group label-floating">
                                        <label class="control-label">Lokasi Proyek</label>
                                        <input type="text" id="formLocation" class="form-control">
                                    </div>
                                </div>
                                <div class="input-group">
													<span class="input-group-addon">
														<i class="fa fa-window-restore"></i>
													</span>
                                    <div class="form-group label-floating">
                                        <label class="control-label">Luas Lahan</label>
                                        <input type="text" id="formLandArea" class="form-control">
                                    </div>
                                </div>
                                <div class="input-group">
													<span class="input-group-addon">
														<i class="fa fa-building"></i>
													</span>
                                    <div class="form-group label-floating">
                                        <label class="control-label">Luas Bangunan</label>
                                        <input type="text" id="formBuildingArea" class="form-control">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row">

                            <div class="col-sm-12" style="min-height: 100px;margin-top: 30px;">
                                <table class="table">
                                    <tr style="background: lightyellow;">
                                        <td style="width: 1%;">No</td>
                                        <td>
                                            <span class="label-q">Kriteria</span>
                                        </td>
                                        <td style="text-align: center;">
                                            Jawaban
                                        </td>
                                    </tr>
                                    <?php $no=1; foreach ($dataCriteria AS $item){ ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td>
                                                <span class="label-q"><?php echo $item['Description'] ?></span>
                                            </td>
                                            <td style="text-align: center;">
                                                <div class="checkbox" style="margin: 0px;">
                                                    <label>
                                                        <input type="checkbox" name="formC<?php echo $item['ID']; ?>" value="1">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>

                                    <?php } ?>
                                </table>
                            </div>

                            <div class="col-md-12 text-right">
                                <hr/>
                                <button class="btn btn-fill btn-danger" id="btnMulai">Kirim</button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>

    $(document).ready(function () {

    });


    $('#formJobID').change(function () {
        console.log('ok');
        var formJobID = $('#formJobID').val();

        if(formJobID!=0){
            $('#input-oth').addClass('hide');
        } else {
            $('#input-oth').removeClass('hide');
        }

    });

    $('#btnMulai').click(function () {
        // saveData();
        $('#modalMedium .modal-header,#modalMedium .modal-footer').addClass('hide');
        $('#modalMedium .modal-body').html('<div style="text-align:center ;">' +
            '<h3>Mulai tahap pengujian sekarang?</h3>' +
            '<button class="btn btn-success" id="btnYes">Ya, mulai</button> ' +
            '<button class="btn btn-default"  data-dismiss="modal">Tidak, nanti saja</button>' +
            '</div>');
        $('#modalMedium').modal({backdrop: 'static', keyboard: false});
    });

    $(document).on('click','#btnYes',function () {
        saveData();
    });


    function saveData() {

        $('#btnYes, button[data-dismiss=modal]').prop('disabled',true);

        var formName = $('#formName').val();
        var formPosition = $('#formPosition').val();
        var formEmail = $('#formEmail').val();
        var formPassword = $('#formPassword').val();
        var formJobID = $('#formJobID').val();
        var formJobOther = $('#formJobOther').val();

        var formProjectName = $('#formProjectName').val();
        var formLocation = $('#formLocation').val();

        var formLandArea = $('#formLandArea').val();
        var formBuildingArea = $('#formBuildingArea').val();

        var dataUser = {
            Name : formName,
            Position : formPosition,
            Email : formEmail,
            Password : formPassword,
            JobID : formJobID,
            JobOther : formJobOther,
            ProjectName : formProjectName,
            Location : formLocation,
            LandArea : formLandArea,
            BuildingArea : formBuildingArea,
            CreateAt : dateTimeNow()
        };

        var arrCriteria = JSON.parse('<?php echo json_encode($dataCriteria); ?>');

        var arrCr = [];
        if(arrCriteria.length>0){
            for(var i=0;i<arrCriteria.length;i++){
                var d = arrCriteria[i];
                var status = ($('input[type=checkbox][name=formC'+d.ID+']').is(':checked')) ? '1' : '0';

                var arr = {
                    EGID : d.ID,
                    Answer : status
                };
                arrCr.push(arr);
            }
        }

        var dataForm = {
            dataUser : dataUser,
            dataAnsw : arrCr
        };

        var url = base_url_js+'__insertDataUser';

        $.post(url,{dataForm:dataForm},function (result) {
            setTimeout(function () {

                var url2 = base_url_js+'ujian';
                $('#formPost').attr('action',url2);
                $('#formPostEmail').val(formEmail);
                $('#formPost').submit();

            },1000);
        });

        console.log(dataForm);

    }
</script>
