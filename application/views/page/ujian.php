<!--<pre>-->
<?php //print_r($detailTitle); ?>
<!--</pre>-->

<style>
    #tableTitle tr td {
        font-size: 12px;
        text-align: center;
        background: #607d8b14;
    }
    #tableTitle tr td.td-active {
        background: #009688;
        color: #FFFFFF;
    }
    .custom-header {
        background: #d4e9bc;
        padding: 10px 0 10px !important;
        border: 1px solid green;
    }

    .tab-question {
        padding-top: 0px !important;
        min-height : 10px !important;

    }
    .tab-question .row {

        border-top: none;
        border-bottom: none;
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .tab-question .col-xs-1{
        text-align: center;
    }

    .number {
        font-size: 18px;
        font-weight: bold;
        border: 1px solid green;
        background: #d4e9bc47;
        /*border-radius: -4px;*/
        color: green;
        padding: 5px 2px 5px 1px;
    }
    .question {
        min-height: 10px;
        background: lightyellow;
        border: 1px solid #cccccc;
        padding: 10px;
        font-size: 14px;
    }
    .q-type1 {
        margin-top: 10px;
        font-size: 14px;
    }

    input[type=checkbox]
    {
        /* Double-sized Checkboxes */
        -ms-transform: scale(1.5); /* IE */
        -moz-transform: scale(1.5); /* FF */
        -webkit-transform: scale(1.5); /* Safari and Chrome */
        -o-transform: scale(1.5); /* Opera */
        padding: 10px;
    }

    #divLoadQuestion .panel-heading {
        background: #d4e9bc;
        border: 1px solid green;
    }
    #divLoadQuestion .panel-heading h5 {
        margin-bottom: 0px;
    }

    #divLoadQuestion .panel-body{
        border: 1px solid green;
        border-top: none;
    }
    #btnNextQuestion {
        line-height:2;
        padding-top:3px;
        font-weight: bold;
    }
    .radio .cr .cr-icon {
        margin-left: -1px;
    }
    #bgQuestion {
        /*background-image: url(http://localhost:8080/f/assets/images/bg/wizard-book.jpg);*/
        /*padding-bottom: 50px;*/
        /*height: auto;*/
        /*background-attachment: fixed;*/
    }
</style>


<div id="bgQuestion">
    <div id="divLoadNav"></div>
    <input id="formIDTitle" value="<?php echo $dataTitle['ID']; ?>" class="hide" readonly>
    <input id="formTotalTitle" value="0" class="hide" readonly>

    <div class="container" style="margin-bottom: 20px;">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <div id="divLoadQuestion"></div>
                <div class="row">
                    <div class="col-md-12" style="text-align: right;">
                        <button class="btn btn-success" id="btnNextQuestion" disabled>Simpan dan lanjutkan <i class="fa fa-angle-double-right fa-2x pull-right" style="margin-left: 15px;"></i></button>
                    </div>
                </div>
            </div>

        </div>


    </div>
</div>


