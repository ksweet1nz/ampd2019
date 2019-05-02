<?php include('../admin/runtime.php'); ?>

<!doctype html>
<html lang="en">
<?php perch_layout('global/head', [
  'title' => 'AMPD | About Us',
]); ?>
<body>

	<?php perch_layout('global/home-menu', [
    'menu-class' => 'main-nav home-menu',
  ]); ?>
  	<div class="basic-container">
		<div>
			<video autoplay loop>
				<source src="../images/about.webm" type="video/webm">
				Please upgrade your browser to watch videos.
			</video>
		</div>
		<?php perch_content('Mission'); ?>
	</div>

<?php perch_layout('global/footer'); ?>
</body>
</html>
