
<!--end-Footer-part--> 
<script src="<?= base_url('assets/admin/js/excanvas.min.js?ver=<?php echo VERSION; ?> ') ?>"></script> 
<script src="<?= base_url('assets/admin/js/jquery.min.js?ver=<?php echo VERSION; ?> ') ?>"></script> 
<script src="<?= base_url('assets/admin/js/jquery.ui.custom.js?ver=<?php echo VERSION; ?> ') ?>"></script> 
<script src="<?= base_url('assets/admin/js/bootstrap.min.js?ver=<?php echo VERSION; ?> ') ?>"></script> 
<script src="<?= base_url('assets/admin/js/matrix.js?ver=<?php echo VERSION; ?> ') ?>"></script> 
<script src="<?= base_url('assets/admin/js/jquery.dataTables.min.js?ver=<?php echo VERSION; ?>') ?>"></script> 
<script src="<?= base_url('assets/admin/js/jquery.peity.min.js?ver=<?php echo VERSION; ?> ') ?>"></script>  
<script src="<?= base_url('assets/admin/js/jquery.validate.js?ver=<?php echo VERSION; ?> ') ?>"></script> 
<script src="<?= base_url('assets/admin/js/matrix.form_validation.js?ver=<?php echo VERSION; ?> ') ?>"></script> 
<script src="<?= base_url('assets/admin/js/jquery.wizard.js?ver=<?php echo VERSION; ?> ') ?>"></script> 
<script src="<?= base_url('assets/admin/js/jquery.uniform.js?ver=<?php echo VERSION; ?> ') ?>"></script> 
<script src="<?= base_url('assets/admin/js/select2.min.js?ver=<?php echo VERSION; ?> ') ?>"></script> 
<script src="<?= base_url('assets/admin/js/matrix.popover.js?ver=<?php echo VERSION; ?> ') ?>"></script> 
<script src="<?= base_url('assets/admin/js/matrix.tables.js?ver=<?php echo VERSION; ?> ') ?>"></script> 

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
</script>