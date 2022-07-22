<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Add Book | BookSelf</title>
    <link rel="icon" type="image/ico" href="./img/logo.jpg" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3 border p-4 shadow bg-light">
            <div class="col-12">
                <h3 class="fw-normal text-secondary fs-4 text-uppercase mb-4">Add the Book</h3>
            </div>
            <form method="post" action="action.php" enctype="multipart/form-data">
                <div class="row g-3">
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="title" placeholder="Book Name">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="author" placeholder="Author Name">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="price" placeholder="Price">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="genre" placeholder="Genre">
                    </div>
                    <div class="col-md-6">
                        <input type="date" class="form-control" name="dop" placeholder="Published Date">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="quantity" placeholder="Quantity">
                    </div>
                    <div class="col-12">
                        <label>Choose the Book Picture</label>
                        <input type="file" class="form-control" name="bookpic">
                    </div>
                    <div class="col-12">
                        <textarea class="form-control" name="des" placeholder="Description"></textarea>
                    </div>
                    <div class="col-12">
                        <select class="form-control" name="beston">
                            <option value="N/A" selected>Best Option on</option>
                            <option value="Daedalus">Daedalus</option>
                            <option value="Goodread">Goodread</option>
                            <option value="Amazon">Amazon/Kindel</option>
                            <option value="Barnes&Noble">Barnes&Noble</option>
                            <option value="BetterWorld">BetterWorld</option>
                            <option value="PowellsBooks">PowellsBooks</option>
                            <option value="PaperBackSwap">PaperBackSwap</option>
                            <option value="BookMooch">BookMooch</option>
                            <option value="ThriftBooks">ThriftBooks</option>
                            <option value="Biblio">Biblio</option>
                            <option value="ValoreBooks">ValoreBooks</option>
                        </select>
                    </div>
                    <div class="col-12 mt-5">                        
                        <button type="submit" name="addbook" class="btn btn-primary float-end">Add Book</button>
                        <button type="button" class="btn btn-outline-secondary float-end me-2" onclick="window.location.href='index.php';">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>