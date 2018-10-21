
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-bars margin-right"></i> Head Question</h3>
    </div>
    <div class="panel-body" style="min-height: 100px;">
        <div class="col-md-8 col-md-offset-2">
            <table class="table" style="margin-bottom: 0px;">
                <tr>
                    <td style="width: 30%;">Title</td>
                    <td style="width: 1%;">:</td>
                    <td>
                        <select class="form-control" id="filterTitle"></select>
                    </td>
                </tr>
                <tr>
                    <td>Label</td>
                    <td>:</td>
                    <td>
                        <select class="form-control" id="filterLabel"></select>
                    </td>
                </tr>
                <tr>
                    <td>Order</td>
                    <td>:</td>
                    <td>
                        <input class="form-control" id="formOrder" style="max-width: 150px;">
                    </td>
                </tr>

                <tr>
                    <td>Question Type</td>
                    <td>:</td>
                    <td>
                        <select class="form-control" style="max-width: 150px;" id="filterType">
                            <option value="3">3</option>
                            <option value="2">2</option>
                            <option value="1">1</option>
                        </select>
                    </td>
                </tr>
            </table>

        </div>
    </div>
</div>

<!-- Type 3 -->
<div class="panel panel-primary panel-type" id="type3" >
    <div class="panel-body">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <table class="table" style="margin-bottom: 0px;">
                    <tr>
                        <td style="width: 30%;">Question</td>
                        <td style="width: 1%;">:</td>
                        <td>
                            <textarea class="form-control" id="formType3Question" rows="4"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Point</td>
                        <td>:</td>
                        <td>
                            <input class="form-control" type="number" id="formType3Point" style="max-width: 150px;">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" style="text-align: right;">
                            <button class="btn btn-success" id="btnSubmitType3"><i class="fa fa-paper-plane margin-right"></i> Save</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Type 2 -->
<div class="panel panel-primary panel-type" id="type2" >
    <div class="panel-body">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <table class="table" style="margin-bottom: 0px;">
                    <tr>
                        <td style="width: 30%;">Question</td>
                        <td style="width: 1%;">:</td>
                        <td>
                            <textarea class="form-control" id="formType2Question" rows="4"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Multiple |
                            <a href="javascript:void(0);" id="addType2"><i class="fa fa-plus-circle"></i></a> -
                            <a href="javascript:void(0);" id="delType2"><i class="fa fa-minus-circle"></i></a>
                        </td>
                        <td>:</td>
                        <td>
                            <div class="row" style="margin-bottom: 15px;">
                                <div class="col-xs-7">
                                    <span>Label</span>
                                    <input class="form-control" id="formType2Label1">
                                </div>
                                <div class="col-xs-5">
                                    <span>Point</span>
                                    <input class="form-control" id="formType2Point1" type="number">
                                </div>
                            </div>
                            <div id="divType2"></div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" style="text-align: right;">
                            <button class="btn btn-success" data-fm="1" id="btnSubmitType2"><i class="fa fa-paper-plane margin-right"></i> Save</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Type 1 -->
