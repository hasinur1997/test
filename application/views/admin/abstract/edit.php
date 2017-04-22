
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->
  <div class="container-fluid">

    <div class="row-fluid">
        
        


      <div class="span6">

        <?php if($this->session->flashdata('message')):?>
            
          <div class="alert alert-info"> 
            <p><?php echo $this->session->flashdata('message')?></p>
          </div>
        <?php endif?>
    
        <div class="widget-box">

            
              <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5>Personal-info</h5>
              </div>

              <div class="widget-content nopadding">

                <form action="<?php echo base_url('abs/update?id='.$edit->id)?>" method="POST" class="form-horizontal">

                  <div class="control-group<?php echo form_error('description') ? ' has-error' : ''?>">

                    <label class="control-label" for="description">Rules</label>

                    <div class="controls">

                      <textarea name="description" id="description" cols="30" rows="10" class="span11"><?php echo $edit->description?></textarea>

                      <?php if(form_error('description')):?>

                        <b class="help-block"><?php echo form_error('description')?></b>
                      <?php endif?>

                    </div>

                  </div>

                  <div class="form-actions">

                    <button type="submit" class="btn btn-success">Save</button>

                  </div>

                </form>
              </div>
          </div>
      </div>

    </div>
 </div>
  </div>
</div>
