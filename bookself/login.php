<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>LogIn | BookSelf</title>
	<link rel="icon" type="image/ico" href="./img/logo.jpg" />
	<!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<?php include('nav.php'); ?>
	<section class="section-padding">
		<div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
    		<div class="container">
    		  <div class="row gx-lg-5 align-items-center">
        		<div class="col-lg-6 mb-5 mb-lg-0">
       			   <h1 class="my-5 display-3 fw-bold ls-tight">
            			The best option for you <br />
            			<span class="text-primary">and your business</span>
          			</h1>
          			<p style="color: hsl(217, 10%, 50.8%)">
            			We can help you to solve your problem related to Books and various others. The collection of books help anyone to study the need and the current situation of the book market.
          			</p>
        		</div>
        		<!-- Set up and text -->
        		<div class="col-lg-6 mb-5 mb-lg-0">
          			<div class="card">
            			<div class="card-body py-5 px-md-5">
            			  <form method="post" action="action.php">
			                <div class="row">
             			     <div class="col-md-6 mb-4">
             			       	<div class="form-outline">
             			       		<lable style="color: crimson; font-size: 25px;">Sign In</lable>
                			    </div>
    			             </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3" class="form-control" name="mail" required />
                  <label class="form-label" for="form3Example3">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4" class="form-control" name="pwd" required />
                  <label class="form-label" for="form3Example4">Password</label>
                </div>

                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                  <label class="form-check-label" for="form2Example33">
                    Subscribe to our newsletter
                  </label>
                </div>

                <!-- Submit button -->
                <div class="text-center">
                <button type="submit" class="btn btn-primary btn-block mb-4" name="login">
                  Sign in
                </button>
            	</div>

                <!-- Register buttons -->
                <div class="text-center">
                  <p>Don't have any account?</p>
                  <p><a href="regestration.php" style="text-decoration: none;">Register here.</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
	<footer class="bg-dark p-2 text-center">
		<div class="container">
			<p class="text-white">All Right Reserved By @BookSelf | &copy; 2022</p>
			<p class="text-white">Made with <i class="bi bi-heart-fill"></i> by Rohan Thapa</p>
		</div>
	</footer>
	<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>