<div class="hero_area">
  <?php 
        $noNavbar2 = '';
        include 'includes/header.php';
        require_once './controllers/ItemsControllers.php';
        require_once './controllers/UsersControllers.php';?>
        
  <!-- slider section -->
  <?php include 'includes/slider.php' ?>
  <!-- end slider section -->
  <!-- end header section -->
</div>

<!-- item section -->

<div class="item_section layout_padding2">
  <div class="container">
    <div class="item_container">
      <div class="box">
        <div class="price">
          <h6>Best PRICE</h6>
        </div>
        <div class="img-box">
          <img src="<?= $image ?>i-1.png" alt="item" />
        </div>
        <div class="name">
          <h5>Bracelet</h5>
        </div>
      </div>
      <div class="box">
        <div class="price">
          <h6>Best PRICE</h6>
        </div>
        <div class="img-box">
          <img src="<?= $image ?>i-2.png" alt="item" />
        </div>
        <div class="name">
          <h5>Ring</h5>
        </div>
      </div>
      <div class="box">
        <div class="price">
          <h6>Best PRICE</h6>
        </div>
        <div class="img-box">
          <img src="<?= $image ?>i-3.png" alt="item" />
        </div>
        <div class="name">
          <h5>Earings</h5>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- end item section -->

<!-- about section -->

<section class="about_section layout_padding2-top layout_padding-bottom">
  <div class="design-box">
    <img src="<?= $image ?>design-2.png" alt="" />
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="detail-box">
          <div class="heading_container">
            <h2>About M.R.A Shop Shop</h2>
          </div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
            enim ad minim veniam, quis nostrudLorem ipsum dolor sit amet,
            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis
            nostrud
          </p>
          <div>
            <a href=""> Read More </a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="img-box">
          <img src="<?= $image ?>about-img.png" alt="" />
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end about section -->

<!-- price section -->

<section class="price_section layout_padding">
  <div class="container">
    <div class="heading_container">
      <h2>Our M.R.A Shop Price</h2>
    </div>
    <div class="price_container">
      <div class="box">
        <div class="name">
          <h6>Diamond Ring</h6>
        </div>
        <div class="img-box">
          <img src="<?= $image ?>i-4.png" alt="" />
        </div>
        <div class="detail-box">
          <h5>$<span>1000.00</span></h5>
          <a href=""> Buy Now </a>
        </div>
      </div>
      <div class="box">
        <div class="name">
          <h6>Diamond Ring</h6>
        </div>
        <div class="img-box">
          <img src="<?= $image ?>i-2.png" alt="" />
        </div>
        <div class="detail-box">
          <h5>$<span>1000.00</span></h5>
          <a href=""> Buy Now </a>
        </div>
      </div>
      <div class="box">
        <div class="name">
          <h6>Diamond Ring</h6>
        </div>
        <div class="img-box">
          <img src="<?= $image ?>i-3.png" alt="" />
        </div>
        <div class="detail-box">
          <h5>$<span>1000.00</span></h5>
          <a href=""> Buy Now </a>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-center">
      <a href="" class="price_btn"> See More </a>
    </div>
  </div>
</section>

<!-- end price section -->

<!-- ring section -->

<section class="ring_section layout_padding">
  <div class="design-box">
    <img src="<?= $image ?>design-1.png" alt="" />
  </div>
  <div class="container">
    <div class="ring_container layout_padding2">
      <div class="row">
        <div class="col-md-5">
          <div class="detail-box">
            <h4>special</h4>
            <h2>Wedding Ring</h2>
            <a href=""> Buy Now </a>
          </div>
        </div>
        <div class="col-md-7">
          <div class="img-box">
            <img src="<?= $image ?>ring-img.jpg" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end ring section -->

<!-- client section -->

<?php include 'includes/slider2.php' ?>


<!-- end client section -->
<?php include 'includes/footer.php' ?>