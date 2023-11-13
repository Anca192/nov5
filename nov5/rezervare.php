<?php



require_once ('config.php');

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $rezervation_date = $conn->real_escape_string($_POST['rezervation_date']);
    $rezervation_time = $conn->real_escape_string($_POST['rezervation_time']);
    $number_of_people = $conn->real_escape_string($_POST['number_of_people']);
    $special_requests = $conn->real_escape_string($_POST['special_requests']);

    $sql = "INSERT INTO Rezervations(name,email,phone,rezervation_date,rezervation_time,number_of_people,special_requests) 
            VALUES ('$name','$email','$phone$','$rezervation_date','$rezervation_time','$number_of_people','$special_requests')";

    if($conn->query($sql) === TRUE) {
        echo 'Rezervarea a fost efectuata cu succes';
    } else {
        echo "Erroare : " .$sql ."<br/>" .$conn->error;
    }
}


?>

<form method="post" action="">

    Name: <input type="text" name="name"> <br/>
    Email: <input type="email" name="email"> <br/>
    Phone: <input type="text" name="phone"> <br/>
    Date of reservation: <input type="date" name="rezervation_date"> <br/>
    Time of reservation: <input type="time" name="rezervation_time"> <br/>
    Number of people: <input type="number" name="number_of_people"> <br/>
    Special requirements: <textarea name="special_requests"></textarea> <br/>
    <input type="submit" value="Reserve">
</form>