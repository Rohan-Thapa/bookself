<?php 
session_start();
include('database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Book Collection List | BookSelf</title>
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
						<h2>Book We Have</h2>
						<p>The list of books we do have are here and<br>
						you can choose any to know about.</p>
					</div>
				</div>
			</div>
			<div class="row">

				<?php 
				$qq = "select * from books";
				$result = $conn->query($qq);
				while($data = $result->fetch_assoc()){ ?>
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card text-light text-center bg-white pb-2">
						<div class="card-body text-dark">
							<div class="img-area mb-4"><a href="book_details.php?id=<?php echo $data['id']; ?>"><img alt="<?php echo $data['title']; ?>" class="img-fluid" src="upload/<?php echo $data['picture']; ?>"></a></div>
							<h3 class="card-title"><a href="book_details.php?id=<?php echo $data['id']; ?>" class="booktitle"><?php echo $data['title']; ?></a></h3>
							<p class="text-center"><em>By <?php echo $data['author']; ?></em></p>
							<p class="lead">Genre: <?php echo $data['genre']; ?></p>
							<p class="lead">Price: <span style="color: green;">$ <?php echo $data['price']; ?></span></p>
							<?php $link = "book_details.php?id=".$data['id']; ?>
							<button class="btn bg-warning text-dark" onclick="window.location.href='<?php echo $link; ?>';">More</button>
						</div>
					</div>
				</div>
				<?php }
				 ?>


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