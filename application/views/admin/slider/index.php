
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
	

	<div class="container-fluid">

    <div class="row-fluid">

      <div class="span6">
		<?php if($this->session->flashdata('message')):?>
			
			<div class="alert alert-info"> 
				<?php echo $this->session->flashdata('message')?>
			</div>

		<?php endif?>
		<?php if(count($sliders)):?>

        <div class="widget-box">
              <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Ruels table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Sl</th>

                  <th>Rules</th>

                  <th>Description</th>

                  <th>Action</th>

                </tr>
              </thead>
              <tbody>
				<?php $x = 1;?>

              	<?php foreach($sliders as $slider):?>
                <tr class="odd gradeX">

                  <td><?php echo $x?></td>

                  <td><?php echo $slider->title?></td>

                  <td><?php echo word_limiter($slider->description, 7)?></td>

                  <td><a href="#" data-toggle="modal" data-target="#<?php echo $slider->id?>">View</a> | <a href="<?php echo base_url('slider/edit?id='.$slider->id)?>">Edit</a> | <a href="<?php echo base_url('slider/destroy?id='.$slider->id)?>">Delete</a></td>
                  
                </tr>

               	<div id="<?php echo $slider->id?>" class="modal fade" role="dialog">
        				  <div class="modal-dialog">

        				    <!-- Modal content-->
        				    <div class="modal-content">
        				      
        				      <div class="modal-body">

        				      	<div class="thumbnail"> 
        							<img src="<?php echo base_url('uploads/'.$slider->image)?>" alt="">
        				      	</div>
        				        <h3><?php echo $slider->title?></h3>
        				        <p><?php echo $slider->description?></p>
        				      </div>
        				      <div class="modal-footer">
        				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        				      </div>
        				    </div>

        				  </div>
				        </div>

                <?php $x++?>
           	 <?php endforeach?>
                
              </tbody>
            </table>
          </div>
          </div>

         <?php else:?>

         	<div class="text-center"> 
				<h4>No data found</h4>
				<a href="<?php echo base_url('slider/create')?>">Create new</a>
         	</div>

         <?php endif?>
      </div>

    </div>
 </div>



  </div>
</div>


