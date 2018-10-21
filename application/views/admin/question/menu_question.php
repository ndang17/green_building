
<style>
    .nav-pills>li>a {
        border-radius: 0px;
        /*border-right: 1px solid #ccc;*/
        border-right: 1px solid #ccc;
    }
    .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
        background-color: #607D8B;
    }
    .nav-pills>li+li {
        margin-left: 0px;
    }
</style>

<div class="thumbnail">
    <ul class="nav nav-pills">
        <li role="presentation" class="<?php if($this->uri->segment(3)=='add-question'){echo 'active';} ?>"><a href="<?php echo base_url('admin/master/add-question'); ?>"><i class="fa fa-th-large margin-right"></i> List Question</a></li>
    </ul>
</div>

<?php echo $subpage; ?>