<?php include ROOT.'/Views/header.php'; ?>


		<div class="about container">

				
				 <h3 class="new-models">For New Customers</h3>
				 <div class="register">

				  	<form action="#" method="post" class="form_r contact_form"> 

							<h3>REGISTRATION</h3>

							<div class="errors">
								<?php 
									if(!empty($errors))
									{
										echo $errors[0]; 										
									} 

									if(!empty($communicats))
									{
										echo $communicats;
									}
								?>
							</div>

							<p>
								<span>Name<label>*</label></span><br>
								<input type="text" name="name" placeholder="name" required>
							</p>

							<p>
								<span>Email (Login)<label>*</label></span><br>
								<input type="email" name="email" placeholder="email" required> 	
							</p>

							<p>
								<span>Password<label>*</label></span><br>
								<input type="password" name="password" placeholder="password" required> 
							</p>

		
						<div class="register-but">
							<input type="submit" name="submit" value="submit">
						</div>

					</form>

						<div class="clearfix"> </div>
				   </div>
			</div>
			<div class="clearfix"></div>

<?php include ROOT.'/Views/footer.php'; ?>