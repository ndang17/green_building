<style>
    body{ margin-top:20px; }

    .navbar-brand {
        padding: 0px;
    }
    .navbar-brand>img {
        height: 100%;
        padding: 0px;
        width: auto;
    }

    .image-container {
        background-attachment: fixed;
    }

    .medali {
        padding: 15px;
    }
    .bobot-bronze {
        margin-top: 10px;
        text-align: center;
        font-weight: bold;
        background: #ed9d5d;
        color: #ffffff;
        padding: 5px;
    }
    .bobot-silver {
        margin-top: 10px;
        text-align: center;
        font-weight: bold;
        background: #9e9e9e;
        color: #ffffff;
        padding: 5px;
    }
    .bobot-gold {
        margin-top: 10px;
        text-align: center;
        font-weight: bold;
        background: #ff7816;
        color: #ffffff;
        padding: 5px;
    }
    .bobot-platinum {
        margin-top: 10px;
        text-align: center;
        font-weight: bold;
        background: #3789c9;
        color: #ffffff;
        padding: 5px;
    }

    .label-q {
        font-size: 17px;
        line-height: 1.42857;
    }


    .navbar, .navbar.navbar-default {
        background-color: #419a1c;
        color: #FFFFFF;
    }
</style>

<!--<img src="--><?php //echo base_url('assets/images/slider/1.jpg'); ?><!--" style="width: 100%;">-->


<div class="image-container set-full-height" style="background-image: url('<?php echo base_url("assets/images/bg/wizard-book.jpg"); ?>');padding-bottom: 50px;">


    <div  style="background: #0000008c;margin-bottom: 30px;padding: 15px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" style="color: #ffffff;">
                    <!--                    <h2 style="margin-top: 0px;"><b>Penilaian Green Building</b>-->
                    <!--                        <br/> <small style="color: #ffffff;">Metode Greenship Rating Tools</small></h2>-->
                    <img src="<?php echo  base_url('assets/images/icon/logo_tr.png'); ?>" style="max-width: 500px;">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-2 col-md-offset-2">
                <div class="card wizard-card medali animated flipInY">
                    <img class=" animated pulse infinite" src="<?php echo base_url('assets/images/icon/bronze.png'); ?>">
                    <div class="bobot-bronze">
                        Bronze
                    </div>

                    <div style="margin-top: 5px;background: lightyellow;border: 1px solid #ed9d5d;padding-top: 7px;">
                        <ol>
                            <li>Point >= 36%</li>
                            <li>Point < 46%</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div class="card wizard-card medali animated flipInY delay-1s">
                    <img class="animated pulse infinite" src="<?php echo base_url('assets/images/icon/silver.png'); ?>">
                    <div class="bobot-silver">
                        Silver
                    </div>
                    <div style="margin-top: 5px;background: lightyellow;border: 1px solid #9e9e9e;padding-top: 7px;">
                        <ol>
                            <li>Point >= 46%</li>
                            <li>Point < 57%</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div class="card wizard-card medali animated flipInY delay-2s">
                    <img class="animated pulse infinite" src="<?php echo base_url('assets/images/icon/gold.png'); ?>">
                    <div class="bobot-gold">
                        Gold
                    </div>
                    <div style="margin-top: 5px;background: lightyellow;border: 1px solid #ff7816;padding-top: 7px;">
                        <ol>
                            <li>Point >= 57%</li>
                            <li>Point < 73%</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div class="card wizard-card medali animated flipInY delay-3s">
                    <img class="animated pulse infinite" src="<?php echo base_url('assets/images/icon/platinum.png'); ?>">
                    <div class="bobot-platinum">
                        Platinum
                    </div>
                    <div style="margin-top: 5px;background: lightyellow;border: 1px solid #3789c9;padding-top: 15px;padding-bottom: 15px;">
                        <ol>
                            <li>Point >= 73%</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?php echo base_url(); ?>">
                                <img src="<?php echo base_url('assets/images/icon/icon.png'); ?>">
                            </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="<?php if($this->uri->segment(1)==''){ echo 'active'; } ?>"><a href="<?php echo base_url(); ?>">Mulai Pengujian</a></li>
                                <li class="<?php if($this->uri->segment(1)=='pengguna'){ echo 'active'; } ?>"><a href="<?php echo base_url('pengguna'); ?>">Pengguna</a></li>

                            </ul>

                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="javascript:void(0);" id="btnLoginAdmin">Admin Login</a></li>
                            </ul>

                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>

        </div>
    </div>


    <?php echo $content; ?>

</div>

<script>
    $('#btnLoginAdmin').click(function () {
        $('#modalLogin').modal({backdrop: 'static', keyboard: false});
    });
</script>



<!-- Modal -->
<div class="modal fade" id="modalMedium" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
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


<style>
    .modal {
        text-align: center;
    }


    .modal-dialog {
        display: inline-block;
        text-align: -webkit-center;
        vertical-align: middle;
    }
</style>

<!-- Modal -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-sm">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Login Admin</h4>
            </div>
            <div class="modal-body">

                <div class="input-group">
													<span class="input-group-addon">
														<i class="fa fa-user"></i>
													</span>
                    <div class="form-group label-floating">
                        <label class="control-label">Username</label>
                        <input type="text" id="formUsername" class="form-control">
                    </div>
                </div>

                <div class="input-group">
													<span class="input-group-addon">
														<i class="fa fa-bars"></i>
													</span>
                    <div class="form-group label-floating">
                        <label class="control-label">Password</label>
                        <input type="password" id="formPassword" class="form-control">
                    </div>
                </div>
                <hr/>
                <div style="text-align: center;">
                    <button type="button" class="btn btn-success" id="btnLoginAdmin">Login</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                </div>

            </div>
        </div>
    </div>
</div>

<form method="post" id="formPost" class="hide">
    <input id="formPostEmail" name="email" class="hide">
</form>


<script>
    $(document).on('click','#btnLoginAdmin',function () {

        var formUsername = $('#formUsername').val();
        var formPassword = $('#formPassword').val();

        if(formUsername!='' && formUsername!=null &&
            formPassword!='' && formPassword!=null){

            $('#btnLoginAdmin, button[data-dismiss=modal]').prop('disabled',true);

            var data = {
                Username : formUsername,
                Password : formPassword
            }
            var url = base_url_js+'__auth';
            $.post(url,{dataForm : data},function (jsonResult) {
                if(jsonResult.Status==1 || jsonResult.Status=='1'){
                    window.location.replace(base_url_js+'admin/master/add-question');
                } else {
                    alert('Username atau Password tidak cocok');
                    setTimeout(function () {
                        $('#btnLoginAdmin, button[data-dismiss=modal]').prop('disabled',false);
                    },500);
                }

            });

        }
    });
</script>
