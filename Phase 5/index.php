<?php
include "db.php";

if (isset($_GET['search'])) {

    $search = $_GET['search'];

    $sql = "SELECT * FROM students WHERE name LIKE '%$search%'";

} else {

    $sql = "SELECT * FROM students";

}

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Student Management System</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h2>Student Management System</h2>
<form method="GET">

    <input type="text" name="search" placeholder="Enter Student Name">

    <input type="submit" value="Search">
<a href="index.php">Show All Students</a>
</form>

<br>
<p>
    <a href="add.php">
        <input type="button" value="+ Add New Student">
    </a>
</p>
    <hr>

    <table border="1" cellpadding="10">

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) { ?>

        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
         <td>
    <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
</td>   
        </tr>

        <?php } ?>

    </table>

</body>

</html>