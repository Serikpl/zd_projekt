    <?php include ROOT.'/Views/Admin/adminheader.php'; ?>

    <div class="adminContent">
        <div class="container">
            <div class="admin-category">
                <h1>Statystyka</h1>
                <div class="content-wrapper">
                    <div class="product_list statistics">
                    
                        <pre id="date_statisctics">
                            <!-- <?php var_dump($data); ?> -->
                        </pre>

                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- some scripts for charts HERE -->
    <!-- <script src="/assets/js/highcharts.js"></script> -->
    <!-- its from  https://www.highcharts.com/docs/getting-started/installation -->
    
<script src="/assets/js/jquery-1.11.0.min.js?ver=1"></script>

    <!-- AJAX here -->
    <script>
     $(document).ready(function() {

        // $('#btn_stat').click(function() {
            $.post('/ad/stat/amounts/', {}, function(data) {
                $('#date_statisctics').html(data);
                console.log(data);
            });

            return false;

        // });

    });       

    </script>


</body>

</html>
