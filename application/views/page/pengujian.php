<style>
    /* Note: Try to remove the following lines to see the effect of CSS positioning */
    .affix {
        top: 20px;
        z-index: 9999 !important;
    }
</style>



<style>
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
</style>

<!--<pre>-->
<!--    --><?php //print_r($dataQuestion); ?>
<!--</pre>-->

<?php

$Title = $dataQuestion['Title'][0];
$dataLabel = $dataQuestion['Label'];

?>

<textarea id="viewPerpu" class="hide"><?php echo $Title['Perpu'][0]['Perpu']; ?></textarea>

<div class="image-container set-full-height">

    <div class="container">
        <div class="row">

            <div class="col-md-8">
                <hr/>
                <?php foreach ($dataLabel AS $item) {
                if(count($item['DetailQustion'])>0) {
                    ?>
                <div class="panel panel-success">
                    <div class="panel-heading" style="background: #d4e9bc;border: 1px solid green;border-top: none;">
                        <h4 class="panel-title">
                           <b> <?php echo $item['Code']; ?></b>
                        </h4>
                        <h5 style="margin-bottom: 0px;"><?php echo $item['Label']; ?></h5>
                    </div>
                    <div class="panel-body" style="border: 1px solid green;">
                        <div class="tab-question">

                            <?php $no = 1; foreach ($item['DetailQustion'] AS $itemQuestion){ ?>
                                <!-- Type 1 -->
                                <div class="row">
                                    <div class="col-xs-1" style="text-align: center;">
                                        <div class="number"><?php echo $no; ?></div>
                                    </div>
                                    <div class="col-xs-11">
                                        <div class="question"><?php echo $itemQuestion['Question']; ?></div>
                                        <div class="q-type1">
                                            <?php
                                            if($itemQuestion['Type']==1 || $itemQuestion['Type']=='1'){
                                                $dataLabel = $itemQuestion['dataLabel'];
                                                for ($l=0;$l<count($dataLabel);$l++){ ?>
                                                    <div class="checkbox">
                                                        <label style="font-size: 1em">
                                                            <input type="checkbox" value="">
                                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                            <?php echo $dataLabel[$l]['Label']; ?>
                                                        </label>
                                                    </div>
                                                <?php }
                                            } else if($itemQuestion['Type']==2 || $itemQuestion['Type']=='2'){ ?>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="o1" value="">
                                                        <span class="cr"><i class="cr-icon glyphicon glyphicon-ok-sign"></i></span>
                                                        Option one is this and that — be sure to include why it's great
                                                    </label>
                                                </div>
                                            <?php }
                                            ?>
                                        </div>
                                        <!--                                                <hr/>-->
                                    </div>
                                </div>
                                <?php $no++; } ?>


                        </div>
                    </div>
                </div>

                <?php } } ?>


            </div>
        </div>
    </div>

</div>

