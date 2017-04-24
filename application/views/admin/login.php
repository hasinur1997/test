<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Matrix Admin</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="<?php echo base_url('include/css/bootstrap.min.css')?>" />
		<link rel="stylesheet" href="<?php echo base_url('include/css/bootstrap-responsive.min.css')?>" />
        <link rel="stylesheet" href="<?php echo base_url('include/css/matrix-login.css')?>" />
        <link href="<?php echo base_url('includefont-awesome/css/font-awesome.css')?>" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>



        <style> 
                .help-block{

                    color:#fff;
                }

                .message{
                    background-color:#c0392b;
                    color:#fff;
                    text-align:center;
                    padding: 10px 10px;
                }
                .close{

                }
        </style>

    </head>
    <body>
        <div id="loginbox">  


            <form id="loginform" class="form-vertical" action="<?php echo base_url('admin/loggedIn')?>" method="post">
				 <div class="control-group normal_text"> <h3><img src="<?php echo base_url('include/img/logo.png')?>" alt="Logo" /></h3></div>
                    <?php if($this->session->flashdata('message')):?>

                            <p class="message"><?php echo $this->session->flashdata('message')?> <span class="close">&times;</span></p>

                     <?php endif?>

                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" placeholder="Username" name="user_name"/>

                            <?php if(form_error('user_name')):?>

                             <span class="help-block"><?php echo form_error('user_name')?></span>

                             <?php endif?>
                        </div>

                    </div>
                </div>


                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="password" placeholder="Password" name="password"/>

                            <?php if(form_error('password')):?>

                             <span class="help-block"><?php echo form_error('password')?></span>

                             <?php endif?>
                        </div>

                    </div>
                </div>



                <div class="form-actions">
                    <span class="pull-right"><button type="submit" class="btn btn-success" /> Login</button></span>
                </div>



            </form>


            <form id="recoverform" action="#" class="form-vertical">
				<p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>
				
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
                        </div>
                    </div>
               
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
                    <span class="pull-right"><a class="btn btn-info"/>Reecover</a></span>
                </div>
            </form>


        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

        <script src="<php echo base_url('include/js/jquery.min.js')>"></script>

        <script src="<php echo base_url('include/js/matrix.login.js')>"></script> 

        <script> 
            jQuery(document).ready(function($){

                $('.close').click(function(){

                    $('.message').fadeOut(1000);
                });

                setTimeout(function(){ 

                    $('.message').fadeOut(1000);

                }, 2000);

            });
        </script>
    </body>

</html>
