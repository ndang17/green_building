


<?php

$dataPercentage = $this->db->get_where('apgt1743_green.user_step_log',
    array('IDUser' => $this->session->userdata('ID')))->result_array();

$t1 = 0;
$t2 = 0;
$t3 = 0;
$t4 = 0;
$t5 = 0;
$t6 = 0;
foreach ($dataPercentage AS $item){
    if($item['IDTitle']=='1'){
        $t1 = $item['Percentage'];
    } else if($item['IDTitle']=='2'){
        $t2 = $item['Percentage'];
    } else if($item['IDTitle']=='3'){
        $t3 = $item['Percentage'];
    } else if($item['IDTitle']=='4'){
        $t4 = $item['Percentage'];
    } else if($item['IDTitle']=='5'){
        $t5 = $item['Percentage'];
    } else if($item['IDTitle']=='6'){
        $t6 = $item['Percentage'];
    }
}

$totalPercentage = $t1 + $t2 + $t3 + $t4 + $t5 + $t6;

?>

<div class="image-container set-full-height" style="padding-top:30px;background-image: url('<?php echo base_url("assets/images/bg/wizard-book.jpg"); ?>');padding-bottom: 50px;">
    <div class="container" style="margin-bottom: 30px;">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="thumbnail" style="min-height: 200px;padding: 15px;">
                    <div style="text-align: center;">

                        <div style="background: #03a9f438;padding: 10px;">
                            <h1>Final Assement</h1>
                        </div>

                        <hr/>
                        <h3>Neo Soho Building</h3>

                        <p>
                            Jl. Letjen S. Parman No.Kav. 28, RT.3/RW.5, Tj. Duren Sel., Grogol
                            petamburan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta
                            11470
                        </p>

                        <hr/>

                        <?php if($totalPercentage>=36) { ?>
                            <img src="<?php echo base_url('assets/images/icon/bronze2.png'); ?>" style="max-width: 150px;">
                            <h4 style="margin-bottom: 4px;">(65%)</h4>
                            <h3 style="margin-top: 0px;">Bronze</h3>

                            <div class="row" style="margin-top: 25px;">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <tbody>
                                            <tr>
                                                <td style="text-align: left;">
                                                    AREA DASAR HIJAU
                                                </td>
                                                <td style="width: 1%;">:</td>
                                                <td style="width: 7%;">16%</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;">
                                                    EFISIENSI DAN KONSERVASI ENERGI
                                                </td>
                                                <td>:</td>
                                                <td>17%</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;">
                                                    KONSERVASI AIR
                                                </td>
                                                <td>:</td>
                                                <td>17%</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;">
                                                    SUMBER DAN SIKLUS MATERIAL
                                                </td>
                                                <td>:</td>
                                                <td>17%</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;">
                                                    KESEHATAN DAN KENYAMANAN DALAM RUANG
                                                </td>
                                                <td>:</td>
                                                <td>17%</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left;">
                                                    MANAJEMEN LINGKUNGAN BANGUNAN
                                                </td>
                                                <td>:</td>
                                                <td>17%</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <hr/>
                                    <button class="btn btn-lg btn-primary">Download Sertifikat</button>
                                </div>
                            </div>
                         <?php } else { ?>

                            <div class="row">
                                <div class="col-md-12">
                                    <h3><?php echo '('.$totalPercentage.')'; ?>
                                    <br/>
                                        Tidak tersertifikasi | No Green Building
                                    </h3>

                                </div>
                            </div>

                        <?php } ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>