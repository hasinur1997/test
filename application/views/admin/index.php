<?php include('template/header.php');?>

<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->


<!--sidebar-menu-->

<!--sidebar-menu-->
<?php include('template/sidebar.php');?>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->
  <div class="container-fluid">

    <div class="row-fluid">

      <div class="span6">

        <div class="widget-box">
              <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5>Personal-info</h5>
              </div>
              <div class="widget-content nopadding">
                <form action="#" method="get" class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label">First Name :</label>
                    <div class="controls">
                      <input type="text" class="span11" placeholder="First name" />
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Last Name :</label>
                    <div class="controls">
                      <input type="text" class="span11" placeholder="Last name" />
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Password input</label>
                    <div class="controls">
                      <input type="password"  class="span11" placeholder="Enter Password"  />
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Company info :</label>
                    <div class="controls">
                      <input type="text" class="span11" placeholder="Company name" />
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Description field:</label>
                    <div class="controls">
                      <input type="text" class="span11" />
                      <span class="help-block">Description field</span> </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Message</label>
                    <div class="controls">
                      <textarea class="span11" ></textarea>
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

<!--end-main-container-part-->

<!--Footer-part-->

<?php include('template/footer.php');?>