<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>About Romantic Books | BookSelf</title>
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
						Romantic Books.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4"><img alt="Refrence Picture of a Romantic" class="img-fluid" src="img/romantic_ref.jpg"></div>
				<div class="col-md-8">
                    <h3>Romantic Books</h3>
                    <p>“I can listen no longer in silence. I must speak to you by such means as are within my reach. You pierce my soul. I am half agony, half hope. Tell me not that I am too late, that such precious feelings are gone for ever. I offer myself to you again with a heart even more your own than when you almost broke it, eight years and a half ago. Dare not say that man forgets sooner than woman, that his love has an earlier death. I have loved none but you. Unjust I may have been, weak and resentful I have been, but never inconstant. You alone have brought me to Bath. For you alone, I think and plan. Have you not seen this? Can you fail to have understood my wishes? I had not waited even these ten days, could I have read your feelings, as I think you must have penetrated mine. I can hardly write. I am every instant hearing something which overpowers me. You sink your voice, but I can distinguish the tones of that voice when they would be lost on others. Too good, too excellent creature! You do us justice, indeed. You do believe that there is true attachment and constancy among men. Believe it to be most fervent, most undeviating, in F. W.</p>
                    <p>I must go, uncertain of my fate; but I shall return hither, or follow your party, as soon as possible. A word, a look, will be enough to decide whether I enter your father's house this evening or never.”</p>
                    <p><em>- Jane Austen, Persuasion</em></p>
                    <p>Love is the true power which give the life a meaning and with this force with us, we feel and think which is very important. Eventhough true love is rare but I think everyone should get one in their life to give a meaningful purpose to it.</p>
                    <p>Romance in true sense is the biggest gift that a human being has received. The instant connection we feel to the characters in books related to romance is the nature of the human being which relate to the character to itself and rest is work by the imagination.</p>
					<p>Do read Romantic Books... Get started from today.</p>
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