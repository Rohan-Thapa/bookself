<?php 
session_start();
if(!$_SESSION['ticket']){
    header('location:login.php');
}

$uid = $_SESSION['userid'];

include('database.php');

$query = "select * from users where id='$uid'";
$result = $conn->query($query);
$dataUser = $result->fetch_assoc();

if($dataUser['gender']=='male'){
  $img = 'male.jpg';
}
elseif($dataUser['gender']=='female'){
  $img = 'female.jpg';
}
else{
  $img = 'others.jpg';
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Profile | BookSelf</title>
  <link rel="icon" type="image/ico" href="img/logo.jpg" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/profile.css" />
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
  <?php include('nav.php'); ?>
    <section class="h-100 gradient-custom-2">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-9 col-xl-7">
        <div class="card">
          <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
            <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
              <img src="img/<?php echo $img; ?>"
                alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                style="width: 150px; z-index: 1">
              <button type="button" class="btn btn-outline-dark" data-mdb-ripple-color="dark"
                style="z-index: 1;" onclick="window.location.href='index.php';">
                Go Homepage 
              </button>
              <?php if($dataUser['privilege']=='admin'){ ?>
              <button type="button" class="btn btn-outline-dark" data-mdb-ripple-color="dark"
                style="z-index: 1; margin-top: 5px;" onclick="window.location.href='books_list_admin.php';">
                Admin List
              </button>
              <?php } ?>
            </div>
            <div class="ms-3" style="margin-top: 130px;">
              <h5><?php echo $dataUser['fname']." ".$dataUser['lname']; ?></h5>
              <p>@<?php echo $dataUser['privilege']; ?></p>
            </div>
          </div>
          <div class="p-4 text-black" style="background-color: #f8f9fa;">
            <div class="d-flex justify-content-end text-center py-1">
              <div>
                <?php 
                $booksresult = $conn->query("select count(1) FROM books");
                $datarow = $booksresult->fetch_array();

                $recentbook = $conn->query("select * from books order by id desc limit 1");
                $recentdata = $recentbook->fetch_assoc();
                
                $booksrow = $datarow[0];
                 ?>
                <p class="mb-1 h5"><?php echo $booksrow; ?></p>
                <p class="small text-muted mb-0">Books</p>
              </div>
              <div class="px-3">
                <p class="mb-1 h5">23</p>
                <p class="small text-muted mb-0">Discussion</p>
              </div>
              <div>
                <p class="mb-1 h5">15+</p>
                <p class="small text-muted mb-0">Ideas</p>
              </div>
            </div>
          </div>
          <div class="card-body p-4 text-black">
            <div class="mb-5">
              <p class="lead fw-normal mb-1">Details</p>
              <div class="p-4" style="background-color: #f8f9fa;">
                <p class="font-italic mb-1"><i class="bi bi-envelope"></i> <?php echo $dataUser['email']; ?></p>
                <p class="font-italic mb-1"><i class="bi bi-phone"></i> <?php echo $dataUser['phnum']; ?></p>
                <p class="font-italic mb-0"><i class="fa-solid fa-cake-candles"></i> <?php echo $dataUser['birthday']; ?></p>
                <?php if($dataUser['privilege']=='admin'){ ?>
                  <button type="button" class="btn btn-outline-dark" data-mdb-ripple-color="dark"
                  style="z-index: 1; margin-top: 5px;" onclick="window.location.href='addbook.php';">
                  Add Book
                  </button>
                <?php } ?>
              </div>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-4">
              <p class="lead fw-normal mb-0">Recently Added Book</p>
              <p class="mb-0"><a href="books.php" class="text-muted">Go to Lists</a></p>
            </div>
            <div class="row g-2">
              <div class="col-md-12 mb-4">
                <img src="upload/<?php echo $recentdata['picture']; ?>"
                  alt="image 1" class="w-100 rounded-3">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </body>
</html>