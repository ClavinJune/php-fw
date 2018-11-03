<?php require_once('views/layouts/header.php'); ?>

<?php
  foreach ($brands as $brand) {
    echo "$brand->id : $brand->name <br>";
  }
?>

<form method="POST" action="/brands">
  <input type="name" name="name" placeholder="Name">
  <input type="submit" value="submit">
</form>

<?php require_once('views/layouts/footer.php'); ?>