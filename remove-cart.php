<?php

include 'include/db.php';

$id = $_GET['id'];

$query = "DELETE FROM cart WHERE id = $id";

mysqli_query($conn, $query);

header("Location: cart.php");

?>