<div class="panel panel-primary panel-type" id="type1">
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <span>Question Head</span>
                    <textarea class="form-control" id="formType1Question" rows="4"></textarea>
                </div>
                <div style="text-align: center;">
                    <a href="javasript:void(0);" id="btnAddType1Label"><i class="fa fa-plus-circle"></i></a> -
                    <a href="javasript:void(0);" id="btnDelType1Label"><i class="fa fa-minus-circle"></i></a>
                </div>
                <div class="form-group" id="Type1Label1">
                    <span>Label 1</span>
                    <input id="formType1Label1" class="form-control">
                </div>
                <div id="divType11Label"></div>
            </div>
            <div class="col-md-6" style="border-left: 1px solid #ccc;">
                <div style="text-align: center;">
                    <a href="javasript:void(0);" id="btnAddType1Range"><i class="fa fa-plus-circle"></i></a> -
                    <a href="javasript:void(0);" id="btnDelType1Range"><i class="fa fa-minus-circle"></i></a>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <span>Start</span>
                            <input id="formType1RangeStart1" type="number" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <span>End</span>
                            <input id="formType1RangeEnd1" type="number" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <span>Point</span>
                            <input id="formType1RangePoint1" type="number" class="form-control"/>
                        </div>
                    </div>
                </div>
                <div id="divType1Range"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="text-align: right;">
                <button data-label="1" data-range="1" id="btnSubmitType1" class="btn btn-success"><i class="fa fa-paper-plane margin-right"></i> Save</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        getSelectOptionTitle('#filterTitle','');

        var loadFirst = setInterval(function () {
            var filterTitle = $('#filterTitle').val();
            var filterType = $('#filterType').val();

            if(filterTitle!='' && filterTitle!=null
                && filterType!='' && filterType!=null){
                loadLabel();
                loadQuestionType();
                clearInterval(loadFirst);
            }
        },1000);


    });

    $(document).on('change','#filterTitle',function () {
        loadLabel();
    });

    function loadLabel() {
        var filterTitle = $('#filterTitle').val();

        if(filterTitle!='' && filterTitle!=null){
            var url = base_url_js+'api/crudQuestion';
            var dataForm = {
                action : 'loadLabel',
                IDTitle : filterTitle
            };
            $.post(url,{dataForm:dataForm},function (jsonResult) {
                $('#filterLabel').empty();
                if(jsonResult.length){
                  for(var i=0;i<jsonResult.length;i++){
                      var d = jsonResult[i];
                      $('#filterLabel').append('<option value="'+d.ID+'" ">'+d.Code+' - '+d.Label+'</option>');
                  }
                }
            });
        }


    }

    $(document).on('change','#filterType',function () {
        loadQuestionType();
    });

    function loadQuestionType() {
        $('.panel-type').addClass('hide');
        var filterType = $('#filterType').val();

        if(filterType!='' && filterType!=null){
            $('#type'+filterType).removeClass('hide');
        }

    }
</script>

<!-- TYPE 1 -->
<script>

    // Control Label
    $(document).on('click','#btnAddType1Label',function () {
        var n_label = parseInt($('#btnSubmitType1').attr('data-label'));
        var f = n_label + 1;

        $('#divType11Label').append('<div class="form-group" id="Type1Label'+f+'">' +
            '                    <span>Label '+f+'</span>' +
            '                    <input id="formType1Label'+f+'" class="form-control">' +
            '                </div>');

        $('#btnSubmitType1').attr('data-label',f);
    });

    $(document).on('click','#btnDelType1Label',function () {
        var n_label = parseInt($('#btnSubmitType1').attr('data-label'));
        if(n_label>1){
            $('#Type1Label'+n_label).remove();
            $('#btnSubmitType1').attr('data-label',(n_label-1));
        } else {
            toastr.info('Minumum label 1','Info');
        }
    });

    // Control Range
    $(document).on('click','#btnAddType1Range',function () {
        var n_range = parseInt($('#btnSubmitType1').attr('data-range'));
        var f = n_range + 1;
        $('#divType1Range').append('<div class="row" id="dvRange'+f+'">' +
            '                    <div class="col-md-4">' +
            '                        <div class="form-group">' +
            '                            <span>Start</span>' +
            '                            <input id="formType1RangeStart'+f+'" class="form-control"/>' +
            '                        </div>' +
            '                    </div>' +
            '                    <div class="col-md-4">' +
            '                        <div class="form-group">' +
            '                            <span>End</span>' +
            '                            <input id="formType1RangeEnd'+f+'" class="form-control"/>' +
            '                        </div>' +
            '                    </div>' +
            '                    <div class="col-md-4">' +
            '                        <div class="form-group">' +
            '                            <span>Point</span>' +
            '                            <input id="formType1RangePoint'+f+'" class="form-control"/>' +
            '                        </div>' +
            '                    </div>' +
            '                </div>');
        $('#btnSubmitType1').attr('data-range',f);
    });
    $(document).on('click','#btnDelType1Range',function () {
        var n_range = parseInt($('#btnSubmitType1').attr('data-range'));
        if(n_range>1){
            $('#dvRange'+n_range).remove();
            $('#btnSubmitType1').attr('data-range',(n_range-1))
        } else {
            toastr.info('Minimum range 1','Info');
        }
    });

    // Submin
    $(document).on('click','#btnSubmitType1',function () {

        $('#btnSubmitType1').prop('disabled',true);

        var filterTitle = $('#filterTitle').val();
        var filterLabel = $('#filterLabel').val();
        var formOrder = $('#formOrder').val();

        var formType1Question = $('#formType1Question').val().trim();

        var n_label = $(this).attr('data-label');
        var n_range = $(this).attr('data-range');

        var ArrLabel = [];
        for(var i=1;i<=n_label;i++){
            var ar = {
                Label : $('#formType1Label'+i).val().trim()
            };
            ArrLabel.push(ar);
        }

        // === Range
        var ArrRange = [];
        for(var r=1;r<=n_range;r++){
            var arr = {
              Start : $('#formType1RangeStart'+r).val().trim(),
              End : $('#formType1RangeEnd'+r).val().trim(),
              Point : $('#formType1RangePoint'+r).val()
            };
            ArrRange.push(arr);
        }

        var data = {
          action : 'addQType1',
            dataInsert : {
                IDTitle : filterTitle,
                IDLabel : filterLabel,
                Order : formOrder,
                Question : formType1Question.trim(),
                Type : '1'
            },
            ArrLabel : ArrLabel,
            ArrRange : ArrRange
        };
        var url = base_url_js+'api/crudQuestion';
        $.post(url,{dataForm:data},function (result) {
            toastr.success('Data saved','Success');
            setTimeout(function () {
                $('#btnSubmitType1').prop('disabled',false);
                window.location.href = '';
            },500);
        });
    });
