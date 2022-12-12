<?php
$noNavbar = '';
$noFooter = '';
include 'includes/header.php';
require_once './controllers/ItemsControllers.php';
require_once './controllers/UsersControllers.php';
$data = new itemsController();
$item = $data->selectItemsById();
?>

<form class="add_item" action="" method="POST">
  <div class="item">
    <label class="input-group-text label_item" for="name">Name Of Item</label>
    <input type="text" class="form-control" value="<?= $item['name'] ?>" name="name" placeholder="Name Of Item" required="required">
  </div>
  <div class="item">
    <label class="input-group-text label_item" for="description">Price Of Item</label>
    <input type="number" class="form-control" value="<?= $item['prix'] ?>" name="description" placeholder="Price Of Item"
      required="required">
  </div>
  <div class="item">
    <label class="input-group-text label_item" for="img_item">Picture Of Item</label>
    <input class="form-control input_item" value="<?= $item['image'] ?>" type="file" name="img_item" accept="image/png, image/jpeg, image/jpg">
  </div>
  <div class="submit_add">
    <input class="input-group-text input_submit" type="submit" value="+ Ajouter le produit">
  </div>
</form>

<?php include 'includes/footer.php' ?>