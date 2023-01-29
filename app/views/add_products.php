




<div class="form-items">
    <h3 class="col-md-12">Add your product Today</h3>
    <form class="requires-validation" method="POST" action="<?=URLROOT?>/productsControllers/add_products">

        <div class="col-md-12 mt-3">
            <input style="width: 50%;" class="form-control" type="text" name="name" placeholder="product Name" required>
        </div>

        <div class="col-md-12 mt-3">
            <input style="width: 50%;" class="form-control" type="number" name="price" placeholder="price" required>
        </div>

    
        <div class="col-md-12 mt-3">
            <input style="width: 50%;" class="form-control" type="number" name="quantity" placeholder="quantity" required>

        </div>

        <div class="col-md-12 mt-3">
            <input style="width: 50%;" class="form-control" type="file" name="picture" accept="image/png, image/jpeg, image/jpg" placeholder="picture" >
        </div>

        <div class="col-md-12 mt-3">
            <input style="width: 50%;" class="form-control" type="text" name="description" placeholder="Description" required>
        </div>


        <div class="form-button mt-3 col-md-12">
            <button type="submit" name="submit" href="<?=URLROOT?>productsControllers/add_products" class="btn btn-primary">Add</button>
        </div>
        
    </form>
</div>



