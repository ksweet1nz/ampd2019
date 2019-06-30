<?php include('../admin/runtime.php'); ?>

<!doctype html>
<html lang="en">
<?php perch_layout('global/head', [
  'title' => 'AMPD | People',
]); ?>
<body>

	<?php perch_layout('global/home-menu', [
    'menu-class' => 'main-nav',
  ]); ?>
  <div class="wrapper">
		<?php perch_content('People'); ?>
	</div>

<?php perch_layout('global/footer'); ?>
</body>
</html>
