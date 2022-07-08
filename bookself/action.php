<?php 
session_start();
include('database.php');

// Register Code
if(isset($_POST['register'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['mail'];
    $phn = $_POST['phnu'];
    $gen = $_POST['gender'];
    $bth = $_POST['birthday'];
    $pw = md5($_POST['pwd']);
    $repw = md5($_POST['repwd']);

    // echo $fname.$lname.$email.$phn.$gen.$bth.$pw.$repw;
    // id	fname	lname	email	gender	phnum	password	birthday    privilege

    if($pw==$repw){
        $q1 = "insert into users (id, fname, lname, email, gender, phnum, password, birthday, privilege) values (NULL, '$fname', '$lname', '$email', '$gen', '$phn', '$pw', '$bth', 'user')";
        $conn->query($q1);
        header("location:index.php");
    }
    else{
        header('location:error.php');
    }
}

// Login Code
if(isset($_POST['login'])){
    $mail = $_POST['mail'];
    $pw = md5($_POST['pwd']);
    $query = "select * from users where email='$mail' and password='$pw'";
    $result = $conn->query($query);

    // fetches data from the database
    $userdata = $result->fetch_assoc();

    $count = $result->num_rows;
    if($count==0){
        // Login Failed!
        header('location:error.php');
    }
    else{
        // Login Success!
        $_SESSION['ticket'] = 'ok';
        $_SESSION['userid'] = $userdata['id'];
        header('location:profile.php');
    }
} 

// Add Book
if(isset($_POST['addbook'])){
    $title = $_POST['title'];
    $author = $_POST['author'];
    $price = $_POST['price'];
    $genre = $_POST['genre'];
    $publishdate = $_POST['dop'];
    $quan = $_POST['quantity'];
    $best = $_POST['beston'];
    $description = $_POST['des'];

    $image = $_FILES['bookpic']['name']; // getting the file name
    $ext = pathinfo($_FILES['bookpic']['name'], PATHINFO_EXTENSION); // extracting extension of the file
    $randnum = rand(1, 1000000);
    $newpicname = $randnum."_bookself_pic.".$ext;

    if($ext=='jpg' || $ext=='png' || $ext=='jpeg' || $ext=='gif'){
        move_uploaded_file($_FILES['bookpic']['tmp_name'], "upload/".$newpicname);

        //id	title	author	genre	dateofpublished	quantity	price	bestdeal	picture	description

        $q1 = "insert into books (id, title, author, genre, dateofpublished, quantity, price, bestdeal, picture, description) values (NULL, '$title', '$author', '$genre', '$publishdate', '$quan', '$price', '$best', '$newpicname', '$description')";
        $conn->query($q1);
        header("location:books.php");
    }
    else{
        header('location:error.php');
    }
}

// Update Product
if(isset($_POST['updatebook'])){
    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $price = $_POST['price'];
    $genre = $_POST['genre'];
    $publishdate = $_POST['dop'];
    $quan = $_POST['quantity'];
    $best = $_POST['beston'];
    $description = $_POST['des'];

    $q = "update books set title='$title', author='$author', price='$price', genre='$genre', dateofpublished='$publishdate', quantity='$quan', bestdeal='$best', description='$description' where id='$id'";
    $conn->query($q);
    header("location:books.php");
}

// Delete Product
if(isset($_GET['bookid'])){
    $id = $_GET['bookid'];
    $q = "delete from books where id='$id'";
    $conn->query($q);
    header("location:books_list_admin.php");
}

?>