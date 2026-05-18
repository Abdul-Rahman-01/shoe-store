<?php

session_start();

include 'include/db.php';

if(!isset($_SESSION['user_id'])){

    header("Location: login.php");
}

$user_id = $_SESSION['user_id'];

$query = "SELECT 
                 cart.id,
                 products.name,
                 products.price,
                 products.image,
                 cart.quantity

          FROM cart

          JOIN products
          ON cart.product_id = products.id

          WHERE cart.user_id='$user_id'";

$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html>

<head>

    <title>Cart</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="products">

    <h2>Your Cart</h2>
    <div style="margin:20px 50px;">

    <a href="products.php" class="btn">
        ← Continue Shopping
    </a>

</div>

    <div class="product-grid">
        <?php

if(mysqli_num_rows($result) == 0){

    echo "<h2 style='text-align:center'>
          Your Cart Is Empty
          </h2>";
}

?>
        


        <?php while($row = mysqli_fetch_assoc($result)){ ?>

      <div class="product-card">

    <img src="images/<?php echo $row['image']; ?>" alt="">

    <div class="product-info">

        <h3><?php echo $row['name']; ?></h3>

        <p>₹<?php echo $row['price']; ?></p>

        <p>Quantity: <?php echo $row['quantity']; ?></p>

        <a href="remove-cart.php?id=<?php echo $row['id']; ?>" class="btn">
            Remove
        </a>

    </div>

</div>

        <?php } ?>

    </div>
    <div style="text-align:center; margin-top:40px;">

    <a href="checkout.php" class="btn">
        Proceed To Checkout
    </a>

</div>

</div>

</body>
</html>