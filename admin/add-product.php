<?php

include '../include/db.php';

if(isset($_POST['add_product'])){

    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $description = $_POST['description'];

    $query = "INSERT INTO products(name,price,image,description)
              VALUES('$name','$price','$image','$description')";

    mysqli_query($conn, $query);

    echo "<script>alert('Product Added Successfully')</script>";
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Add Product</title>

    <link rel="stylesheet" href="../css/style.css">

</head>

<body>

<div class="form-container">

    <form method="POST" class="form-box">

        <h2>Add Product</h2>

        <input type="text"
               name="name"
               placeholder="Product Name"
               required>

        <input type="number"
               name="price"
               placeholder="Price"
               required>

        <input type="text"
               name="image"
               placeholder="Image URL"
               required>

        <textarea name="description"
                  placeholder="Description"
                  style="width:100%;
                         padding:12px;
                         margin-bottom:20px;
                         border:1px solid #ccc;
                         border-radius:5px;"></textarea>

        <button type="submit"
                name="add_product"
                class="btn">

            Add Product

        </button>

    </form>

</div>

</body>
</html>