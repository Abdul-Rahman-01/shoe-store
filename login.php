<<<<<<< HEAD
<?php

session_start();

include 'include/db.php';

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users
              WHERE email='$email'
              AND password='$password'";

    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){

        $user = mysqli_fetch_assoc($result);

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        header("Location: index.php");

    }else{

        echo "<script>alert('Invalid Email or Password')</script>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Login</title>

    <link rel="stylesheet" href="css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>

<div class="navbar">

    <div class="logo">StepStyle</div>

    <div class="nav-links">
        <a href="index.php">Home</a>
        <a href="register.php">Register</a>
    </div>

</div>

<div class="form-container">

    <form method="POST" class="form-box">

        <h2>Login</h2>

        <input type="email" name="email" placeholder="Email" required>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit" name="login" class="btn">
            Login
        </button>

    </form>

</div>

</body>
=======
<?php

session_start();

include 'include/db.php';

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users
              WHERE email='$email'
              AND password='$password'";

    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){

        $user = mysqli_fetch_assoc($result);

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        header("Location: index.php");

    }else{

        echo "<script>alert('Invalid Email or Password')</script>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Login</title>

    <link rel="stylesheet" href="css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>

<div class="navbar">

    <div class="logo">StepStyle</div>

    <div class="nav-links">
        <a href="index.php">Home</a>
        <a href="register.php">Register</a>
    </div>

</div>

<div class="form-container">

    <form method="POST" class="form-box">

        <h2>Login</h2>

        <input type="email" name="email" placeholder="Email" required>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit" name="login" class="btn">
            Login
        </button>

    </form>

</div>

</body>
>>>>>>> 9d46aeee3dc6a9ee077e7d2633988506f3c84e5a
</html>