</script>

<!-- TYPE 3 -->
<script>
    $(document).on('click','#btnSubmitType3',function () {
        var filterTitle = $('#filterTitle').val();
        var filterLabel = $('#filterLabel').val();
        var formOrder = $('#formOrder').val();

        var formType3Question = $('#formType3Question').val();
        var formType3Point = $('#formType3Point').val();

        var data = {
            action : 'addQType3',
            dataInsert : {
                IDTitle : filterTitle,
                IDLabel : filterLabel,
                Order : formOrder,
                Question : formType3Question.trim(),
                Type : '3',
                Point : formType3Point
            }
        };

        var url = base_url_js+'api/crudQuestion';

        $.post(url,{dataForm:data},function (result) {
            toastr.success('Data saved','Success');
            setTimeout(function () {
                window.location.href="";
            },1000);
        });

    });
</script>

<!-- TYPE 2 -->
<script>

    $(document).on('click','#addType2',function () {
        var f = $('#btnSubmitType2').attr('data-fm');
        var n = parseInt(f) + 1;
        $('#divType2').append('<div class="row" style="margin-bottom: 15px;" id="idT2'+n+'">' +
            '                                <div class="col-xs-7">' +
            '                                    <span>Label</span>' +
            '                                    <input class="form-control" id="formType2Label'+n+'">' +
            '                                </div>' +
            '                                <div class="col-xs-5">' +
            '                                    <span>Point</span>' +
            '                                    <input class="form-control" id="formType2Point'+n+'">' +
            '                                </div>' +
            '                            </div>');

        $('#btnSubmitType2').attr('data-fm',n);
    });

    $(document).on('click','#delType2',function () {
        var f = parseInt($('#btnSubmitType2').attr('data-fm'));
        if(f>1){
            $('#idT2'+f).remove();
            var n = f - 1;
            $('#btnSubmitType2').attr('data-fm',n);
        } else {
            toastr.info('Minimum multyple is one','Info');
        }
    });

    // Saving question
    $(document).on('click','#btnSubmitType2',function () {

        $('#btnSubmitType2').prop('disabled',true);

        var filterTitle = $('#filterTitle').val();
        var filterLabel = $('#filterLabel').val();
        var formOrder = $('#formOrder').val();
        
        
        var l = parseInt($(this).attr('data-fm'));

        var formType2Question = $('#formType2Question').val();

        var ArrMulty = [];
        for(var p=1;p<=l;p++){
            var arr = {
                Label : $('#formType2Label'+p).val().trim(),
                Point : $('#formType2Point'+p).val()
            }
            ArrMulty.push(arr);
        }
        
        var data = {
            action : 'addQType2',
            dataInsert : {
                IDTitle : filterTitle,
                IDLabel : filterLabel,
                Order : formOrder,
                Question : formType2Question.trim(),
                Type : '2'
            },
            ArrMulty : ArrMulty
        };

        var url = base_url_js+'api/crudQuestion';
        $.post(url,{dataForm:data},function (result) {
            toastr.success('Data saved','Success');
            setTimeout(function () {
                $('#btnSubmitType2').prop('disabled',false);
                window.location.href = '';
            },500);
        });
    });

</script>


<!-- FILTER TYPE -->
<script>

</script>