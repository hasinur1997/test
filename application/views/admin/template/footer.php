<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix include. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>

<!--end-Footer-part-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<script src="<?php echo base_url('include/js/excanvas.min.js')?>"></script> 
<script src="<?php echo base_url('include/js/jquery.min.js')?>"></script> 
<script src="<?php echo base_url('include/js/jquery.ui.custom.js')?>j"></script> 
<script src="<?php echo base_url('include/js/bootstrap.min.js')?>"></script> 
<script src="<?php echo base_url('include/js/jquery.flot.min.js')?>"></script> 
<script src="<?php echo base_url('include/js/jquery.flot.resize.min.js')?>"></script> 
<script src="<?php echo base_url('include/js/jquery.peity.min.js')?>"></script> 
<script src="<?php echo base_url('include/js/fullcalendar.min.js')?>"></script> 
<script src="<?php echo base_url('include/js/matrix.js')?>"></script> 
<script src="<?php echo base_url('include/js/matrix.dashboard.js')?>"></script> 
<script src="<?php echo base_url('include/js/jquery.gritter.min.js')?>"></script> 
<script src="<?php echo base_url('include/js/matrix.interface.js')?>"></script> 
<script src="<?php echo base_url('include/js/matrix.chat.js')?>"></script> 
<script src="<?php echo base_url('include/js/jquery.validate.js')?>"></script> 
<script src="<?php echo base_url('include/js/matrix.form_validation.js')?>"></script> 
<script src="<?php echo base_url('include/js/jquery.wizard.js')?>"></script> 
<script src="<?php echo base_url('include/js/jquery.uniform.js')?>"></script> 
<script src="<?php echo base_url('include/js/select2.min.js')?>"></script> 
<script src="<?php echo base_url('include/js/matrix.popover.js')?>"></script> 
<script src="<?php echo base_url('include/js/jquery.dataTables.min.js')?>"></script> 
<script src="<?php echo base_url('include/js/matrix.tables.js')?>"></script> 
<!-- Latest compiled and minified JavaScript -->
<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}

function delete_confirmation(){

  confirm('Are your sure want to delete');
}
</script>
</body>
</html>
