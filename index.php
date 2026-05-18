<<<<<<< HEAD

<?php include 'include/header.php'; ?>

<!-- Hero Section -->

<div class="hero">

    <div class="hero-content">

        <h1>Discover Premium Shoes</h1>

        <p>Modern Style Meets Comfort</p>

        <a href="#categories" class="btn">Shop Now</a>

    </div>

</div>
<section class="categories" id="categories">

    <h2>Shop By Category</h2>

    <div class="category-grid">

        <div class="category-card">

            <img src="images/sports.jpg">

            <h3>
                <a href="products.php?category=sports shoe">
                    Sports Shoes
                </a>
            </h3>

        </div>

        <div class="category-card">

            <img src="images/casual.jpg">

            <h3>
                <a href="products.php?category=casual shoe">
                    Casual Shoes
                </a>
            </h3>

        </div>

        <div class="category-card">

            <img src="images/formal.jpg">

            <h3>
                <a href="products.php?category=formal shoe">
                    Formal Shoes
                </a>
            </h3>

        </div>

        <div class="category-card">

            <img src="images/sneaker.jpg">

            <h3>
                <a href="products.php?category=sneakers">
                    Sneakers
                </a>
            </h3>

        </div>

    </div>

</section>

<!-- Products -->

<section class="products">

    <h2>Featured Products</h2>

    <div class="product-grid">

        <?php

        include 'include/db.php';

        $query = "SELECT * FROM products";

        $result = mysqli_query($conn, $query);

        while($row = mysqli_fetch_assoc($result)){

        ?>

        <div class="product-card">

           <img src="images/<?php echo $row['image']; ?>">

            <div class="product-info">

                <h3><?php echo $row['name']; ?></h3>

                <p>₹<?php echo $row['price']; ?></p>

               <a href="add-to-cart.php?id=<?php echo $row['id']; ?>" class="btn">
    Add to Cart
</a>
            </div>

        </div>

        <?php } ?>

    </div>

</section>





<?php include 'include/footer.php'; ?>
=======

<?php include 'include/header.php'; ?>

<!-- Hero Section -->

<div class="hero">

    <div class="hero-content">

        <h1>Discover Premium Shoes</h1>

        <p>Modern Style Meets Comfort</p>

        <a href="#categories" class="btn">Shop Now</a>

    </div>

</div>
<section class="categories" id="categories">

    <h2>Shop By Category</h2>

    <div class="category-grid">

        <div class="category-card">

            <img src="images/sports.jpg">

            <h3>
                <a href="products.php?category=sports shoe">
                    Sports Shoes
                </a>
            </h3>

        </div>

        <div class="category-card">

            <img src="images/casual.jpg">

            <h3>
                <a href="products.php?category=casual shoe">
                    Casual Shoes
                </a>
            </h3>

        </div>

        <div class="category-card">

            <img src="images/formal.jpg">

            <h3>
                <a href="products.php?category=formal shoe">
                    Formal Shoes
                </a>
            </h3>

        </div>

        <div class="category-card">

            <img src="images/sneaker.jpg">

            <h3>
                <a href="products.php?category=sneakers">
                    Sneakers
                </a>
            </h3>

        </div>

    </div>

</section>

<!-- Products -->

<section class="products">

    <h2>Featured Products</h2>

    <div class="product-grid">

        <?php

        include 'include/db.php';

        $query = "SELECT * FROM products";

        $result = mysqli_query($conn, $query);

        while($row = mysqli_fetch_assoc($result)){

        ?>

        <div class="product-card">

           <img src="images/<?php echo $row['image']; ?>">

            <div class="product-info">

                <h3><?php echo $row['name']; ?></h3>

                <p>₹<?php echo $row['price']; ?></p>

               <a href="add-to-cart.php?id=<?php echo $row['id']; ?>" class="btn">
    Add to Cart
</a>
            </div>

        </div>

        <?php } ?>

    </div>

</section>





<?php include 'include/footer.php'; ?>
>>>>>>> 9d46aeee3dc6a9ee077e7d2633988506f3c84e5a
