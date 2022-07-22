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
    <title>Book List Admin Access | BookSelf</title>
    <link rel="icon" type="image/ico" href="./img/logo.jpg" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css" rel="stylesheet" />
    <style>
        @media (min-width: 1025px) {
            .h-custom {
                height: 100vh !important;
            }
        }
    </style>
</head>
<body>
<section class="h-100 h-custom">
  <div class="container h-100 py-5">
    <p>
      <a href="index.php" style="text-decoration: none; color: #4f4f4f;"><i class="bi bi-house"></i> Home</a>
      <a href="message.php" style="text-decoration: none; color: #4f4f4f; margin-left: 5px;"><i class="bi bi-chat-dots"></i> Message</a>
    </p>
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">

        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col" class="h5">Book Lists</th>
                <th scope="col">Genre</th>
              </tr>
            </thead>
            <tbody>

            <?php 
              $qq = "select * from books";
              $result = $conn->query($qq);
              while($data = $result->fetch_assoc()){ ?>
              <tr>
                <th scope="row">
                  <div class="d-flex align-items-center">
                    <img src="upload/<?php echo $data['picture']; ?>" class="img-fluid rounded-3"
                      style="width: 100px;" alt="Book">
                    <div class="flex-column ms-4">
                      <p class="mb-2"><?php echo $data['title']; ?></p>
                      <p class="mb-0"><em><?php echo $data['author']; ?></em></p>
                    </div>
                  </div>
                </th>
                <td class="align-middle">
                  <p class="mb-0"><?php echo $data['genre']; ?></p>
                </td>
                <td class="align-middle">
                    <?php 
                    $delete_link = "action.php?bookid=".$data['id'];
                    $update_link ="updatebook.php?id=".$data['id'];
                    ?>
                    <button type="button" class="btn btn-success" onclick="window.location.href='<?php echo $update_link; ?>';"><i class="bi bi-pencil-square"></i></button><br />
                    <button type="button" class="btn btn-danger" style="margin-top: 5px;" onclick="window.location.href='<?php echo $delete_link; ?>';"><i class="bi bi-trash-fill"></i></button>
                </td>
              </tr>
              <?php } ?>

            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"></script>
</body>
</html>