<?php
include "db.php";

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO students (name, email, phone)
            VALUES ('$name', '$email', '$phone')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Student Added Successfully!";
    } else {
        echo "Failed to Add Student!";
    }

}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h2>Add New Student</h2>

    <form method="POST">

        <label>Name</label>
        <br>
        <input type="text" name="name" required>
        <br><br>

        <label>Email</label>
        <br>
        <input type="email" name="email" required>
        <br><br>

        <label>Phone</label>
        <br>
        <input type="text" name="phone" required>
        <br><br>

        <input type="submit" name="submit" value="Add Student">

    </form>

</body>

</html>