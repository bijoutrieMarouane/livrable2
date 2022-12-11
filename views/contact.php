<div class="hero_area">
    <?php
    $noNavbar2 = '';
    include 'includes/header.php';
    require_once './controllers/ItemsControllers.php';
    require_once './controllers/UsersControllers.php';?>
    
    <div class="contact" name="name">
        <div class="titre_contact">
            <h1>
                Contact-nous
            </h1>
        </div>
        <div class="formulaire">
            <div class="image_formulaire">
                <img src="<?= $image ?>contact nous.png" style="width: 100%;height: 100%;" alt="contact">
            </div>
            <form action="" class="form">
                <input type="text" placeholder="Entrer votre Nom et Prénom">
                <input type="email" placeholder="Entrer votre Email">
                <input type="number" placeholder="Entrer votre N ° de Telephone">
                <textarea placeholder="Entrer votre Message"></textarea>
                <input type="submit" class="submit" value="Envoyer">
            </form>

        </div>
    </div>
    <?php include 'includes/footer.php' ?>
</div>