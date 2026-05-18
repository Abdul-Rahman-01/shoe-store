<<<<<<< HEAD
<?php include 'include/header.php'; ?>
<div style="padding:20px 50px;">

    <a href="index.php" class="btn">
        ← Back To Home
    </a>

</div>

<?php

include 'include/db.php';

if(isset($_GET['category'])){

    $category = $_GET['category'];

    $query = "SELECT * FROM products
              WHERE category='$category'";

}else{

    $query = "SELECT * FROM products";
}

$result = mysqli_query($conn, $query);

?>

<section class="products">

    <h2>All Products</h2>

    <div class="product-grid">

        <?php while($row = mysqli_fetch_assoc($result)){ ?>

        <div class="product-card">

            <img src="images/<?php echo $row['image']; ?>">

            <div class="product-info">

                <h3><?php echo $row['name']; ?></h3>

                <p>₹<?php echo $row['price']; ?></p>

                <a href="product-details.php?id=<?php echo $row['id']; ?>"
                   class="btn">

                   View Details

                </a>

            </div>

        </div>

        <?php } ?>

    </div>

</section>

=======
<?php include 'include/header.php'; ?>
<div style="padding:20px 50px;">

    <a href="index.php" class="btn">
        ← Back To Home
    </a>

</div>

<?php

include 'include/db.php';

if(isset($_GET['category'])){

    $category = $_GET['category'];

    $query = "SELECT * FROM products
              WHERE category='$category'";

}else{

    $query = "SELECT * FROM products";
}

$result = mysqli_query($conn, $query);

?>

<section class="products">

    <h2>All Products</h2>

    <div class="product-grid">

        <?php while($row = mysqli_fetch_assoc($result)){ ?>

        <div class="product-card">

            <img src="images/<?php echo $row['image']; ?>">

            <div class="product-info">

                <h3><?php echo $row['name']; ?></h3>

                <p>₹<?php echo $row['price']; ?></p>

                <a href="product-details.php?id=<?php echo $row['id']; ?>"
                   class="btn">

                   View Details

                </a>

            </div>

        </div>

        <?php } ?>

    </div>

</section>

>>>>>>> 9d46aeee3dc6a9ee077e7d2633988506f3c84e5a
<?php include 'include/footer.php'; ?>