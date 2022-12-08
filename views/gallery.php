<div class="hero_area">
    <?php
    $noNavbar2 = '';
    include 'includes/header.php';
    $items = itemsController::selectItems();
    ?>
    <div class="grid container" style="display: flex; flex-wrap:wrap;">
        <div class="item">
            <?php
                foreach ( $items as $item ){
                    echo '<div class="box">';
                        echo '<div class="price">';
                            echo $item['prix'];
                        echo '</div>';
                        echo '<div class="img-box">';
                            echo '<img src="' . $image . $item['prix'] . '" alt="item">';
                        echo '</div>';                        
                        echo '<div class="name">';
                            echo $item['name'];
                        echo '</div>';
                    echo '</div>';
                }
            ?>
            <!-- <div class="box">
                <div class="price">
                    <h6>
                        Best PRICE
                    </h6>
                </div>
                <div class="img-box">
                    <img src="<?= $image ?>i-1.png" alt="">
                </div>
                <div class="name">
                    <h5>
                        Bracelet
                    </h5>
                </div>
            </div> -->
        </div>
    </div>
    <?php include 'includes/footer.php' ?>
</div>