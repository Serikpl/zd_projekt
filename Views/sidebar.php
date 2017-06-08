<div class="product">
    <div class="product-listy">
        <h3>Our Products</h3>
        <ul class="product-list">
            <?php foreach ($brands as $row) { 

                if($row['brand_name'] == $brand_selected):?>
                    <li class="but-black active-brand">
                <?php else: ?>
                    <li class="but-black">
                <?php endif; ?>      
                    <a href="/brand/<?php echo $row['id']; ?>">
                        <?php echo $row['brand_name']; ?>
                    </a>
                    </li>

            <?php } ?>
                <!-- <li class="but-black"> -->
                <!-- <a href="../../">ALL BRANDS</a> -->
                <!-- </li> -->
        </ul>
    </div>
    <div class="latest-bis">
        <img src="/assets/images/offer.jpg" class="img-responsive">
        <div class="offer">
            <p>40%</p>
            <small>Top Offer</small>
        </div>
    </div>
    <div class="tags">
        <h4 class="tag_head">Tags Widget</h4>
        <ul class="tags_links">
            <li><a href="#">Kitesurf</a></li>
            <li><a href="#">Super</a></li>
            <li><a href="#">Duper</a></li>
            <li><a href="#">Theme</a></li>
            <li><a href="#">Men</a></li>
            <li><a href="#">Women</a></li>
            <li><a href="#">Equipment</a></li>
            <li><a href="#">Best</a></li>
            <li><a href="#">Accessories</a></li>
            <li><a href="#">Men</a></li>
            <li><a href="#">Apparel</a></li>
            <li><a href="#">Super</a></li>
            <li><a href="#">Duper</a></li>
            <li><a href="#">Theme</a></li>
            <li><a href="#">Responsiv</a></li>
            <li><a href="#">Women</a></li>
            <li><a href="#">Equipment</a></li>
        </ul>
        <a href="#" class="link1">View all tags</a>
    </div>
</div>
