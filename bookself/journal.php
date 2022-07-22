<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>About Journals | BookSelf</title>
	<link rel="icon" type="image/ico" href="./img/logo.jpg" />
	<!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<?php include('nav.php'); ?>
    <section class="portfolio section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-5">
						<h2>It's Always Great to Learn!</h2>
						<p>Ohh! You are trying to learn about<br>
						Journals.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4"><img alt="Refrence Picture of a Journal" class="img-fluid" src="img/journal_ref.jpg"></div>
				<div class="col-md-8">
                    <h3>Journals</h3>
                    <p>“How often do we tell our own life story? How often do we adjust, embellish, make sly cuts? And the longer life goes on, the fewer are those around to challenge our account, to remind us that our life is not our life, merely the story we have told about our life. Told to others, but—mainly—to ourselves.”</p>
                    <p><em>- Julian Barnes, The Sense of an Ending</em></p>
                    <p>Reading about other's life and their true story help us to understand the situation and the daily lives of the people during the timeframe. We can also learn about the people who got success in various field and how they were able to achieve such a great success in their life. The difficult times, joyful moment and horrible moment which occured will surely changes the views of you towards various things in life. It also make us emotional because of various incident which occured in writer's life. Things which are taken in granted today are being struggled by majority of people which has dark background of every major changes in the world.</p>
                    <p>We can find various Journals of various time period some of them are thousands of years old which mostly tell of various places when the writer visited the place. The life of people mentioned by various travellers of the places and the rulers of those place give us the vital information about the culture and daily lives of people during that period. The system of ruling applied by various rulers can be also found there where we can also see huge change in the ruling system of a single ruler in various period of time. Many of various important people used to write their own daily incident which is regarded as most accurate form of history present.</p>
                    <p>By knowing the daily lives of people, we can see the clear patter of changes in them and understand why they have taken such a drastic steps and change their fate in later future.</p>
                    <p>Do read Journals... Get started from today.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- -->
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