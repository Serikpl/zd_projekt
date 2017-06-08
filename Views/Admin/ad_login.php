<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/assets/css/admin.css">
</head>

<body>
    <div class="adminContent">
        <div class="container">
            <div class="admin-category clearfix">
                        <?php 
                            if(!empty($errors))
                            {
                                foreach ($errors as $error) {
                                    echo '<p>'.$error.'</p>';
                                }                                        
                            } 
                        ?>
        
                <div class="content-wrapper one_column ad_login">

                    <form action="#" method="post">
                                                    
                        <input name="adlogin" type="email" placeholder="login"></p><br>
                        
                        <input name="adpas" type="password" placeholder="password"></p><br>

                        <button type="submit" name='submit' class="btn btn-success">login</button>

                    </form>

                </div>

            </div>
        </div>
    </div>
    <!-- /container -->
</body>

</html>
