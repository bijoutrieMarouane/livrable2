<?php
$noNavbar = '';
$noFooter = '';
include 'includes/header.php';
require_once './controllers/ItemsControllers.php';
require_once './controllers/UsersControllers.php';
$data = new itemsController();
$data->insertIntoItems();
?>


<form class="add_item" action="" method="POST">
  <div class="item">
    <label class="input-group-text label_item" for="name">Name Of Item</label>
    <input type="text" class="form-control" name="name" placeholder="Name Of Item" required="required">
  </div>
  <div class="item">
    <label class="input-group-text label_item" for="price">Price Of Item</label>
    <input type="number" class="form-control" name="price" placeholder="Price Of Item" required="required">
  </div>
  <div class="item">
    <label class="input-group-text label_item" for="image">Picture Of Item</label>
    <input class="form-control input_item" type="file" name="image" accept="image/png, image/jpeg, image/jpg"
      required="required">
  </div>
  <div class="submit_add">
    <input name="ADD" class="input-group-text input_submit" type="submit" value="+ Ajouter le produit">
  </div>
</form>


<?php include 'includes/footer.php' ?>