<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>BookSelf | An Online Book Review</title>
	<link rel="icon" type="image/ico" href="./img/logo.jpg" />
	<!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<?php include('nav.php'); ?>
	<div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
		<div class="carousel-indicators">
			<button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" type="button"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img alt="..." class="d-block w-100" src="img/slider1.jpg">
				<div class="carousel-caption">
					<h5>History were Written</h5>
					<p>Reading a book is always great as it store various incidents of history with it and we can know about various times.</p>
					<p><a class="btn btn-warning mt-3" href="books.php">Get Started</a></p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="img/slider2.jpg">
				<div class="carousel-caption">
					<h5>Great to have Collection</h5>
					<p>Books are always one's friend, it help to make us intellectual and help us to get deeper in various topics.</p>
					<p><a class="btn btn-warning mt-3" href="books.php">Get Started</a></p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="img/slider3.jpg">
				<div class="carousel-caption">
					<h5>Keep Learning More</h5>
					<p>Having knowledge is always great. We are a curious creatures who seek to answer various mystery around us and it might help.</p>
					<p><a class="btn btn-warning mt-3" href="books.php">Get Started</a></p>
				</div>
			</div>
		</div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span></button> <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
	</div><!-- about section starts -->
	<section class="about section-padding" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12 col-12">
					<div class="about-img"><img alt="" class="img-fluid" src="img/bookshelf.jpg"></div>
				</div>
				<div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
					<div class="about-text">
						<h2>We Provide the Best Quality<br>
						Services Ever</h2>
						<p>We are an Online Book Review company who has the list of huge amount of books which you can review and check, also look for the next book you want to study in your free time. We also make it easier to find the books which you are looking for right now and compare the prices of them in various platform so you can get a good deal.</p>
						<a class="btn btn-warning" href="about.php">Learn More</a>
					</div>
				</div>
			</div>
		</div>
	</section><!-- about section Ends -->
	<!-- services section Starts -->
	<section class="services section-padding" id="services">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-5">
						<h2>Our Services</h2>
						<p>Helping you in every way is our policy<br>
						and your satisfaction is our assets.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card text-white text-center bg-dark pb-2">
						<div class="card-body">
							<i class="bi bi-laptop"></i>
							<h3 class="card-title">Best Quality</h3>
							<p class="lead">The user interface which we provide is very friendly and we only provide the reviews from the reader of high quality books.</p>
							<button class="btn bg-warning text-dark" onclick="window.location.href='about.php#services';">Read More</button>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card text-white text-center bg-dark pb-2">
						<div class="card-body">
							<i class="bi bi-journal"></i>
							<h3 class="card-title">Sustainability</h3>
							<p class="lead">The reviews of our books are genuine and are only provided so other can know much about the books which they are planning.</p>
							<button class="btn bg-warning text-dark" onclick="window.location.href='about.php#services';">Read More</button>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card text-white text-center bg-dark pb-2">
						<div class="card-body">
							<i class="bi bi-intersect"></i>
							<h3 class="card-title">Integrity</h3>
							<p class="lead">We provide the platform for everyone to tell about their thoughts. We don't interfer to anyone reviews unless it hurts other.</p>
							<button class="btn bg-warning text-dark" onclick="window.location.href='about.php#services';">Read More</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- services section Ends -->
	<!-- portfolio strats -->
	<section class="portfolio section-padding" id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-5">
						<h2>Our Books</h2>
						<p>We do have the huge collections of books from where<br>
						you can choose any to know about.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card text-light text-center bg-white pb-2">
						<div class="card-body text-dark">
							<div class="img-area mb-4"><img alt="Reference Book Image for Novels" class="img-fluid" src="img/novel_ref.jpg"></div>
							<h3 class="card-title">Novels</h3>
							<p class="lead">Novels are a fictional writing about fictional character or an incident which never occured which might be supernatural or Sci-Fi.</p>
							<button class="btn bg-warning text-dark" onclick="window.location.href='novel.php';">Learn More</button>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card text-light text-center bg-white pb-2">
						<div class="card-body text-dark">
							<div class="img-area mb-4"><img alt="Reference Book Image for Journals" class="img-fluid" src="img/journal_ref.jpg"></div>
							<h3 class="card-title">Journals</h3>
							<p class="lead">Journels are genrally reffered to a short notes or notebook or diary of someone. It mostly have the day to day incident of someone.</p>
							<button class="btn bg-warning text-dark" onclick="window.location.href='journal.php';">Learn More</button>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card text-light text-center bg-white pb-2">
						<div class="card-body text-dark">
							<div class="img-area mb-4"><img alt="Reference Book Image for Romantic" class="img-fluid" src="img/romantic_ref.jpg"></div>
							<h3 class="card-title">Romantic</h3>
							<p class="lead">Romantic books are always best. The love and romance is very powerful. It makes us the humans which indeed have respect for others.</p>
							<button class="btn bg-warning text-dark" onclick="window.location.href='romantic.php';">Learn More</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- portfolio ends -->
	<!-- team starts -->
	<section class="team section-padding" id="team">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-5">
						<h2>Our Team</h2>
						<p>Having a great team of people who are working<br>
						to provide great service.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-6 col-lg-3">
					<div class="card text-center">
						<div class="card-body">
							<img alt="Random Picture for Reference" class="img-fluid rounded-circle" src="img/rohan.jpg">
							<h3 class="card-title py-2">Rohan Thapa</h3>
							<p class="card-text">Hi, I'm Rohan Thapa the creator of this project. This website is for the review of the book and not for buying them.</p>
							<p class="card-text"><em>Follow On -</em></p>
							<p class="socials">
								<a href="https://www.twitter.com/" target="_blank"><i class="bi bi-twitter text-dark mx-1"></i></a> 
								<a href="https://ww.facebook.com/" target="_blank"><i class="bi bi-facebook text-dark mx-1"></i></a> 
								<a href="https://www.linkedin.com/" target="_blank"><i class="bi bi-linkedin text-dark mx-1"></i></a> 
								<a href="https://www.instagram.com/" target="_blank"><i class="bi bi-instagram text-dark mx-1"></i></a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3">
					<div class="card text-center">
						<div class="card-body">
							<img alt="Random Picture for Reference" class="img-fluid rounded-circle" src="img/ref_pic.png">
							<h3 class="card-title py-2">Someone</h3>
							<p class="card-text">Since, this is my coursework where I am alone so I don't have any team but I kept it for just a reference.</p>
							<p class="card-text"><em>Follow On -</em></p>
							<p class="socials">
								<a href="https://www.twitter.com/" target="_blank"><i class="bi bi-twitter text-dark mx-1"></i></a> 
								<a href="https://ww.facebook.com/" target="_blank"><i class="bi bi-facebook text-dark mx-1"></i></a> 
								<a href="https://www.linkedin.com/" target="_blank"><i class="bi bi-linkedin text-dark mx-1"></i></a> 
								<a href="https://www.instagram.com/" target="_blank"><i class="bi bi-instagram text-dark mx-1"></i></a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3">
					<div class="card text-center">
						<div class="card-body">
							<img alt="Random Picture for Reference" class="img-fluid rounded-circle" src="img/ref_pic.png">
							<h3 class="card-title py-2">Another</h3>
							<p class="card-text">This is just for the showing the members of the website and can be changes later but right now I don't have.</p>
							<p class="card-text"><em>Follow On -</em></p>
							<p class="socials">
								<a href="https://www.twitter.com/" target="_blank"><i class="bi bi-twitter text-dark mx-1"></i></a> 
								<a href="https://ww.facebook.com/" target="_blank"><i class="bi bi-facebook text-dark mx-1"></i></a>  
								<a href="https://www.linkedin.com/" target="_blank"><i class="bi bi-linkedin text-dark mx-1"></i></a> 
								<a href="https://www.instagram.com/" target="_blank"><i class="bi bi-instagram text-dark mx-1"></i></a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3">
					<div class="card text-center">
						<div class="card-body">
							<img alt="Random Picture for Reference" class="img-fluid rounded-circle" src="img/ref_pic.png">
							<h3 class="card-title py-2">Lastly</h3>
							<p class="card-text">Team is important but this is a individual project which is done by me so I have put only my picture and description.</p>
							<p class="card-text"><em>Follow On -</em></p>
							<p class="socials">
								<a href="https://www.twitter.com/" target="_blank"><i class="bi bi-twitter text-dark mx-1"></i></a> 
								<a href="https://ww.facebook.com/" target="_blank"><i class="bi bi-facebook text-dark mx-1"></i></a> 
								<a href="https://www.linkedin.com/" target="_blank"><i class="bi bi-linkedin text-dark mx-1"></i></a> 
								<a href="https://www.instagram.com/" target="_blank"><i class="bi bi-instagram text-dark mx-1"></i></a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- team ends -->
	<!-- Contact starts -->
	<section class="contact section-padding" id="contact">
		<div class="container mt-5 mb-5">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-5">
						<h2>Contact Us</h2>
						<p>Let us have some communication and exchange of ideas<br>
						through any medium.</p>
					</div>
				</div>
			</div>
			<div class="row m-0">
				<div class="col-md-8">
					<form class="form-horizontal" method="post" action="comment.php">
						<fieldset>
							<legend>Contact US</legend>
							<div class="form-group">
								<label class="col-md-4 control-label" for="person_name">Name:</label>
								<div class="col-md-8">
									<input type="text" name="fullname" class="form-control input-md" required="" placeholder="Name" />
								</div>
							</div><br />
							<div class="form-group">
								<label class="col-md-4 control-label" for="person_email">E-Mail:</label>
								<div class="col-md-8">
									<input type="email" name="email" class="form-control input-md" required="" placeholder="E-Mail" />
								</div>
							</div><br />
							<div class="form-group">
								<label class="col-md-4" for="person_comment">Message</label>
								<div class="col-md-8">
									<textarea class="form-control" name="msg" placeholder="Message" required></textarea>
								</div>
							</div><br />
							<div class="form-group">
								<div class="col-md-4">
									<button type="submit" class="btn btn-primary" name="webmsg">Send <i class="bi bi-send"></i></button>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
				<div class="col-md-4 p-0 pt-4 pb-4">
					<h5>Find US</h5>
					<p><i class="bi bi-geo-alt-fill"></i> <em>Location:</em><br />Buddhanagar, New Baneshwor, Kathmandu, Bagmati Pradesh, Nepal</p>
					<p><i class="bi bi-telephone-fill"></i> <em>Tel-Phone:</em><br /><a href="tel:+977-01-510000" class="contact-link">+977-01-510000</a></p>
					<p><i class="bi bi-envelope-fill"></i> <em>E-Mail:</em><br /><a href="mailto:mailus@bookself.com" class="contact-link">mailus@bookself.com</a></p>
				</div>
			</div>
		</div>
	</section><!-- contact ends -->
	<!-- footer starts -->
	<footer class="bg-dark p-2 text-center">
		<div class="container">
			<p class="text-white">All Right Reserved By @BookSelf | &copy; 2022</p>
			<p class="text-white">Made with <i class="bi bi-heart-fill"></i> by Rohan Thapa</p>
		</div>
	</footer>
	<!-- footer ends -->
	<button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
  		<i class="bi bi-arrow-up"></i>
	</button>
	
	<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
    	//Get the button
		let mybutton = document.getElementById("btn-back-to-top");

		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function () {
		scrollFunction();
		};

		function scrollFunction() {
		if (
			document.body.scrollTop > 20 ||
			document.documentElement.scrollTop > 20
		) {
		mybutton.style.display = "block";
		} else {
		mybutton.style.display = "none";
		}
		}
		// When the user clicks on the button, scroll to the top of the document
		mybutton.addEventListener("click", backToTop);

		function backToTop() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
		}
    </script>
</body>
</html>
