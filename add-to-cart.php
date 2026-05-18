<?php

session_start();

include 'include/db.php';

if(!isset($_SESSION['user_id'])){

    header("Location: login.php");
}

$user_id = $_SESSION['user_id'];

$product_id = $_GET['id'];

$query = "INSERT INTO cart(user_id, product_id, quantity)
          VALUES('$user_id','$product_id',1)";

mysqli_query($conn, $query);

echo "<script>
alert('Product Added To Cart Successfully');
window.location='cart.php';
</script>";

?>