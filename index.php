<?php
// $conn = mysqli_connect('localhost')
include('db.php');
$q = "select *from user";
$results = mysqli_query($conn, $q);
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
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </header>
    <aside>
        <ul>
            <li class="active"><a href="index.php">All Books</a></li>
            <li><a href="add.html">Add Book</a></li>
        </ul>
    </aside>
    <main>
        <h2>All Books</h2>
        <table>
            <tr>
                <th>Book ID</th>
                <th>Book Name</th>
                <th>Author Name</th>
                <th>Action</th>
            </tr>
            <?php while($row = mysqli_fetch_assoc($results)): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['book_name']; ?></td>
                <td><?php echo $row['author_name']; ?></td>
                <td>
                    <a href="<?php echo 'update.php?id='.$row['id']; ?>"><i class="fa fa-edit" aria-hidden="true"></i></a>
                    <a href="<?php echo 'deletion.php?id='.$row['id']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </main>
    <footer>
        <p>&copy; 2019 Library Management</p>
    </footer>
</body>
</html>