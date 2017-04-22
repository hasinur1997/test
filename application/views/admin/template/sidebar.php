<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="<?php echo base_url('admin/index')?>"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>

    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Conventions</a>
      <ul>
        <li><a href="<?php echo base_url('convention/index');?>">All</a></li>
        <li><a href="<?php echo base_url('convention/create');?>">Add New</a></li>
      </ul>
    </li>


    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Abstract</a>
      <ul>
        <li><a href="<?php echo base_url('abs/index');?>">All</a></li>
        <li><a href="<?php echo base_url('abs/create');?>">Add New</a></li>
      </ul>
    </li>

    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Slider</a>
      <ul>
        <li><a href="<?php echo base_url('slider/index');?>">All</a></li>
        <li><a href="<?php echo base_url('slider/create');?>">Add New</a></li>
      </ul>
    </li>

  </ul>
</div>
<!--sidebar-menu-->