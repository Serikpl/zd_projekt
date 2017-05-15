<?php include ROOT.'/Views/header.php'; ?>

<!-- section products on main -->
            <section>
                <div class="container">

                    <div class="home-products padding-vertical-60">
                        <div class="row">
                            <div class="col-md-12 col-sm-6">
  								<h1 class="text-center">Products</h1>

                                <div class="row brands">
                                    <ul class="brands-list">
                                            <li class="but-black">
                                                <a href="#">
                                                    <?php echo $brand['brand_name']; ?>
                                                </a>
                                            </li>

                                    </ul>
                                </div>

                                <div class="products row">
																										
        						<?php 

// loop

        						foreach ($products as $row) {
									// $brand = Brand::getOneBrand($row['Brand_id']);								
								?>                              
									<!-- product -->
                                    <div class="product col-md-4 col-sm-12 product-grid">
                                        <div class="product-media">
                                            <div class="product-thumbnail">
                                              <a href="product/<?php echo $row['productCode']; ?>" title="">
                                                  
                                                    <img src="/<?php echo $row['main_img']; ?>" alt="" class="current">
                                                   <!--  <img src="html/hosoren/img/samples/products/index/clothing/2.jpg" alt=""> -->
                                              </a>
                                            </div>
                                            <!-- /.product-thumbnail -->


                                            <div class="product-hover">
                                                <div class="product-actions">
                                                    <a href="#" class="awe-button add-to-cart" data-toggle="tooltip" data-id='<?php echo $row['productCode']; ?>' title="Add to cart">
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
                                    				<a href="product/<?php echo $row['productCode']; ?>"><?php echo $row['productName']; ?></a>
                                					</h2>
                                            <!-- /.product-product -->

                                            <div class="product-category">
                                                <!-- <span><?php echo $brand['brand_name']; ?></span> -->
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


<?php include ROOT.'/Views/footer.php'; ?>