<?php

require_once "config.php";

   

$page = isset($_GET['pagina']) ? (int)$_GET['page']:1;
$on_page = 10;
$start = ($page-1)*$on_page;


$sql = "SELECT * FROM Utilizatori LIMIT $start, $on_page";
$result = $conn->query($sql);

if($result->num_rows>0) {
    echo "<table><tr><th>ID</th><th>Nume</th><th>Email</th></tr>";
    while ($row = $result->fetch_assoc()){
        echo "<tr><td>" .$row['id'] ."</td><td>" . $row['name']."</td><td>" .$row['email']."</td></tr>";

    }
    echo "</table>";
} else {
    echo "0 rezultate";
}

$conn->close();

?>

<div class="page">
    <a href="?page=1">First</a>
    <a href="?page=<?php echo max($pagina-1,1); ?>">Previous</a>
    <a href="?page=<?php echo max($pagina+1,1); ?>" >Next</a>
</div>