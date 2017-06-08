<?php include ROOT.'/Views/header.php'; ?>

<!-- main -->
<div class="about">
    <div class="in-develop">
                                <?php 

                                    if($errors != false)
                                        echo $errors;
                                 ?>
    
        <p>Don't worry your transaction data has been successfully saved! <a href="#" class="closepop">&#10005;</a></p>
        <h1>This page is currently in development. <br> In this moment not set up payment service! </h1>
    </div>

<?php include ROOT.'/Views/footer.php'; ?>