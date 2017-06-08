 <?php include ROOT.'/Views/Admin/adminheader.php'; ?>

    <div class="adminContent">
        <div class="container">
            <div class="admin-category clearfix">
                <h1>Edycja produktu <a class="btn" href="../">&larr;</a></h1>
                <div class="content-wrapper">
                    <form class="row" action="#" method="post">
                        <label>nazwa produktu</label><br />
                        <input name="productName" type="text" placeholder="product name" value="<?php echo $data['productName']; ?>"><br />
                        <label>opis</label><br />
                        <textarea name="productDescription" placeholder="description" id="" cols="30" rows="10" value="<?php echo $data['productDescription'];?>"></textarea><br />
                        <label>ilość</label><br />
                        <input name="quantityInStock" type="text" placeholder="quantity" value="<?php echo $data['quantityInStock']; ?>"><br />
                        <label>cena</label><br />
                        <input name="buyPrice" type="text" placeholder="price" value="<?php echo $data['buyPrice']; ?>"><br />
                        <label>Przechowywanie</label><br />
                        <input name="warehouseCode" type="text" placeholder="warehouse" value="<?php echo $data['warehouseCode']; ?>"><br />
                        <!-- <label>Kategoria ( type of product )</label> -->

                        <label for="">Obrazek główny</label><br>
                        <img src="../../../<?php echo $data['main_img']; ?>" alt="main_img" width="200">

                        <label for="">dodatkowe zdjęcia</label><br>
                        <!-- <img src="../<?php echo $data['main_img']; ?>" alt="main_img"> -->

                        <br>
                        <button type="submit" class="btn btn-success">Edytuj</button>
                        <!-- <a class="btn" href="index.php">Powrot</a> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /container -->
</body>

</html>
