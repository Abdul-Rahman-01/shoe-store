<<<<<<< HEAD
<?php

include 'include/header.php';
include 'include/db.php';

$id = $_GET['id'];

$query = "SELECT * FROM products WHERE id='$id'";

$result = mysqli_query($conn, $query);

$product = mysqli_fetch_assoc($result);

?>

<div class="products">

    <div class="product-card"
         style="max-width:500px;
                margin:auto;">

        <img src="<?php echo $product['image']; ?>">

        <div class="product-info">

            <h2><?php echo $product['name']; ?></h2>

            <p>₹<?php echo $product['price']; ?></p>

            <p style="margin:20px 0;">
                <?php echo $product['description']; ?>
            </p>

            <a href="add-to-cart.php?id=<?php echo $product['id']; ?>"
               class="btn">

               Add To Cart

            </a>

        </div>

    </div>

</div>

=======
<?php

include 'include/header.php';
include 'include/db.php';

$id = $_GET['id'];

$query = "SELECT * FROM products WHERE id='$id'";

$result = mysqli_query($conn, $query);

$product = mysqli_fetch_assoc($result);

?>

<div class="products">

    <div class="product-card"
         style="max-width:500px;
                margin:auto;">

        <img src="<?php echo $product['image']; ?>">

        <div class="product-info">

            <h2><?php echo $product['name']; ?></h2>

            <p>₹<?php echo $product['price']; ?></p>

            <p style="margin:20px 0;">
                <?php echo $product['description']; ?>
            </p>

            <a href="add-to-cart.php?id=<?php echo $product['id']; ?>"
               class="btn">

               Add To Cart

            </a>

        </div>

    </div>

</div>

>>>>>>> 9d46aeee3dc6a9ee077e7d2633988506f3c84e5a
<?php include 'include/footer.php'; ?>