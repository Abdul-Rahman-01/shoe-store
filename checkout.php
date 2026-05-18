<?php

session_start();

include 'include/db.php';

if(!isset($_SESSION['user_id'])){

    header("Location: login.php");
}

$user_id = $_SESSION['user_id'];

$query = "SELECT products.price, cart.quantity

          FROM cart

          JOIN products
          ON cart.product_id = products.id

          WHERE cart.user_id='$user_id'";

$result = mysqli_query($conn, $query);

$total = 0;

while($row = mysqli_fetch_assoc($result)){

    $total += $row['price'] * $row['quantity'];
}

if(isset($_POST['place_order'])){

    $insert = "INSERT INTO orders(user_id, total_price)
               VALUES('$user_id','$total')";

    mysqli_query($conn, $insert);

    mysqli_query($conn, "DELETE FROM cart WHERE user_id='$user_id'");

    echo "<script>
    alert('Order Placed Successfully');
    window.location='index.php';
    </script>";
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Checkout</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="form-container">

    <form method="POST" class="form-box">

        <h2>Checkout</h2>

        <h3>Total Amount</h3>

        <p style="margin:20px 0; font-size:25px; color:orange;">
            ₹<?php echo $total; ?>
        </p>

        <button type="submit"
                name="place_order"
                class="btn">

            Place Order

        </button>

    </form>

</div>

</body>
</html>