<script>
    $(document).ready(function () {

        var firsLoad = setInterval(function () {
            var formIDTitle = $('#formIDTitle').val();
            if(formIDTitle!='' && formIDTitle!=null){
                loadMenuBar();
                loadQuestion();
                clearInterval(firsLoad);
            }
        },1000);

    });

    $('#btnNextQuestion').click(function () {

        $('#globalModalSmall .modal-header,#globalModalSmall .modal-footer').addClass('hide');
        $('#globalModalSmall .modal-body').html('<div style="text-align: center;"><p>Jika anda melanjutkan tahap maka anda tidak dapat kembali ke tahap ini.' +
            'Apakah anda akan tetap melnjutkan ke step berikutnya ?</p><hr/>' +
            '<button class="btn btn-primary" id="btnNextYes">Ya, lanjut</button> <button class="btn btn-default" data-dismiss="modal">Tidak</button></div>');
        $('#globalModalSmall').modal({backdrop: 'static', keyboard: false});

    });

    $(document).on('click','#btnNextYes',function () {

        $('button[data-dismiss=modal]').prop('disabled',true);

        var formIDTitle = $('#formIDTitle').val();
        var formTotalTitle = $('#formTotalTitle').val();

        if(parseInt(formIDTitle)==parseInt(formTotalTitle)){
            $('#btnNextQuestion').html('Selesai');
        } else {

            $('#btnNextQuestion').prop('disabled',true);

            var idNext = parseInt(formIDTitle) + 1;
            $('#formIDTitle').val(idNext);
            loadMenuBar();
            loadQuestion();

            if(parseInt(formTotalTitle)==idNext){
                $('#btnNextQuestion').html('Selesai');
            }
        }

        setTimeout(function () {
            $('#globalModalSmall').modal('hide');
        },1000);
    });


    function loadMenuBar() {

        var formIDTitle = $('#formIDTitle').val();
        if(formIDTitle!='' && formIDTitle!=null){

            $("html, body").animate({scrollTop: 0}, 1000);

            var data = {
                action : 'readTitleQuestion'
            };
            var url = base_url_js+'api/crudQuestion';
            $.post(url,{dataForm : data},function (jsonResult) {

                $('#divLoadNav').html('');
                console.log(jsonResult);

                $('#formTotalTitle').val(jsonResult.length);

                if(jsonResult.length>0){

                    var totalData = jsonResult.length;
                    var w = 100/totalData;

                    $('#divLoadNav').html('<table class="table table-bordered" id="tableTitle">'+
                        '    <tr id="trData">'+
                        '    </tr>'+
                        '</table>');

                    for(var i=0;i<jsonResult.length;i++){
                        var d = jsonResult[i];
                        var cl = (formIDTitle==d.ID) ? 'td-active' : '';
                        $('#trData').append('<td class="'+cl+'" style="width: '+w+'%;">'+d.Title+'</td>');

                        if(formIDTitle==d.ID){

                            $('button[data-dismiss=modal]').prop('disabled',false);

                            $('#globalModalLarge .modal-header,#globalModalLarge .modal-footer').addClass('hide');
                            $('#globalModalLarge .modal-body').html('<div style="text-align: center;">'+d.Perpu+'<hr/><button class="btn btn-default" data-dismiss="modal">Tutup</button></div>');
                            $('#globalModalLarge').modal('show');
                            // $('#divPerpus').html(d.Perpu);
                        }
                    }

                    $('#btnNextQuestion').prop('disabled',false);

                }

            });

        }

    }

    function loadQuestion() {

        var formIDTitle = $('#formIDTitle').val();
        if(formIDTitle!='' && formIDTitle!=null){

            var data = {
                action : 'readQuestion',
                IDTitle : formIDTitle
            };

            var url = base_url_js+'api/crudQuestion';

            $('#divLoadQuestion').html('');
            $.post(url,{dataForm : data},function (jsonResult){
                console.log(jsonResult);
                if(jsonResult.length>0){

                    for(var i=0;i<jsonResult.length;i++){
                        var d = jsonResult[i];

                        if(d.Detail.length>0){

                            $('#divLoadQuestion').append('<div class="panel panel-success">' +
                                '                <div class="panel-heading">' +
                                '                    <h4 class="panel-title">' +
                                '                        <b>'+d.Code+'</b> | <b>'+d.Label+'</b>' +
                                '                    </h4>' +
                                '                    <h5>'+d.Purpose+'</h5>' +
                                '                </div>' +
                                '                <div class="panel-body">' +
                                '                    <div class="tab-question" id="question'+d.ID+'">' +
                                '                    </div>' +
                                '                </div>' +
                                '            </div>');

                            var no =1;
                            for(var p=0;p<d.Detail.length;p++){
                                var d_s = d.Detail[p];

                                if(d_s.Type==1 || d_s.Type=='1'){
                                    // Type 1
                                    $('#question'+d.ID).append('<div class="row">' +
                                        '                            <div class="col-xs-1">' +
                                        '                                <div class="number">'+no+'</div>' +
                                        '                            </div>' +
                                        '                            <div class="col-xs-11">' +
                                        '                                <div class="question">'+d_s.Question+'</div>' +
                                        '                                <div class="q-type1" id="loadTypeQ1_'+d_s.ID+'">' +
                                        '                                </div>' +
                                        '                            </div>' +
                                        '                        </div>');

                                    // Load Jawaban
                                    if(d_s.dataLabel.length>0){
                                        for(var q=0;q<d_s.dataLabel.length;q++){
                                            var d_s_q = d_s.dataLabel[q];
                                            $('#loadTypeQ1_'+d_s.ID).append('<div class="checkbox">' +
                                                '                                 <label style="font-size: 1em">' +
                                                '                                     <input type="checkbox" value="">' +
                                                '                                     <span class="cr"><i class="cr-icon fa fa-check"></i></span>'+d_s_q.Label+'' +
                                                '                                 </label>' +
                                                '                             </div>');
                                        }
                                    }

                                }
                                else if(d_s.Type==2 || d_s.Type=='2'){
                                    // Type 2
                                    $('#question'+d.ID).append('<div class="row">' +
                                        '                            <div class="col-xs-1">' +
                                        '                                <div class="number">'+no+'</div>' +
                                        '                            </div>' +
                                        '                            <div class="col-xs-11">' +
                                        '                                <div class="question">'+d_s.Question+'</div>' +
                                        '                                <div class="q-type2" id="loadTypeQ2_'+d_s.ID+'">' +
                                        '                                </div>' +
                                        '                            </div>' +
                                        '                        </div>');

                                    // Load Jawaban
                                    if(d_s.dataLabel.length>0){
                                        for(var q=0;q<d_s.dataLabel.length;q++){
                                            var d_s_q = d_s.dataLabel[q];
                                            $('#loadTypeQ2_'+d_s.ID).append('<div class="radio">' +
                                                '                               <label>' +
                                                '                                   <input type="radio" name="o1" value="">' +
                                                '                                   <span class="cr"><i class="cr-icon glyphicon glyphicon-ok-sign"></i></span> '+d_s_q.Label+' ' +
                                                '                               </label>' +
                                                '                           </div>');

                                            if(q == (d_s.dataLabel.length - 1)){
                                                $('#loadTypeQ2_'+d_s.ID).append('<div class="radio">' +
                                                    '                               <label>' +
                                                    '                                   <input type="radio" name="o1" value="">' +
                                                    '                                   <span class="cr"><i class="cr-icon glyphicon glyphicon-ok-sign"></i></span> Tidak memilih' +
                                                    '                               </label>' +
                                                    '                           </div>');

                                            }
                                        }
                                    }
                                }
                                else if(d_s.Type==3 || d_s.Type=='3'){
                                    $('#question'+d.ID).append('<div class="row">' +
                                        '                            <div class="col-xs-1">' +
                                        '                                <div class="number">'+no+'</div>' +
                                        '                            </div>' +
                                        '                            <div class="col-xs-10">' +
                                        '                                <div class="question">'+d_s.Question+'</div>' +
                                        '                                <div class="q-type2" id="loadTypeQ3_'+d_s.ID+'">' +
                                        '                                </div>' +
                                        '                            </div>' +
                                        '                            <div class="col-xs-1" style="text-align: center;">' +
                                        '<div class="checkbox">' +
                                        '    <label style="font-size: 2em;padding-left:0px">' +
                                        '        <input type="checkbox" value="" checked="">' +
                                        '        <span class="cr"><i class="cr-icon fa fa-check"></i></span>' +
                                        '    </label>' +
                                        '</div>' +
                                        '</div>' +
                                        '                        </div>');
                                }

                                no += 1;
                            }
                        }
                    }
                }
            });

        }

    }
</script>
