<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>About Novels | BookSelf</title>
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
						Novels.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4"><img alt="Refrence Picture of a Novel" class="img-fluid" src="img/novel_ref.jpg"></div>
				<div class="col-md-8">
                    <h3>Novels</h3>
                    <p>“It is only a novel... or, in short, only some work in which the greatest powers of the mind are displayed, in which the most thorough knowledge of human nature, the happiest delineation of its varieties, the liveliest effusions of wit and humour, are conveyed to the world in the best-chosen language”</p>
                    <p><em>- Jane Austen, Northanger Abbey</em></p>
                    <p>A novel is a long prose narrative that usually describes fictional characters and events in the form of a sequential story. It rests on the consensus that the novel is today the longest genre of narrative prose, followed by the novella, novelette and the short story. However, there is no consensus as to the minimal required lenght. In part because of this wide variation, the boundary between a novella and a novel may be arbitrary and difficult to determine.</p>
                    <p>Reading a novel improves people's imagination and there is even the thriller and suspence in the story and it become much more intresting when the story developes with various character and their nature are developed. There will be also the much of the details being told which later plays huge role in the character development and development of the story as well. The creativity of the writer amaze the people to the level of huge suprise for the development and presentation of such a level of story within a book.</p>
                    <p>The Sci-Fi present in various Novels increases the interest of the people towards those field. There are also various movies which are developed through various novels, the most famous being Harry Potter and Lord of the Rings. The movie could not cover much of the details due to which in most of the story they lack proper information due to which reading the book of the movie is much better choice which gives us the deeper information about the story and help us to manage the development of the story due to which it is better to learn Novels better than to watch the movies. There are also the development of pictures from the story while reading.</p>
                    <p>Do read Novels... Get started from today.</p>
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