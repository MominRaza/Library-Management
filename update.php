<?php
$id = $_GET['id'];
include('db.php');
$q = "select * from user where id = $id";
$result = mysqli_query($conn, $q);
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Library Management</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Library Management</h1>
        <ul>
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </header>
    <aside>
        <ul>
            <li><a href="index.php">All Books</a></li>
            <li><a href="add.html">Add Book</a></li>
        </ul>
    </aside>
    <main>
        <h2>Update Book</h2>
        <form action="updation.php?id=<?php echo $data['id']; ?>" method="post">
           
            <input type="text" name="book_name" id="" placeholder="Enter Book Name" required
            value="<?php echo $data['book_name']; ?>">
            <input type="text" name="author_name" id="" placeholder="Enter Author Name" required
              value="<?php echo $data['author_name']; ?>">
            <input type="submit" value="Add Book">
        </form>
    </main>
    <footer>
        <p>&copy; 2019 Library Management</p>
    </footer>
</body>
</html>