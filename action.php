<?php
include("db.php");
// checking if button is clicked
if (isset($_POST['submit'])) {
    // getting the varriables
    $item = $_POST['item'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    // inserting into databse
    $query = "INSERT INTO inventory (item,price,qty) VALUES ('$item','$price','$stock')";
    $run = mysqli_query($conn,$query);
    if ($run) {
        header("location:index.php");
    } else {
        echo "Error in your Query";
    }
}
