<?php include ROOT.'/Views/header.php'; ?>

<div class="about container">

    <!-- <div class="new-product w100 prodys"> -->

        <div class="account_grid">
            <div class="col-md-6 login-right">
                <h3>REGISTERED CUSTOMERS</h3>
                <p>If you have an account with us, please log in.</p>

                <?php 
                   if($logined != false){
                        echo "Logined!";
                    } 
                    else{?>

                    <div class="errors">
                        <?php 
                            if(!empty($errors))
                            {
                                echo $errors[0];                                        
                            } 
                        ?>
                    </div>

                    <form action="#" method="post" class="form_r contact_form">
                        <p>
                            <span>Email Address<label>*</label></span>
                            <input type="email" name="email" placeholder="email" required>
                        </p>
                        <p>
                            <span>Password<label>*</label></span>
                            <input type="password" name="password" placeholder="password" required>
                        </p>
                        
                        <input type="submit" value="Login" name="submit"> <br>
                        <a class="forgot" href="#">Forgot Your Password?</a>
                    </form>

                <?php  
                    }
                ?>
            </div>
            <div class="col-md-6 login-left">
                <h3>NEW CUSTOMERS</h3>
                <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                <a class="acount-btn" href="/register">Create an Account</a>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="clearfix"></div>

<?php include ROOT.'/Views/footer.php'; ?>