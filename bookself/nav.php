    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<div class="container">
			<a class="navbar-brand" href="index.php"><span class="text-warning">Book</span>Self</a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.php">About Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="books.php">Books <i class="bi bi-book"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="profile.php">My Profile</a>
					</li>

					<?php if(isset($_SESSION['ticket'])){ ?>


                    <li class="nav-item">
						<a class="nav-link" href="logout.php">LogOut <i class="bi bi-box-arrow-right"></i></a>
					</li>

					<?php }
					else { ?>

					<li class="nav-item">
						<a class="nav-link" href="login.php">Login <i class="bi bi-box-arrow-in-left"></i></a>
					</li>

					<?php } ?>
				</ul>
			</div>
		</div>
	</nav>