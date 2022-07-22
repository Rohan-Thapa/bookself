<?php 
session_start();



include('database.php');
if(isset($_SESSION['ticket'])){
	$uid = $_SESSION['userid'];
	$query = "select * from users where id='$uid'";
	$result = $conn->query($query);
	$dataUser = $result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Book Detials | BookSelf</title>
	<link rel="icon" type="image/ico" href="./img/logo.jpg" />
	<!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<?php include('nav.php'); ?>
	<?php 
    	$id = $_GET['id'];
    	$qq = "select * from books where id='$id'";
    	$result = $conn->query($qq);
    	$data = $result->fetch_assoc();
	?>
	<section class="portfolio section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-5">
						<h2>Yup!!! We Got the Book</h2>
						<p>We found the book which you were looking for<br>
						and you can know about it.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4"><img alt="<?php echo $data['title']; ?>" class="img-fluid" src="upload/<?php echo $data['picture']; ?>"></div>
				<div class="col-md-8">
					<h3><?php echo $data['title']; ?></h3>
					<p><em>- by <?php echo $data['author']; ?></em></p>
					<p class="main-text-contents"><?php echo $data['description']; ?></p>
					<h4>Best Price: <span style="color: #19bf40;">$ <?php echo $data['price']; ?></span> (<?php echo $data['bestdeal']; ?>)</h4>
					<p>Genre: <span style="color: #1aff1a;"><?php echo $data['genre']; ?></span></p>
					<p>First Published Date: <?php echo $data['dateofpublished']; ?></p>
				</div>
				<hr style="margin-top: 10px;" />
			</div>
			<!-- //id	title	author	genre	dateofpublished	quantity	price	bestdeal	picture	description -->
			<div class="row">
				<h4>Reviews on the books</h4>
				<?php 
					$bid = $data['id'];
					$qqq = "select * from reviews where book='$bid'";
					$results = $conn->query($qqq);
					while($datareview = $results->fetch_assoc()){ ?>
					<div class="card text-dark">
						<div class="card-body p-4">
            				<div class="d-flex flex-start">
              				<img class="rounded-circle shadow-1-strong me-3"
               				 src="img/<?php echo $datareview['pic']; ?>" alt="user" width="60"
                			 height="60" />
              				<div>
                			<h6 class="fw-bold mb-1"><?php echo $datareview['name']; ?></h6>
                			<div class="d-flex align-items-center mb-3">
                  				<p class="mb-0">
                    			<?php echo $datareview['email']; ?>
                    			<em><?php echo $datareview['time']; ?></em>
                  				</p>
								  <?php if(isset($_SESSION['ticket']) && ($datareview['email']==$dataUser['email'])){ ?>
								  	<a href="comment.php?rid=<?php echo $datareview['id']; ?>&book=<?php echo $data['id']; ?>" class="link-muted" style="margin-left: 5px; margin-right: 5px;">
										<i class="bi bi-archive"></i>
									</a>
								  <?php } ?>
                			</div>
                			<p class="mb-0">
                  				<?php echo $datareview['review']; ?>
                			</p>
              				</div>
            			</div>
          				</div>
					</div>
					<?php } ?>
			</div>
			<div class="row">
				<div class="col-md-12">
				<?php if(isset($_SESSION['ticket'])){ ?>
					<div class="col-md-12">
            			<form class="form-horizontal" style="margin-top: 20px;" method="post" action="comment.php">
                			<div class="form-group">
                    			<label class="col-md-4 control-label" for="book_review" style="color: #66CCFF; font-size: 20px;">ADD REVIEW ON THE BOOK</label><br />
                    			<div class="col-md-6"> 
                        			<textarea class="form-control" name="cmt" placeholder="Write Your Review here!"></textarea>
                    			</div>
								<input type="hidden" name="name" value="<?php echo $dataUser['fname']." ".$dataUser['lname']; ?>" />
								<input type="hidden" name="email" value="<?php echo $dataUser['email']; ?>" />
								<input type="hidden" name="gender" value="<?php echo $dataUser['gender']; ?>" />
								<input type="hidden" name="book" value="<?php echo $data['id']; ?>" />
                    			<div class="col-md-2"><button type="submit" class="btn btn-dark" style="margin-top: 3px;" name="comment">Submit</button></div>
                			</div>
            			</form>
        			</div>
				<?php }
				else{ ?>
					<h4 style="color: darkblue;">You have not log in to the site due to which the ability of reviewing on the book is disabled. Please do logged in before you could review on the book.</h4>
					<button type="button" class="btn btn-primary" onclick="window.location.href='login.php';">Login <i class="bi bi-box-arrow-in-left"></i></button>
				<?php } ?>
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