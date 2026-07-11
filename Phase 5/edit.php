<?php
include "db.php";

$id = $_GET['id'];

$sql = "SELECT * FROM students WHERE id='$id'";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
if (isset($_POST['update'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "UPDATE students
            SET name='$name',
                email='$email',
                phone='$phone'
            WHERE id='$id'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Student Updated Successfully!";
        header("Location: index.php");
exit();
    } else {
        echo "Update Failed!";
    }

}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h2>Edit Student</h2>

    <form method="POST">

        <label>Name</label>
        <br>
        <input type="text" name="name" value="<?php echo $row['name']; ?>">
        <br><br>

        <label>Email</label>
        <br>
        <input type="email" name="email" value="<?php echo $row['email']; ?>">
        <br><br>

        <label>Phone</label>
        <br>
        <input type="text" name="phone" value="<?php echo $row['phone']; ?>">
        <br><br>

        <input type="submit" name="update" value="Update Student">

    </form>

</body>

</html>