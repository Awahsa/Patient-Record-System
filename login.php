<?php include('header.php'); ?>





	
	<div class="login" style="background-color:#fff;">
		<h1 class="text-center" style="background-color:#0616BC;color: #fff;padding: 5px;">User Login</h1>
		
		<form action="" method="post" class="">
			<div class="col-md-12">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<label>
							Email: <input type="email" name="email"  placeholder="email" required>
					</label><br><br>
					<label>
							Password: <input type="password" name="password"  placeholder="password" required>
					</label><br><br>
					
					
					
						<input type="submit" value="Login" name="submit">
					
					
			<?php 
		
				// $_SESSION['userstatus']="";

							include('config.php');
							if(isset($_POST["submit"])){
							$sql= "SELECT * FROM donarregistration WHERE email= '" . $_POST["email"]."' AND password= '" . $_POST["password"]."'";

							$result = $conn->query($sql);

									if ($result->num_rows > 0) {
											// $_SESSION["email"]= $_POST["email"];
											// $_SESSION['userstatus']= "yes";
										    echo "<script>location.replace('donor/index.php');</script>";
												// echo "u are supposed to redirect to ur profile";
										} else {
										    echo "<span style='color:red;'>Invalid username or password</span>";
										}
						$conn->close();		
					}
					
 			?>
			
			
			
		</form><br><br>
			

					Not A User?<a href="allregistration.php" style="color:#C30">Click here</a> to Register.



			

				</div>
				<div class="col-md-4"></div>
			</div>
			
		
	</div>
	
	

	
 <?php include(''); ?>


	
	</div>




	<script src="js/bootstrap.min.js"></script>


 
			



	
</body>
</html>
