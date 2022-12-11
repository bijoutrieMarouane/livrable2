<?php
$noNavbar = '';
$noFooter = '';
include 'includes/header.php';
require_once './controllers/ItemsControllers.php';
require_once './controllers/UsersControllers.php';
?>

<form class="addItems" action="" method="post">
  <div class="labelInput">
    <label class="labelItem" for="name">Name Of Item</label>
    <input class="inputItem" type="text" name="name">
  </div>
  <div class="labelInput">
    <label class="labelItem" for="price">Price Of Item</label>
    <input class="inputItem" type="number" name="price">
  </div>
  <div class="labelInput">
    <label class="labelItem" for="image">Picture Of Item</label>
    <input class="inputItem inputFile" type="file" name="image">
  </div>
  <button type="submit" class="submitItems">
    <i class="fa fa-plus"></i> New Item
  </button>
</form>

<?php include 'includes/footer.php' ?>