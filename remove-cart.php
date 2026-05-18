<<<<<<< HEAD
<?php

include 'include/db.php';

$id = $_GET['id'];

$query = "DELETE FROM cart WHERE id = $id";

mysqli_query($conn, $query);

header("Location: cart.php");

=======
<?php

include 'include/db.php';

$id = $_GET['id'];

$query = "DELETE FROM cart WHERE id = $id";

mysqli_query($conn, $query);

header("Location: cart.php");

>>>>>>> 9d46aeee3dc6a9ee077e7d2633988506f3c84e5a
?>