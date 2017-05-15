<?php require 'us/views/header.php'; ?>

<!-- section products on main -->
            <section>
                <div class="container">

                    <div class="home-products padding-vertical-60">
                        <div class="row">
                            <div class="col-md-12 col-sm-6">
  															<h1>Products</h1>
                                <div class="products owl-carousel" data-items="3">
																										
																	<?php 
																		require 'Products_model.php'; 

																		$products = get_products();

// loop
																		foreach ($products as $row) {
																			
																	?>

																		<!-- product -->
                                    <div class="product product-grid">
                                        <div class="product-media">
                                            <div class="product-thumbnail">
                                              <a href="us/one_product/single_prod_view.php?productCode=<?php echo $row['productCode']; ?>" title="">
                                                  
                                                    <img src="<?php echo $row['main_img']; ?>" alt="" class="current">
                                                    <img src="html/hosoren/img/samples/products/index/clothing/2.jpg" alt="">
                                              </a>
                                            </div>
                                            <!-- /.product-thumbnail -->


                                            <div class="product-hover">
                                                <div class="product-actions">
                                                    <a href="#" class="awe-button product-add-cart" data-toggle="tooltip" title="Add to cart">
                                                        <i class="icon icon-shopping-bag"></i>
                                                    </a>

                                                    <a href="#" class="awe-button product-quick-whistlist" data-toggle="tooltip" title="Add to whistlist">
                                                        <i class="icon icon-star"></i>
                                                    </a>

                                                    <a href="#" class="awe-button product-quick-view" data-toggle="tooltip" title="Quickview">
                                                        <i class="icon icon-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- /.product-hover -->



                                        </div>
                                        <!-- /.product-media -->

                                        <div class="product-body">
                                          <h2 class="product-name">
                                    				<a href="us/one_product/single_prod_view.php?productCode=<?php echo $row['productCode']; ?>"><?php echo $row['productName']; ?></a>
                                					</h2>
                                            <!-- /.product-product -->

                                            <div class="product-category">
                                                <span>Short</span>
                                            </div>
                                            <!-- /.product-category -->

                                            <div class="product-price">

                                                <span class="amount"><?php echo $row['buyPrice']; ?>$</span>

                                            </div>
                                            <!-- /.product-price -->
                                        </div>
                                        <!-- /.product-body -->
                                    </div>
                                    <!-- /.product -->
																	
																	<?php } ?>
					<!-- end loop -->

                                </div>
                                <!-- ./products -->
                            </div>
                        </div>
                        <!-- /.row -->

                    </div>
                    <!-- /.home-products -->

                </div>
                <!-- /.container -->
            </section>
<!-- section products on main -->


<?php require $_SERVER['DOCUMENT_ROOT'].'/study/Project_ZD/us/views/footer.php'; ?>