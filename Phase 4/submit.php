<?php

include "header.php";

$name = $_POST["name"] ?? "";
$email = $_POST["email"] ?? "";
$message = $_POST["message"] ?? "";

if(empty($name) || empty($email) || empty($message))
{
    echo "<h3>All fields are required!</h3>";
}
else
{
    $data =
    "Name: " . $name .
    " | Email: " . $email .
    " | Message: " . $message .
    PHP_EOL;

    file_put_contents(
        "messages.txt",
        $data,
        FILE_APPEND
    );

    echo "<h3>Message Saved Successfully!</h3>";
}

include "footer.php";

?>