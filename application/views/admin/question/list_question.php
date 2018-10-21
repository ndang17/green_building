
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="well">
            <select class="form-control" id="filterTitle"></select>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Ordering</th>
                    <th>Qustion</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        getSelectOptionTitle('#filterTitle','');
    });
</script>