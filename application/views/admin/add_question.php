

<div class="thumbnail">
    <ul class="nav nav-pills">
        <li role="presentation" class="active"><a href="<?php echo base_url('admin/add-question'); ?>">Question</a></li>
        <li role="presentation"><a href="<?php echo base_url('admin/title-label'); ?>">Title & Label</a></li>
    </ul>
</div>


<div class="panel panel-default">
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
                        <input class="form-control" style="max-width: 150px;">
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
<div class="thumbnail" style="min-height: 100px;padding: 10px;padding-top: 20px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table class="table" style="margin-bottom: 0px;">
                <tr>
                    <td style="width: 30%;">Question</td>
                    <td style="width: 1%;">:</td>
                    <td>
                        <textarea class="form-control" rows="4"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Point</td>
                    <td>:</td>
                    <td>
                        <input class="form-control" style="max-width: 150px;">
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: right;">
                        <button class="btn btn-success"><i class="fa fa-paper-plane margin-right"></i> Save</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        getSelectOptionTitle('#filterTitle','');

        var loadFirst = setInterval(function () {
            var filterTitle = $('#filterTitle').val();

            if(filterTitle!='' && filterTitle!=null){
                loadLabel();
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
                console.log(jsonResult);
                $('#filterLabel').empty();
                if(jsonResult.length){
                  for(var i=0;i<jsonResult.length;i++){
                      var d = jsonResult[i];
                      $('#filterLabel').append('<option>'+d.Code+' - '+d.Label+'</option>');
                  }
                }
            });
        }


    }
</script>