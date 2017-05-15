<?php include ROOT.'/Views/header.php'; ?>

            <section>
                <div class="container">

                    <div class="home-products padding-vertical-60">
                        <div class="row">
                            <div class="col-md-12 col-sm-6">
						  								<h1>Products in Cart</h1>
						                  <div class="products row">
																<div class="table-responsive">
																	<table class="table table-hover">
																		<thead>
																	    <tr>
																	    	<th>№ ID</th>
																	      	<!-- <th>Brand</th> -->
																	      	<th>Product name</th>
																	      	<th>Price</th>
																	      	<th>Quantity</th>
																	      	<th>Remove</th>
																	    </tr>
																		</thead>
																		<tbody>
									        						<?php 
																			// loop
									        						foreach ($products as $row) {							
																			?>
																			<tr>
																        <th><?php echo $row['productCode']; ?></th>
																        <th><?php echo $row['productName']; ?></th>
																        <th><?php echo $row['buyPrice']; ?></th>
																        <th><?php echo $row['quantity']; ?></th>
																        <th><a data-id=<?php echo $row['productCode']; ?> class='del-prod' href="/cart/del/<?php echo $row['productCode']; ?>">X</a></th>
																      </tr>      
																										
																			<?php } ?>
											           			<!-- end loop -->
																		</tbody>
																	</table>
																</div>
                              </div>
                                <!-- ./products -->
                            	
                            	<div class="total">
                            		<h2>Total price: <?php echo $common_price; ?></h2>
                            	</div>

															<button class="but-black">Buy products</button>
													
                            </div>
                        </div>
                        <!-- /.row -->

                    </div>
                    <!-- /.home-products -->

                </div>
                <!-- /.container -->
            </section>

<?php include ROOT.'/Views/footer.php'; ?>