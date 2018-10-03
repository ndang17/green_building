<style>
    body{ margin-top:20px; }
</style>

<!--<img src="--><?php //echo base_url('assets/images/slider/1.jpg'); ?><!--" style="width: 100%;">-->

<div  style="background: #0000008c;margin-bottom: 30px;padding: 15px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center" style="color: #ffffff;">
                <h1 style="margin-top: 0px;"><b>PENILAIAN GREEN BUILDING</b>
                    <br/> <small style="color: #ffffff;">Metode Greenship Rating Tools</small></h1>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row form-group">
        <div class="col-xs-12">
            <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                <li class="active"><a href="#step-1">
                        <h4 class="list-group-item-heading">Tahap 1</h4>
                        <p class="list-group-item-text">Deskripsi Awal</p>
                    </a></li>
                <li class="disabled"><a href="#step-2">
                        <h4 class="list-group-item-heading">Tahap 2</h4>
                        <p class="list-group-item-text">Kriteria Kelayakan Penilaian</p>
                    </a></li>
                <li class="disabled"><a href="#step-3">
                        <h4 class="list-group-item-heading">Tahap 3</h4>
                        <p class="list-group-item-text">Assessment Greenship Rating Tool</p>
                    </a></li>
            </ul>
        </div>
    </div>
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12 thumbnail text-center" style="min-height: 900px;">
                <h1> STEP 1</h1>
                <button id="activate-step-2" class="btn btn-primary btn-lg">Activate Step 2</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12 well">
                <h1 class="text-center"> STEP 2</h1>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12 well">
                <h1 class="text-center"> STEP 3</h1>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        var navListItems = $('ul.setup-panel li a'),
            allWells = $('.setup-content');

        allWells.hide();

        navListItems.click(function(e)
        {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                $item = $(this).closest('li');

            if (!$item.hasClass('disabled')) {
                navListItems.closest('li').removeClass('active');
                $item.addClass('active');
                allWells.hide();
                $target.show();
            }
        });

        $('ul.setup-panel li.active a').trigger('click');

        // DEMO ONLY //
        $('#activate-step-2').on('click', function(e) {
            $('ul.setup-panel li:eq(1)').removeClass('disabled');
            $('ul.setup-panel li a[href="#step-2"]').trigger('click');
            $(this).remove();
        })
    });
</script>