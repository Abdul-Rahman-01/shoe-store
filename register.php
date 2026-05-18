<?php

include 'include/db.php';

if(isset($_POST['register'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users(username,email,password)
              VALUES('$username','$email','$password')";

    mysqli_query($conn, $query);

    echo "<script>alert('Registration Successful')</script>";
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Register</title>

    <link rel="stylesheet" href="css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>

<div class="navbar">

    <div class="logo">StepStyle</div>

    <div class="nav-links">
        <a href="index.php">Home</a>
        <a href="login.php">Login</a>
    </div>

</div>

<div class="form-container">

    <form method="POST" class="form-box">

        <h2>Create Account</h2>

        <input type="text" name="username" placeholder="Username" required>

        <input type="email" name="email" placeholder="Email" required>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit" name="register" class="btn">
            Register
        </button>

    </form>

</div>

</body>
</html>