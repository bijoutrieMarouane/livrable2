<?php
$noNavbar = '';
$noFooter = '';
include 'includes/header.php';
require_once './controllers/ItemsControllers.php';
require_once './controllers/UsersControllers.php';
$itemscon = new itemsController();
$items = $itemscon->selectItems();
?>

<h1 class="text-center">Manage Items</h1>
<div class="container">
    <div class="table-responsive">
        <table class="main-table text-center table table-bordered">
            <tr>
                <td>#ID</td>
                <td>Item Name</td>
                <td>Price</td>
                <td>Image</td>
                <td>Control</td>
            </tr>
            <?php
            foreach ($items as $item) {
                echo "<tr>";
                    echo "<td>" . $item['id_i'] . "</td>";
                    echo "<td>" . $item['name'] . "</td>";
                    echo "<td>" . $item['prix'] . " DH</td>";
                    echo '<td> <img style="width: 38px;" src="' . $image . $item['image'] . '" alt="item"> </td>';
                    echo "<td>
                        <a href='Edit?itemid=".$item['id_i']."' class='btn btn-success'><i class='fa fa-edit'></i> Edit</a>
                        <a href='Delete?itemid=" . $item['id_i'] . "' class='btn btn-danger confirm'><i class='fa fa-close'></i> Delete </a>";
                    echo "</td>";
                echo "</tr>";
            }
            ?>
            <tr>
        </table>
    </div>
    <a href="Add" class="btn btn-sm btn-primary">
        <i class="fa fa-plus"></i> New Item
    </a>
</div>

<?php include 'includes/footer.php' ?>