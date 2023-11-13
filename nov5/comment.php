<?php

require_once ('config.php');

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $comment = $conn->real_escape_string($_POST['comment']);

    $sql = "INSERT INTO Comments(name,comment) VALUES ('$name','$comment')";

    if($conn->query($sql) == TRUE){
        echo "Comment added succsessfully";
    } else {
        echo "Error" .$sql."<br/>".$conn->error;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="">

Name: <input type="text" name="name"> <br/>
Comment: <textarea name="comment"></textarea><br/>
<input type="submit" value="Submit message">
</body>
</html>
