<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>About US | BookSelf</title>
	<link rel="icon" type="image/ico" href="./img/logo.jpg" />
	<!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<?php include('nav.php'); ?>
	<section class="about section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-12 ps-lg-5 mt-md-5">
					<div class="about-text">
						<h2>About US</h2>
						<p>BookSelf is an online book review platform where anyone who are logged in can review about any book and also make the request for the new books to be added in the website through the admin. They can also request for the changes of the book. There will be easier way of finding the perfect deal on the book too as the website will direct to the various platform where we can buy the book too. It will also make the comparision between various online book store who sell the same book. It will perform all the task like finding the book and checking of the prices of the book in various platform also which will be very useful to various people. There will be also the review section where people who have already read the book can review on the book. The review of the book will be protected as it is valuable only when there is the violation of the policy and negative and hate review on the book which distrub and threat other the review will be taken down by the admin of the website.</p>
						<p>Some Features of the Website are:</p>
						<ul>
							<li type="none"><i class="bi bi-arrow-right"></i> It help us to find the books easily through review.</li> <!-- The none type is incompatiable in Firefox browser and works fine in other like Edge, Brave and Chrome where I have tested -->
							<li type="none"><i class="bi bi-arrow-right"></i> You can easily choose the next book to read for next time.</li>
							<li type="none"><i class="bi bi-arrow-right"></i> You can find other bookworm who are nerd towards the book.</li>
							<li type="none"><i class="bi bi-arrow-right"></i> The author and writer of the book can easily get the feedback on the book.</li>
						</ul>
						<p>Since, the website is useful there are many flaws like we can not buy the book but that is not a problem as it will direct to various site where you can buy them. The website is the group for the bookworm where they can discuss about the books and also recommend for the next book which other should read the next during their free time. It also help to sort the book for future read.</p>
						<h4 id="services">Services Provided by the Us</h4>
						<p>Some of the services we provide are:</p>
						<ul>
							<li type="none"><i class="bi bi-caret-right"></i> Good Environment for Bookworms.</li>
							<li type="none"><i class="bi bi-caret-right"></i> Communication among the members.</li>
							<li type="none"><i class="bi bi-caret-right"></i> Proper reviews on the book.</li>
						</ul>
						<h5>Best Quality</h5>
						<p>The user interface which we provide is very friendly and we only provide the reviews from the reader of high quality books. The quality which we provide can be guaranted by us. The services can be trusted by anyone. We make you feel easy to find your next book to read.</p>
						<h5>Sustainability</h5>
						<p>The reviews of our books are genuine and are only provided so other can know much about the books which they are planning. We continiously work for the protection of the environment as well. We work in preservation of the nature. As we are from Nepal which is very vulurable to changes in environment we work to prevent such a harmful things from occuring.</p>
						<h5>Integrity</h5>
						<p>We provide the platform for everyone to tell about their thoughts. We don't interfer to anyone reviews unless it hurts other. There are integrity in detail information which are presented here. We make sure there is the use of genuine information about the book. If any error in information found about the books we change them in the current moment of finding it.</p>
						<hr />
						<p>As Books are very important for the people to learn new skills and have perfect knowledge about various topics. Start Learning Books from Today!</p>
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