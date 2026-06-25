<?php
include "header.php";
?>

<form action="submit.php" method="POST">

    <label>Name:</label><br>
    <input type="text" name="name"><br><br>

    <label>Email:</label><br>
    <input type="email" name="email"><br><br>

    <label>Message:</label><br>
    <textarea name="message"></textarea><br><br>

    <button type="submit">
        Submit
    </button>

</form>

<?php
include "footer.php";
?>