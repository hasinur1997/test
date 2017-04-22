<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>A Test Project</title>
     

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/owl.carousel.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/owl.theme.default.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="main-wrapper">
        <div class="container">
           <div class="main-wraper-bg">
            <div class="header-area-img" style="background: url(<?php echo base_url('assets/img/headerdemo.jpg')?>); height:200px; background-size: 100% 200px">
                <div class="row">
                <div class="col-md-2">
                    <div class="logo">
                        <a href="" class="">
                            <img src="<?php echo base_url('assets/img/logo.jpg')?>" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="header-title">
                        <h2>A Test Project</h2>
                        <p></p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="header-title-two">
                        <h3> </h3>
                        <p> <br>
                             <br>
                              <br>
                            </p>
                    </div>
                </div>
            </div>
            </div>
    <div class="main-content">
            <div class="row">
                <div class="col-md-8">
                    <div class="left_sidebar">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>নিয়মাবলী </h4>
                            </div>
                            <div class="panel-body">
                            <ul class="list-group">
                                <?php foreach($rules as $rule):?>

                                <li class="list-group-item"><?php echo $rule->name?></li>

                            <?php endforeach?>

                              </ul>
                              </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="right-panel">
                        <div class="loginarea">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4>লগ ইন</h4>
                                </div>
                                <div class="panel-body">
                                    <form action="admin/index.html">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                      </div>
                                      <button type="submit" class="btn btn-default custom">লগ ইন</button>
                                    </form>
                                    <a href="" class="cng">Forget Password?</a> <br>
                                    <a href="registration.html">Don't Have An Account? Create An Account</a>
                                </div>
                            </div>
                        </div>
                        <div class="widget-two">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4>ABSTRACT</h4>
                                </div>
                                <div class="panel-body">
                                    <p><?php echo $abs->description?></p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <img src="<?php echo base_url('assets/img/img1.png')?>" alt="">
                        <h4>SSC PRE TEST</h4>
                        <p>Feel Free to attain the exam and test your potentiality 
                        </p>
                        <a href="">More</a>
                      </div>
                    </div>
                </div>
                <div class="item">
                    <div class="panel panel-default">
                     <div class="panel-body">
                        <img src="<?php echo base_url('assets/img/img1.png')?>" alt="">
                        <h4>JSC PRE TEST</h4>
                        <p>Feel Free to attain the exam and test your potentiality /p>
                        <a href="">More</a>
                      </div>
                    </div>
                </div>
                <div class="item">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <img src="<?php echo base_url('assets/img/img1.png')?>" alt="">
                        <h4>MBA PRE TEST </h4>
                        <p>Feel Free to attain the exam and test your potentiality </p>
                        <a href="">More</a>
                      </div>
                    </div>
                </div>
                <div class="item">
                   <div class="panel panel-default">
                  <div class="panel-body">
                        <img src="<?php echo base_url('assets/img/img1.png')?>" alt="">
                        <h4>HSC PRE TEST</h4>
                        <p>Feel Free to attain the exam and test your potentiality </p>
                        <a href="">More</a>
                      </div>
                </div>
                </div>
                <div class="item">
                   <div class="panel panel-default">
                      <div class="panel-body">
                        <img src="<?php echo base_url('assets/img/img1.png')?>" alt="">
                        <h4>Third Term Final PRE TEST</h4>
                        <p>Feel Free to attain the exam and test your potentiality </p>
                       <a href="">More</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="footer-area">
                <div class="row">
                    <div class="col-md-6">
                        Copyright &copy; 2017
                    </div>
                    <div class="col-md-6">
                        <div class="right">
                            Design & Developed FOR RTSOFT <a href=""></a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/owl.carousel.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/active.js')?>"></script>
  </body>
</html>