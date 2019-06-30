<?php include('admin/runtime.php'); ?>

<!doctype html>
<html lang="en">
<?php perch_layout('global/head', [
  'title' => 'Advanced Manufacturing and Prototyping for Design',
]); ?>
<body>
  <ul class="bg-slideshow">
    <li><span>Image 01</span></li>
    <li><span>Image 02</span></li>
    <li><span>Image 03</span></li>
    <li><span>Image 04</span></li>
  </ul>

  <?php perch_layout('global/home-menu', [
    'menu-class' => 'home-menu',
  ]); ?>


  <?php perch_layout('global/footer'); ?>
</body>
</html>