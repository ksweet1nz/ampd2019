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

  	<div class="project-grid">
  		<?php
  			perch_content('Project');
  		?>
	 </div>

   <?php perch_layout('global/footer'); ?>
</body>
</html>
