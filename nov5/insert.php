<?php

    require_once ('config.php');

    // preluam datele din formular

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $conn->real_escape_string($_POST['name']);
        $email = $conn->real_escape_string($_POST['email']);

        $sql = "INSERT INTO Utilizatori(name,email) VALUES ('$name','$email')";

        if($conn->query($sql) === TRUE) {
            echo "Inregistrare cu succes!";
        } else {
            echo "Eroare la inserare: ".$conn->error;
        }
    }
?>

<form method="post" action="">
    Nume: <input type="text" name="name"> <br/>
    Email: <input type="text" name="email"> <br/>
    <input type="submit" value="Inserare">
</form>