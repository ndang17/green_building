
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
        <li role="presentation" class="<?php if($this->uri->segment(3)=='add-question'){echo 'active';} ?>"><a href="<?php echo base_url('admin/master/add-question'); ?>"><i class="fa fa-edit margin-right"></i> Add Question</a></li>
        <li role="presentation" class="<?php if($this->uri->segment(3)=='label'){echo 'active';} ?>"><a href="<?php echo base_url('admin/master/label'); ?>"><i class="fa fa-tags margin-right"></i> Label</a></li>
        <li role="presentation" class="<?php if($this->uri->segment(3)=='perpu'){echo 'active';} ?>"><a href="<?php echo base_url('admin/master/perpu'); ?>"><i class="fa fa-book margin-right"></i> Perpu</a></li>
        <li role="presentation" class="<?php if($this->uri->segment(3)=='title'){echo 'active';} ?>"><a href="<?php echo base_url('admin/master/title'); ?>"><i class="fa fa-bookmark margin-right"></i> Title</a></li>
    </ul>
</div>

<?php echo $subpage; ?>