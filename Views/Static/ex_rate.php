<?php include ROOT.'/Views/header.php'; ?>
  <!-- here start main section -->

  <!-- main -->
  <section>
    <div class="container">

        <div class="home-products padding-vertical-60">
            <div class="row">
                <div class="col-md-12 col-sm-6">

                  <h1 class="text-center">Exchange rate</h1>

                  <div class="ex_rat_cont">
                  
  									<div id='ex_rate' class="exrate">
  										<table>
  											<thead>	
  												<tr>
  													<th>Currency</th>
  													<th>Rate</th>
  												</tr>
  											</thead>
  											<tbody>
                          <?php foreach($data['rates'] as $key => $value){ ?>
  												<tr>
                            <td><?php echo $data['base'].' - '.$key; ?></td>
  													<td><?php echo $value; ?></td>
  													<!-- <td>0.325</td> -->
  												</tr>
                          <?php } ?>
  											</tbody>
  										</table>
  									</div>
          
                    <div class="other_curr">
                      <h3>Wybierz kurs dla innej waluty</h4>
                      <form action="#" method="post">
                        <select name="currency" id="">
                          <option value="PLN">PLN</option>
                          <option value="GBP">GBP</option>
                          <option value="RUB">RUB</option>
                          <option value="USD">USD</option>
                          <option value="EUR">EUR</option>
                        </select>

                        <input type="submit" name="submit" value="wybierz">
                      </form>
                    </div>  

                    <?php 
                      if(isset($new_data)){
                        echo $new_data;
                      }

                     ?>        

                  </div>

                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.home-products -->

    </div>
    <!-- /.container -->
 	
 	</section>
  <div class="clearfix"></div>
    
<?php include ROOT.'/Views/footer.php'; ?>