<div class="container">
    <h1>CheckboxRadio (no JS)</h1>
    <hr/>

    <p>This snippet allows you create nice animated checkboxes and radios without JavaScript. <br/>Just put <code><span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span></code> right after your checkbox or radio.</p>
    <p>Other markup was copied from <a href="http://getbootstrap.com/css/#forms" target="_blank">Bootstrap example</a>.</p>
    <h2>Checkboxes</h2>
    <hr/>

    <h3>Default example</h3>

    <div class="col-sm-12">
        <div class="checkbox">
            <label>
                <input type="checkbox" value="">
                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                Option one is this and that — be sure to include why it's great
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="" checked>
                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                Option two is checked by default
            </label>
        </div>
        <div class="checkbox disabled">
            <label>
                <input type="checkbox" value="" disabled>
                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                Option three is disabled
            </label>
        </div>
    </div>

    <h3>Default example (other icon)</h3>

    <div class="col-sm-12">
        <div class="checkbox">
            <label>
                <input type="checkbox" value="">
                <span class="cr"><i class="cr-icon glyphicon glyphicon-arrow-right"></i></span>
                Option one is this and that — be sure to include why it's great
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="" checked>
                <span class="cr"><i class="cr-icon glyphicon glyphicon-arrow-right"></i></span>
                Option two is checked by default
            </label>
        </div>
        <div class="checkbox disabled">
            <label>
                <input type="checkbox" value="" disabled>
                <span class="cr"><i class="cr-icon glyphicon glyphicon-arrow-right"></i></span>
                Option three is disabled
            </label>
        </div>
    </div>

    <h3>Font awesome example</h3>

    <div class="col-sm-12">
        <div class="checkbox">
            <label>
                <input type="checkbox" value="">
                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                Option one is this and that — be sure to include why it's great
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="" checked>
                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                Option two is checked by default
            </label>
        </div>
        <div class="checkbox disabled">
            <label>
                <input type="checkbox" value="" disabled>
                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                Option three is disabled
            </label>
        </div>
    </div>

    <h3>Font awesome example (other icon)<br/><small>Works best with square icons =)</small></h3>

    <div class="col-sm-12">
        <div class="checkbox">
            <label>
                <input type="checkbox" value="">
                <span class="cr"><i class="cr-icon fa fa-rocket"></i></span>
                Option one is this and that — be sure to include why it's great
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="" checked>
                <span class="cr"><i class="cr-icon fa fa-rocket"></i></span>
                Option two is checked by default
            </label>
        </div>
        <div class="checkbox disabled">
            <label>
                <input type="checkbox" value="" disabled>
                <span class="cr"><i class="cr-icon fa fa-rocket"></i></span>
                Option three is disabled
            </label>
        </div>
    </div>

    <h3>Any size you want depending on label font-size</h3>

    <div class="col-sm-12">
        <div class="checkbox">
            <label style="font-size: 2.5em">
                <input type="checkbox" value="" checked>
                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                Huge
            </label>
        </div>
        <div class="checkbox">
            <label style="font-size: 2em">
                <input type="checkbox" value="" checked>
                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                Big
            </label>
        </div>
        <div class="checkbox">
            <label style="font-size: 1.5em">
                <input type="checkbox" value="" checked>
                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                Bigger
            </label>
        </div>
        <div class="checkbox">
            <label style="font-size: 1em">
                <input type="checkbox" value="" checked>
                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                Default
            </label>
        </div>
        <div class="checkbox">
            <label style="font-size: .8em">
                <input type="checkbox" value="" checked>
                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                Smaller
            </label>
        </div>
        <div class="checkbox">
            <label style="font-size: .5em">
                <input type="checkbox" value="" checked>
                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                Small
            </label>
        </div>
    </div>

    <h2>Radio</h2>
    <hr/>

    <h3>Default example</h3>

    <div class="col-sm-12">
        <div class="radio">
            <label>
                <input type="radio" name="o1" value="">
                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok-sign"></i></span>
                Option one is this and that — be sure to include why it's great
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="o1" value="" checked>
                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok-sign"></i></span>
                Option two is checked by default
            </label>
        </div>
        <div class="radio disabled">
            <label>
                <input type="radio" name="o1" value="" disabled>
                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok-sign"></i></span>
                Option three is disabled
            </label>
        </div>
    </div>

    <h3>Default example (other icon)</h3>

    <div class="col-sm-12">
        <div class="radio">
            <label>
                <input type="radio" name="o2" value="">
                <span class="cr"><i class="cr-icon glyphicon glyphicon-arrow-right"></i></span>
                Option one is this and that — be sure to include why it's great
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="o2" value="" checked>
                <span class="cr"><i class="cr-icon glyphicon glyphicon-arrow-right"></i></span>
                Option two is checked by default
            </label>
        </div>
        <div class="radio disabled">
            <label>
                <input type="radio" name="o2" value="" disabled>
                <span class="cr"><i class="cr-icon glyphicon glyphicon-arrow-right"></i></span>
                Option three is disabled
            </label>
        </div>
    </div>

    <h3>Font awesome example</h3>

    <div class="col-sm-12">
        <div class="radio">
            <label>
                <input type="radio" name="o3" value="">
                <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                Option one is this and that — be sure to include why it's great
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="o3" value="" checked>
                <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                Option two is checked by default
            </label>
        </div>
        <div class="radio disabled">
            <label>
                <input type="radio" name="o3" value="" disabled>
                <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                Option three is disabled
            </label>
        </div>
    </div>

    <h3>Font awesome example (other icon)<br/><small>Works best with square icons =)</small></h3>

    <div class="col-sm-12">
        <div class="radio">
            <label>
                <input type="radio" name="o4" value="">
                <span class="cr"><i class="cr-icon fa fa-star"></i></span>
                Option one is this and that — be sure to include why it's great
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="o4" value="" checked>
                <span class="cr"><i class="cr-icon fa fa-star"></i></span>
                Option two is checked by default
            </label>
        </div>
        <div class="radio disabled">
            <label>
                <input type="radio" name="o4" value="" disabled>
                <span class="cr"><i class="cr-icon fa fa-star"></i></span>
                Option three is disabled
            </label>
        </div>
    </div>

    <h3>Any size you want depending on label font-size</h3>

    <div class="col-sm-12">
        <div class="radio">
            <label style="font-size: 2.5em">
                <input type="radio" name="o5" value="" checked>
                <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                Huge
            </label>
        </div>
        <div class="radio">
            <label style="font-size: 2em">
                <input type="radio" name="o5" value="">
                <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                Big
            </label>
        </div>
        <div class="radio">
            <label style="font-size: 1.5em">
                <input type="radio" name="o5" value="">
                <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                Bigger
            </label>
        </div>
        <div class="radio">
            <label style="font-size: 1em">
                <input type="radio" name="o5" value="">
                <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                Default
            </label>
        </div>
        <div class="radio">
            <label style="font-size: .8em">
                <input type="radio" name="o5" value="">
                <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                Smaller
            </label>
        </div>
        <div class="radio">
            <label style="font-size: .5em">
                <input type="radio" name="o5" value="">
                <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                Small
            </label>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {

        var loadModal = setInterval(function () {
            var viewPerpu = $('#viewPerpu').val();
            if(viewPerpu!='' && viewPerpu!=null){
                $('#modalLarge #myModalLabel').html('PERPU');
                $('#modalLarge .modal-body').html(viewPerpu);
                $('#modalLarge .modal-footer').addClass('hide');
                $('#modalLarge').modal('show');
                clearInterval(loadModal);
            }
        },1000);


    });
</script>

<div class="modal fade bs-example-modal-lg" id="modalLarge" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
