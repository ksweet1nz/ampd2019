<?php include('../admin/runtime.php'); ?>

<!doctype html>
<html lang="en">
<?php perch_layout('global/head', [
  'title' => 'AMPD | Projects',
]); ?>
<body>

	<?php perch_layout('global/home-menu', [
    'menu-class' => 'main-nav',
  ]); ?>
  <div class="wrapper">
  	<div class="auto-grid">
  		<?php
  			perch_content('Project');
  		?>
	  </div>
  </div>

   <?php perch_layout('global/footer'); ?>
</body>
</html>
