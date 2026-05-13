<?php
$conn = mysqli_connect("localhost", "root", "", "bwapp");

$id = $_GET['id'];

$query = "SELECT * FROM users WHERE id = '$id'";

$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)) {
    echo $row['login'];
}
?>
