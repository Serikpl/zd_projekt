
 <?php include ROOT.'/Views/Admin/adminheader.php'; ?>
    <div class="adminContent">
        <div class="container">
            <div class="admin-category clearfix">
                <h1>Edycja produktu <a class="btn" href="../">&larr;</a></h1>
                <div class="content-wrapper">
                    <form class="row" action="#" method="post" enctype="multipart/form-data">
                        <p><label>Name of product</label><br />
                            <input name="productName" type="text" placeholder="product name"></p>

                        <p> <label>Brand</label><br />
                            <select name="brand_id" id="">
                            <option value="">Wybierz...</option>
                            <?php foreach ($brands as $row): ?>
                                <option value="<?php echo $row['id'];?>">
                                    <?php echo $row['brand_name'];?>
                                </option>
                            <?php endforeach; ?>
                        </select></p>
                        <p><label>Product description</label><br />
                            <input name="productDescription" type="text" placeholder="description"></p>

                        <p><label>Quantity in Stock</label><br />
                            <input name="quantityInStock" type="text" placeholder="quantity"></p>

                        <p><label>Price</label><br />
                            <input name="buyPrice" type="text" placeholder="price"></p>

                        <p><label>Warehouse</label><br />
                            <input name="warehouseCode" type="text" placeholder="warehouse"></p>

                        <p><label>Recommended: </label><br>
                            <label for="yes_recom">Yes</label>
                            <input name="recommended" id="yes_recom" type="radio" value="1">
                            <label for="no_recom">No</label>
                            <input name="recommended" id="no_recom" type="radio" value="0"></p>

                        <p><label>Diameter</label><br />
                            <input name="diameter" type="number" placeholder="diameter"></p>

                        <p><label>Main image</label>
                            <input type="file" name="main_img"></p>

                        <p>
                            <label for="">Additional images of product</label><br>
                            <input type="file" name="add_imgs[]" multiple>
                        </p>


                        <button type="submit" class="btn btn-success">Dodaj</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /container -->
</body>

</html>
