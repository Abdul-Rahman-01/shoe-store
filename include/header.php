<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

    <title>StepStyle</title>

    <link rel="stylesheet" href="css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>

<div class="navbar">

    <div class="logo">StepStyle</div>

    <div class="nav-links">

        <a href="index.php">Home</a>

        <a href="products.php">Products</a>
<a href="cart.php">Cart</a>
<a href="admin/index.php">Admin</a>

        <?php

        if(isset($_SESSION['username'])){

            echo "<a href='#'>".$_SESSION['username']."</a>";
            echo "<a href='logout.php'>Logout</a>";

        }else{

            echo "<a href='login.php'>Login</a>";
        }

        ?>

    </div>

</div>