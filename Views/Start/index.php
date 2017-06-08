<?php include ROOT.'/Views/header.php'; ?>

        <!-- here start main section -->
        <!-- Banner Slide Starts Here -->
        <div class="slider">
            <!-- Slideshow 3 -->
            <ul class="rslides" id="slider3">
                <li>
                    <div class="banner">
                        <h1>What a beautiful bike</h1>
                        <h2>timeless, atmospheric<br>& uncredible bikes!</h2>
                    </div>
                </li>
                <li>
                    <div class="banner banner2">
                        <h1>What a beautiful bike</h1>
                        <h2>timeless, atmospheric<br>& uncredible bikes!</h2>
                    </div>
                </li>
                <li>
                    <div class="banner banner1">
                        <h1>What a beautiful bike</h1>
                        <h2>timeless, atmospheric<br>& uncredible bikes!</h2>
                    </div>
                </li>
            </ul>
            <ul id="slider3-pager">
                <li>
                    <a href="#"><img src="/assets/images/matt-saling-212458.jpg" alt=""></a>
                </li>
                <li>
                    <a href="#"><img src="/assets/images/asya-vee-203720.jpg" alt=""></a>
                </li>
                <li>
                    <a href="#"><img src="/assets/images/natasza-remesz-15286.jpg" alt=""></a>
                </li>
            </ul>
            <div class="clearfix"> </div>
        </div>
        <!-- Banner Slide Ends Here -->
        <!-- Best Seller Starts Here -->
        <div class="best-seller mt-minus20">
            <div class="best-seller-row">
                <div class="seller-column">
                    <div class="sale-box">
                        <span class="on_sale title_shop">bestseller</span>
                    </div>
                    <img src="/assets/images/biscyle1.jpg" alt="" class="seller-img">
                </div>
                <div class="seller-column1">
                    <h3>Sale</h3>
                    <span class="sale-nip"></span>
                    <h4>Bicycle RetroSyperb Vii #1</h4>
                    <small>by Rodriguez Else</small>
                    <p>299.99$</p>
                    <div class="price">
                        <a href="single.php">Add to Shopping bag</a>
                        <span class="rating">Rating: 5.0 <i class="ratings"></i></span>
                    </div>
                    <p class="customer">Ask the Customer a Question</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="biseller-info">
                <ul id="flexiselDemo3">
                    <?php 
                        foreach ($products as $row) 
                        {
                            $brand = Brand::getOneBrand($row['brand_id']);
                    ?> 
                    <li>
                        <div class="biseller-column">
                        <img src="/<?php echo $row['main_img']; ?>" alt="" class="veiw-img">
                            <div class="veiw-img-mark">
                                <a href="product/<?php echo $row['productCode'];?>">
                                View</a>
                            </div>
                        <div class="biseller-name">
                            <h4><?php echo $row['productName']; ?></h4>
                            <small>by <?php echo $brand['brand_name']; ?></small>
                        </div>
                        <div class="biseller-name1">
                            <p><?php echo $row['buyPrice']; ?>$</p>
                        </div>
                        <div class="clearfix"></div>
                        <div class="price-s">
                            <a href="#" data-id='<?php echo $row['productCode']; ?>' class="add-to-cart">Add to cart</a>
                        </div>
                        
                        </div>
                    </li>
                    <?php    
                        }
                    ?>


                </ul>
            </div>
        </div><!-- end .best-seller -->

<!-- section products on main -->


<?php include ROOT.'/Views/footer.php'; ?>