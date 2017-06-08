
 <?php include ROOT.'/Views/Admin/adminheader.php'; ?>
    <div class="adminContent">
        <div class="container">
            <div class="admin-category clearfix">
                <h1>Add brand <a class="btn" href="../">&larr;</a></h1>
                <div class="content-wrapper one_column">
                    <form class="row" action="#" method="post" enctype="multipart/form-data">

                        <input type="text" name="name" placeholder="name" required><br>

                        <input type="email" name="email" placeholder="email" required><br> 

                        <input type="password" name="password" placeholder="password" required><br>
                        <!-- <p><label for='sel_type'>User type</label></p> -->
                        <select name="user_type" id="sel_type">
                            <option value="">Select user type</option>
                            <option value="admin">admin</option>
                            <option value="user">user</option>
                        </select>

                        <button type="submit" class="btn btn-success">Dodaj</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /container -->
</body>

</html>
