<?php include("include/head.php");
include("include/nav.php");?>






<div class="jumbotron bg-light p-4">
	<div class="container">
		<div class="card bg-grey">
			
			<div class="row">
				
				<div class="col-sm-12 col-lg-5 col-md-5 p-5 ">
					
					<div class="offset-lg-4 col-4 offset-4 mt-4 col-lg-4 bg-white p-1 card text-white  justify-item-center justify-content-center">
						<img src="assets/images/logo1.jpg" class="">
					</div>
					&nbsp;&nbsp;
					<center>Sign in to your Dashboard</center>
					&nbsp;
					<form class="">
						<div class="col-12 form-group p-2">
							<label>Email</label>
							<input type="text" name="" id="" class="form-control bg-white" placeholder="Type your email">
						</div>

						<div class="col-12 form-group p-2">
							<label>Email</label>
							<input type="password" name="" id="" class="form-control" placeholder="Type your password" >
						</div>

						<div class="input-group p-2">
							<input type="checkbox" name="" id="" class="form-check"> &nbsp; Remember Me
							&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
							<a href="#" class="">Forgeten Password ?</a>
						</div>

						<div class=" input-group p-2 ">
							<button type="submit" class="btn btn-outline-primary btn-rounded btn-block">Sign In <i class="icofont-sign-in"></i></button>
						</div>
						&nbsp;&nbsp;
						<span>Don't have an account <a href="#"data-mdb-toggle="modal"
  						data-mdb-target="#createAccountModal">Sign Up</a></span>
					</form>
				</div>

				<!-- for the mask overlaying side -->
				<div class="col-lg-7 col-sm-12 col-md-12 bg-image p-1">
					
					<img src="assets/images/rightimage.png" class="w-100" />
						<div class="mask" style="background-color: rgba(18, 102, 241, 0.6)">
						  <div class="d-flex justify-content-center align-items-center h-100 ">
      						<h3 class="text-white mb-0"><b>Join Our Community</b> <br>

      							be inspired ......... <br><br>

      							<button class="btn btn-md btn-outline-white btn-rounded ">Join <i class="icofont-plus"></i></button>

      						</h3> 
      						
    						</div>
						</div>
		
				</div>

		</div>
	</div>
</div>
</div>










<?php 

include("include/close.php");

?>