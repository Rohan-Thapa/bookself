<?php 
include('database.php');

// Website Comment
if(isset($_POST['webmsg'])){
    $name = $_POST['fullname'];
    $mail = $_POST['email'];
    $cmt = $_POST['msg'];
    $now = date("Y-m-d h:i:sa");

    $q = "insert into websitecmt (id, name, email, cmt, time) values (NULL, '$name', '$mail', '$cmt', '$now')";
    $conn->query($q);
    header("location:index.php");
}

//Review on Book
if(isset($_POST['comment'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gen = $_POST['gender'];
    $book = $_POST['book'];
    $review = $_POST['cmt'];
    // date_default_timezone_set("Asia/Kathmandu");
    $now = date("Y-m-d h:i:sa");

    if($gen=='male'){
        $img = 'male.jpg';
    }
    elseif($gen=='female'){
        $img = 'female.jpg';
    }
    else{
        $img = 'others.jpg';
    }

    $link = "book_details.php?id=".$book;

    //id	name	email	book	pic	time	review

    $q = "insert into reviews (id, name, email, book, pic, time, review) values (NULL, '$name', '$email', '$book', '$img', '$now', '$review')";
    $conn->query($q);
    header("location:".$link);
}

// Delete Comment
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $q = "delete from websitecmt where id='$id'";
    $conn->query($q);
    header("location:message.php");
}

?>