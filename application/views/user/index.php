 <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Add some data</title>
<link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css"/>
</head>

<body>

	<nav class="navbar navbar-default">
	
		<div class="container-fluide"> 
		
			<div class="navbar-header">
			
				<a href="" class="navbar-brand">Code Igniter</a>
				
			</div>
			
			<ul class="nav navbar-nav pull-rigtht">
			
			</ul>
			
		</div>
		
	</nav>

	<div class="container"> 
		<div class="row"> 
			<div class="col-md-6 col-md-offset-3">
				
				<?php if($this->session->flashdata('message')):?>
					
					<div class="alert alert-info"> 
					
						<?php echo $this->session->flashdata('message')?>
						
					</div>
				
				<?php endif ?>
				
				<div class="panel panel-info"> 
				
					<div class="panel-heading">
					
						CRUD for Code Igniter
						
					</div>
					
					<div class="panel-body">
					
						<form action="<?php echo base_url('user/store')?>" method="POST"> 
						
							<!-- Name Field -->
							
							<div class="form-group<?php echo form_error('name') ? ' has-error' : ''?>">
							
								<label for="name" id="name" class="control-label">Name</label>
								
								<input type="text" name="name" class="form-control"/>
								
								<?php if(form_error('name')):?>
								
								<b class="help-block"><?php echo form_error('name')?></b>
								
								<?php endif?>
								
							</div>
							
							<!-- Email Field -->
							
							<div class="form-group<?php echo form_error('name') ? ' has-error' : ''?>"> 
							
								<label for="email" class="control-label">Email</label>
								
								<input type="text" id="email" name="email" class="form-control"/>
								
								<?php if(form_error('email')):?>
								
								<b class="help-block"><?php echo form_error('email')?></b>
								
								<?php endif?>
								
							</div>
							
							<!-- Email Field -->
							
							<div class="form-group<?php echo form_error('name') ? ' has-error' : ''?>"> 
							
								<label for="phone" class="control-label">Phone</label>
								
								<input type="text" id="phone" name="phone" class="form-control"/>
								
								<?php if(form_error('email')):?>
								
									<b class="help-block"><?php echo form_error('phone')?></b>
								
								<?php endif?>
								
							</div>
							
							<div class="form-group"> 
								
								<input type="submit" class="btn btn-info" value="Submit"/>
								
							</div>
							
						</form>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
		
		
	</div>
	
</body>

</html> 