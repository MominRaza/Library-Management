<?php
include('db.php');
$book_name = $_POST['book_name'];
$author_name = $_POST['author_name'];


$q = "insert into user(book_name, author_name) values('$book_name', '$author_name')";
$result = mysqli_query($conn, $q);
if($result) {
    header("location:http://localhost/library management/index.php");
}

?>