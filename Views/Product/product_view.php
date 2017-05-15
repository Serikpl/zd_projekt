<?php include ROOT.'/Views/header.php'; ?>

<!-- section products on main -->
            <section>
                <div class="container">

                    <div class="home-products padding-vertical-60">
                        <div class="row">
                            <div class="col-md-12 col-sm-6">

                                <!-- product -->
                                    <div class="products single-view product-grid row">
                                        
                                        <div class="product-media col-md-6 col-sm-12">
                                            <div class="product-thumbnail">
                                                  
                                                    <img src="../<?php echo $product['main_img']; ?>" alt="" class="current">
                                                    
                                            </div>
                                            <!-- /.product-thumbnail -->
                                            
                                            <div class="additional_imgs">
                                                
                                            </div>
                                            <!-- /.additional_imgs -->

                                        </div>
                                        <!-- /.product-media -->

                                        <div class="product-body col-md-6 col-sm-12">
                                            <h1 class="product-name">
                                    				<?php echo $product['productName']; ?>
                                			</h1>
                                            <!-- /.product-product -->

                                            <div class="product-category">
                                                <h4>Brand: </h4>
                                                <span><?php echo $brand_name; ?></span>
                                            </div>
                                            <!-- /.product-category -->

                                            <div class="product-price">
                                                <h4>Price: </h4>
                                                <span class="amount"><?php echo $product['buyPrice']; ?>$</span>
                                            </div>
                                            <!-- /.product-price -->

                                            <div class="product-desc">
                                                <h4>Description: </h4>
                                                <p>
                                                    <?php echo $product['productDescription']; ?>
                                                </p>    
                                            </div>

                                            <div>
                                                <h4>Diametr: </h4>
                                                <p>
                                                    <?php echo $product['diameter']; ?>
                                                </p>    
                                            </div>
                                            <!-- /.product-price -->

                                            <a href="#" class="add-to-cart but-black" data-id="<?php echo $product['productCode']; ?>">Add to card</a>

                                        </div>
                                        <!-- /.product-body -->
    
                                    </div>
                                    <!-- /.product -->
	
                            </div>
                        </div>
                        <!-- /.row -->

                    </div>
                    <!-- /.home-products -->

                </div>
                <!-- /.container -->
            </section>
<!-- section products on main -->


<?php include ROOT.'/Views/footer.php'; ?>