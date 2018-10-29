
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
        border: 1px solid green;
        border-top: none;
        border-bottom: none;
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .number {
        font-size: 29px;
        font-weight: bold;
        border: 1px solid green;
        background: #d4e9bc47;
        border-radius: 45px;
        color: green;
        padding: 17px;
    }
    .question {
        min-height: 10px;
        background: lightyellow;
        border: 1px solid #cccccc;
        padding: 10px;
        font-size: 16px;
    }
    .q-type1 {
        margin-top: 10px;
        font-size: 16px;
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

<pre>
    <?php print_r($dataQuestion); ?>
</pre>

<?php

$Title = $dataQuestion['Title'][0];
$dataLabel = $dataQuestion['Label'];

?>


<div class="image-container set-full-height" style="background-image: url(&quot;http://localhost:8080/f/assets/images/bg/wizard-book.jpg&quot;); padding-bottom: 50px; height: auto;">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wizard-container">
                    <div class="card wizard-card" data-color="green">
                        <div class="wizard-header">
                            <h3 class="wizard-title">
                                <?php echo $Title['Code'].' - '.$Title['Title']; ?>
                            </h3>
                            <!--                            <h5>Penilaian ini untuk membantu anda uji kelayakan gedung.</h5>-->
                            <div style="border: 2px solid green;margin: 15px;padding: 15px;background: #8bc34a5e;">
                                <?php echo $Title['Perpu'][0]['Perpu']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wizard-container">
                    <div class="card wizard-card" data-color="red" id="wizard" style="padding: 15px;padding-left: 30px;padding-right: 30px;">

                        <?php foreach ($dataLabel AS $item) {

                            if(count($item['DetailQustion'])>0){ ?>
                                <div class="wizard-header custom-header">
                                    <h3 class="wizard-title">
                                        <?php echo $item['Code']; ?>
                                    </h3>
                                    <h5><?php echo $item['Label']; ?></h5>
                                </div>

                                <div class="tab-content tab-question">

                                    <?php $no = 1; foreach ($item['DetailQustion'] AS $itemQuestion){ ?>
                                        <!-- Type 1 -->
                                        <div class="row">
                                            <div class="col-xs-1" style="text-align: center;">
                                                <div class="number"><?php echo $no; ?></div>
                                            </div>
                                            <div class="col-xs-11">
                                                <div class="question"><?php echo $itemQuestion['Question']; ?></div>
                                                <div class="q-type1">
                                                <?php if($itemQuestion['Type']==1 || $itemQuestion['Type']=='1'){ ?>
                                                    <?php
                                                    $dataLabel = $itemQuestion['dataLabel'];
                                                    for ($l=0;$l<count($dataLabel);$l++){
                                                        echo ' - '.$dataLabel[$l]['Label'].' ... <input type="checkbox" /><br/>';
                                                    }
                                                    ?>
                                                <?php } ?>
                                                </div>
<!--                                                <hr/>-->
                                            </div>
                                        </div>
                                        <?php $no++; } ?>


                                </div>

                            <?php } } ?>

                        <hr/>
                        <div style="text-align: right;">
                            <button class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>