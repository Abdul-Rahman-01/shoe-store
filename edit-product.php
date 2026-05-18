<?php

include '../include/db.php';

$query = "SELECT * FROM products";

$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html>

<head>

    <title>Manage Products</title>

    <link rel="stylesheet" href="../css/style.css">

</head>

<body>

<div class="products">

    <h2>Manage Products</h2>

    <div class="product-grid">

        <?php while($row = mysqli_fetch_assoc($result)){ ?>

        <div class="product-card">

            <img src="<?php echo $row['image']; ?>">

            <div class="product-info">

                <h3><?php echo $row['name']; ?></h3>

                <p>₹<?php echo $row['price']; ?></p>

                <a href="delete-product.php?id=<?php echo $row['id']; ?>"

                   class="btn"

                   onclick="return confirm('Delete Product?')">

                   Delete

                </a>

            </div>

        </div>

        <?php } ?>

    </div>

</div>

</body>
</html>