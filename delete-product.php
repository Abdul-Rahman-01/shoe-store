<?php
session_start();
include '../include/db.php';

/** @var mysqli $conn */  

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if ($id > 0) {
    mysqli_query($conn, "DELETE FROM cart WHERE product_id = $id");
    mysqli_query($conn, "DELETE FROM products WHERE id = $id");
}
header('Location: edit-product.php');
exit;
?>