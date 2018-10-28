
<style>

    .thumb-question {
        border-radius: 0px;
        min-height: 100px;
    }

    .thumb-question hr {
        margin-bottom: 0px;
    }

    .thumb-question .row {
        margin: 10px;margin-top: 25px;
    }

    .thumb-question .row .col-md-1{
        text-align: center;
    }

    .thumb-question .row .col-md-1 button {
        margin-top: 15px;
    }



    .number {
        text-align: center;
        font-size: 21px;
        color: #505050;
        background: #f9f9f9;
        border: 3px solid #9E9E9E;
        border-radius: 25px;
    }
    .question {
        padding: 10px;
        border: 1px solid #ccc;
        background: lightyellow;
        margin-bottom: 10px;
    }
    .q_type1_range table tr td,.q_type1_range table tr th {
        /*border: 1px solid #ccc;*/
        text-align: center;
    }
    .radio .cr .cr-icon {
        margin-left: -1px;
    }

    .questionLabel {
        background: #4caf5040;
        border: 1px solid #ccc;
        border-bottom: none;
        padding: 10px;
        font-size: 20px;
    }
</style>

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="well">
            <select class="form-control" id="filterTitle"></select>
        </div>
    </div>
</div>

<div id="showQuestion"></div>


<script>
    $(document).ready(function () {
        getSelectOptionTitle('#filterTitle','');

        var loadFirst = setInterval(function () {
            var filterTitle = $('#filterTitle').val();
            if(filterTitle!='' && filterTitle!=null){
                loaddatQuestion();
                clearInterval(loadFirst);
            }
        },1000);
    });

    $('#filterTitle').change(function () {
        loaddatQuestion();
    });
    
    function loaddatQuestion() {

        var filterTitle = $('#filterTitle').val();
        if(filterTitle!='' && filterTitle!=null){
            var data = {
                action : 'readQuestion',
                IDTitle : filterTitle
            };
            var url = base_url_js+'api/crudQuestion';

            $.post(url,{dataForm : data},function (jsonResult){

                $('#showQuestion').empty();

                // console.log(jsonResult);
                if(jsonResult.length>0){

                    for(var i=0;i<jsonResult.length;i++){
                        var d = jsonResult[i];

                        $('#showQuestion').append('<div class="row">' +
                            '    <div class="col-md-12">' +
                            '        <div class="questionLabel">'+d.Code+'<button class="btn btn-sm btn-default pull-right btnDeleteLabel" data-idl="'+d.ID+'">Remove</button></div>' +
                            '<div class="thumbnail thumb-question">' +
                            '<div id="q_'+d.ID+'"></div>' +
                            '</div>' +
                            '    </div>' +
                            '</div>');

                        var no = 1;

                        for(var q=0;q<d.Detail.length;q++){

                            var d_q = d.Detail[q];

                            // Type 1
                            if(d_q.Type==1 || d_q.Type=='1'){
                                $('#q_'+d.ID).append('<div class="row">' +
                                    '                <div class="col-md-1">' +
                                    '                    <div class="number">' +
                                    '                        <span>'+no+'</span>' +
                                    '                    </div>' +
                                    '                       <span class="label label-default">'+d_q.Order+'</span>' +
                                    '                       <button class="btn btn-sm btn-danger btnDeleteQuestion" data-idq="'+d_q.ID+'"><i class="fa fa-trash"></i></button>' +
                                    '                </div>' +
                                    '                <div class="col-md-11">' +
                                    '                    <div class="question">'+d_q.Question+'</div>' +
                                    '                    <div class="row">' +
                                    '                        <div class="col-md-8"><div id="labelQuestion'+d_q.ID+'"></div></div>' +
                                    '                        <div class="col-md-4">' +
                                    '                            <div class="q_type1_range">' +
                                    '                                <table class="table table-bordered">' +
                                    '                                    <tr>' +
                                    '                                        <th style="width: 30%">Start</th>' +
                                    '                                        <th style="width: 30%">End</th>' +
                                    '                                        <th style="width: 30%">Point</th>' +
                                    '                                    </tr>' +
                                    '                                    <tbody id="labelQuestionRage'+d_q.ID+'"></tbody>' +
                                    '                                </table>' +
                                    '                            </div>' +
                                    '                        </div>' +
                                    '                    </div>' +
                                    '                </div>' +
                                    '                <div class="col-md-12">' +
                                    '                    <hr/>' +
                                    '                </div>' +
                                    '            </div>');

                                // Load Label
                                if(d_q.dataLabel.length>0){
                                    for(var p=0;p<d_q.dataLabel.length;p++){
                                        var d_q_l = d_q.dataLabel[p];
                                        $('#labelQuestion'+d_q.ID).append(d_q_l.Label+' (...)<br/>');
                                    }
                                }

                                // Load Range
                                if(d_q.dataRange.length>0){
                                    for(var pq=0;pq<d_q.dataRange.length;pq++){
                                        var dr = d_q.dataRange[pq];
                                        $('#labelQuestionRage'+d_q.ID).append('<tr>' +
                                            '<td>'+dr.Start+'</td>' +
                                            '<td>'+dr.End+'</td>' +
                                            '<td>'+dr.Point+'</td>' +
                                            '</tr>');
                                    }
                                }
                            }

                            // Type 2
                            else if(d_q.Type==2 || d_q.Type=='2'){
                                $('#q_'+d.ID).append('<div class="row">' +
                                    '                <div class="col-md-1">' +
                                    '                    <div class="number">' +
                                    '                        <span>'+no+'</span>' +
                                    '                    </div>' +
                                    '                       <span class="label label-default">'+d_q.Order+'</span>' +
                                    '                   <button class="btn btn-sm btn-danger btnDeleteQuestion" data-idq="'+d_q.ID+'"><i class="fa fa-trash"></i></button>' +
                                    '                </div>' +
                                    '                <div class="col-md-11">' +
                                    '                    <div class="question">'+d_q.Question+'</div>' +
                                    '                    <div class="row">' +
                                    '                        <div class="col-md-12">' +
                                    '                              <div id="question_typ2_label'+d_q.ID+'"></div>' +
                                    '                        </div>' +
                                    '                    </div>' +
                                    '                </div>' +
                                    '                <div class="col-md-12">' +
                                    '                    <hr/>' +
                                    '                </div>' +
                                    '            </div>');

                                if(d_q.dataLabel.length>0){
                                    for(var l=0;l<d_q.dataLabel.length;l++){
                                        var d_q_l_l = d_q.dataLabel[l];
                                        $('#question_typ2_label'+d_q.ID).append('<div class="radio">' +
                                            '                                <label>' +
                                            '                                    <input type="radio" name="qt_2'+d_q.ID+'" value="">' +
                                            '                                    <span class="cr"><i class="cr-icon glyphicon glyphicon-ok-sign"></i></span>' +
                                            '                               ' +d_q_l_l.Label+' <span class="label label-primary">Point : '+d_q_l_l.Point+'</span>'+
                                            '                               </label>' +
                                            '                            </div>');
                                    }
                                }
                            }

                            // Type 3
                            else if(d_q.Type==3 || d_q.Type=='3'){
                                $('#q_'+d.ID).append('<div class="row">' +
                                    '                <div class="col-md-1">' +
                                    '                    <div class="number">' +
                                    '                        <span>'+no+'</span>' +
                                    '                    </div>' +
                                    '                       <span class="label label-default">'+d_q.Order+'</span>' +
                                    '                    <button class="btn btn-sm btn-danger btnDeleteQuestion" data-idq="'+d_q.ID+'"><i class="fa fa-trash"></i></button>' +
                                    '                </div>' +
                                    '                <div class="col-md-10">' +
                                    '                    <div class="question">'+d_q.Question+'</div>' +
                                    '                </div>' +
                                    '                <div class="col-md-1">' +
                                    '                    <div class="checkbox">' +
                                    '                        <label style="font-size: 2em;padding-left:0px">' +
                                    '                            <input type="checkbox" value="" checked="">' +
                                    '                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>' +
                                    '                        </label>' +
                                    '                    </div><span class="label label-primary">Point : '+d_q.Point+'</span>' +
                                    '                </div>' +
                                    '                <div class="col-md-12">' +
                                    '                    <hr/>' +
                                    '                </div>' +
                                    '            </div>');
                            }

                            no += 1;
                        }

                    }
                }
            });
        }
    }

    $(document).on('click','.btnDeleteQuestion',function () {

        if(confirm('Are you sure to delete this data?')){

            var IDQ = $(this).attr('data-idq');

            $('.btnDeleteQuestion').prop('disabled',true);

            var data = {
              action : 'deleteQuestion',
              IDQ : IDQ
            };
            var url = base_url_js+'api/crudQuestion';
            $.post(url,{dataForm : data},function (result) {
                toastr.success('Data removed','Success');
                setTimeout(function () {
                    loaddatQuestion();
                },500);
            });
        }


    });

    $(document).on('click','.btnDeleteLabel',function () {

        if(confirm('Are you sure to delete this label? if you delete this label than all of the question will be deleted too!')){

            $('.btnDeleteLabel').prop('disabled',true);

            var IDLabel = $(this).attr('data-idl');
            var data = {
              action : 'deleteLableInQuestion',
              IDLabel : IDLabel
            };

            var url = base_url_js+'api/crudQuestion';
            $.post(url,{dataForm:data},function (result) {
                toastr.success('Label removed','Success');
                setTimeout(function () {
                    loaddatQuestion();
                },500);
            });
        }

    });


</script>