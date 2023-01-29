
<h1 class="text-center push">Manage Products</h1>
<pre>
</pre>
<div class="container">
  <div class="table-responsive">
    <table class="main-table text-center table table-bordered">
      <tr>
        <td>#ID</td>
        <td>Name</td>
        <td>Price</td>
        <td>Quantity</td>
        <td>Description</td>
        <td>Control</td>
      </tr>

      <?php foreach ($data["products"] as $products) : ?>

        <tr class="prod">
          <td><?php echo $products['id']; ?></td>
          <td class="productsName"><?php echo $products['name']; ?></td>
          <td><?php echo $products['price']; ?>DH</td>
          
          <td><?php echo $products['quantity']; ?></td>
          <td><?php echo $products['description']; ?></td>



          <td style=" GAP: 10PX; DISPLAY: flex; FLEX-WRAP: WRAP; JUSTIFY-CONTENT: center;" class="controol">
            <a href='<?= URLROOT ?>/productsControllers/delete_products/<?= $products['id'] ?>' class='btn btn-danger confirm'><i class='fa fa-close'></i> Delete </a>
          </td>
        </tr>

      <?php endforeach; ?>
    </table>
  </div>
  <a href="<?= URLROOT ?>/Pages/add_products" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> New Item</a>
</div>