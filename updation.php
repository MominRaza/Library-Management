<?php
include('db.php');

$id = $_GET['id'];


$book_name = $_POST['book_name'];
$author_name = $_POST['author_name'];

$q = "update user set book_name = '$book_name', author_name = '$author_name' where id = $id";

$result = mysqli_query($conn, $q);
if($result) {
    header('location: http://localhost/library management/index.php');
} else {
    echo "Something went wrong";
}
?>