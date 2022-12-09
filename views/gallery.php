<div class="hero_area">
    <?php
    $noNavbar2 = '';
    require_once './controllers/ItemsControllers.php';
    require_once './controllers/UsersControllers.php';
    include 'includes/header.php';
    ?>
    <div class="grid container" style="display: flex; flex-wrap:wrap;">
        <div class="item">
            <?php
            $itemscon = new itemsController();
            $itemsAff = $itemscon->selectItems();
                foreach ( $itemsAff as $item ){
                    echo '<div class="box">';
                        echo '<div class="price">';
                            echo $item['prix'] .'DH';
                        echo '</div>';
                        echo '<div class="img-box">';
                            echo '<img src="' . $image . $item['image'] . '" alt="item">';
                        echo '</div>';                        
                        echo '<div class="name">';
                            echo $item['name'];
                        echo '</div>';
                    echo '</div>';
                }
            ?>
        </div>
    </div>
    <?php include 'includes/footer.php' ?>
</div>