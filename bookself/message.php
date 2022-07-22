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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css" rel="stylesheet" />
    <style>
        .link-muted { color: #aaa; } .link-muted:hover { color: #1266f1; }
    </style>
</head>
<body>
<section style="background-color: #ad655f;">
  <div class="container my-5 py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-12 col-lg-10">
        <div class="card text-dark">
        <h4 class="mb-0" style="padding-left: 10px;">Message on Website</h4>
        <p class="fw-light mb-4 pb-2" style="padding-left: 15px;">Latest messages section by users</p>
        <p><a href="books_list_admin.php" style="color: #66CCFF; padding-left: 20px;">Go Back</a></p>

        <?php 
			$qq = "select * from websitecmt";
			$result = $conn->query($qq);
			while($data = $result->fetch_assoc()){ ?>
            <div class="card-body p-4">
            <div class="d-flex flex-start">
              <img class="rounded-circle shadow-1-strong me-3"
                src="img/ref_pic.png" alt="user" width="60"
                height="60" />
              <div>
                <h6 class="fw-bold mb-1"><?php echo $data['name']; ?></h6>
                <div class="d-flex align-items-center mb-3">
                  <p class="mb-0">
                    <?php echo $data['email']; ?>
                    <span class="badge bg-primary"><?php echo $data['time']; ?></span>
                  </p>
                  <a href="comment.php?id=<?php echo $data['id']; ?>" class="link-muted" style="margin-left: 5px; margin-right: 5px;"><i class="bi bi-archive"></i></a>
                  <a href="#" class="link-muted"><i class="bi bi-heart-fill"></i></a>
                </div>
                <p class="mb-0">
                  <?php echo $data['cmt']; ?>
                </p>
              </div>
            </div>
          </div>
          <hr class="my-0" />
          <?php } ?>

        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"></script>
</body>
</html>