 <?php
  require_once 'header.php';
  $divisions_array = array();
  
  $divisions_array = get_file_array($division_file);
  require_once 'navbar.php';
 ?>
 
 <div class="row">
  <div class="col-sm-4">
  	<?php require_once 'vertical_nav.php'; ?>
  </div>
  <div class="col-sm-8">
  	<?php require_once 'message_page_content.php'; ?>
  </div>
</div> 
 
<?php
  require_once 'footer.php';
?>

