<style>
    #tablePengguna th {
        text-align: center;
        background: #607d8b;
        color: #fff;
    }
    #tablePengguna td {
        text-align: center;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="wizard-container">
                <div class="card wizard-card" data-color="green" id="wizard" style="padding: 15px;padding-left: 30px;padding-right: 30px;">

                    <div class="wizard-header">
                        <h3 class="wizard-title">
                            Daftar Pengguna
                        </h3>
                        <h5>Berikut adalah daftar building yang melakukan ujicoba</h5>
                    </div>

                    <div class="tab-content">

                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered table-striped" id="tablePengguna">
                                    <thead>
                                    <tr>
                                        <th style="width: 1%;">No</th>
                                        <th style="width: 30%;">Pengguna</th>
                                        <th>Proyek</th>
                                        <th style="width: 7%;">Medali</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=1; foreach ($dataPengguna AS $item){
                                        $totalPercentage = $item['Percentage'];
                                        $ketD = '';
                                        $ketIcon = '';
                                        if((float)$totalPercentage>=36 && (float)$totalPercentage<46){
                                            $ketD = 'Bronze';
                                            $ketIcon = 'bronze2.png';
                                        }
                                        else if((float)$totalPercentage>=46 && (float)$totalPercentage<57){
                                            $ketD = 'Silver';
                                            $ketIcon = 'silver2.png';
                                        }
                                        else if((float)$totalPercentage>=57 && (float)$totalPercentage<73){
                                            $ketD = 'Gold';
                                            $ketIcon = 'gold2.png';
                                        }
                                        else if((float)$totalPercentage>=73){
                                            $ketD = 'Platinum';
                                            $ketIcon = 'platinum2.png';
                                        }

                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td style="text-align: left;">
                                                <b><?php echo $item['Name'] ?></b><br/>
                                                <span>Jabatan : <?php echo $item['Position']; ?></span>
                                            </td>
                                            <td style="text-align: left;">
                                                <?php echo $item['ProjectName']; ?><br/>
                                                <?php echo $item['Location']; ?>
                                            </td>
                                            <td>
                                                <?php if($ketIcon!=''){ ?>
                                                    <img src="<?php echo base_url('assets/images/icon/'.$ketIcon); ?>" style="max-width: 40px;">
                                                    <?php echo $ketD; ?>
                                                <?php } else {
                                                    echo '-';
                                                } ?>

                                            </td>
                                        </tr>
                                    <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>