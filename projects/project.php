<?php include('../admin/runtime.php'); ?>

<!doctype html>
<html lang="en">
<?php perch_layout('global/head', [
  'title' => 'AMPD | Student Project',
]); ?>
<body>
<?php PerchUtil::output_debug(); ?>
	<?php perch_layout('global/home-menu', [
    'menu-class' => 'main-nav',
  ]); ?>


    <?php perch_gallery_album_images(perch_get('s'), [
          'template' => 'project_list_image.html',
        ]); ?>


  <?php perch_layout('global/footer'); ?>

</body>
</html>
