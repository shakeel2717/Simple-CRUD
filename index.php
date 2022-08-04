<?php
include("db.php");


// fetch all products from database
$query = "SELECT * FROM inventory";
$run = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body class="bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card mt-5">
                    <div class="card-body">
                        <h2>Add Product in Database</h2>
                        <hr>
                        <form action="action.php" method="POST">
                            <div class="form-group">
                                <label for="item">Item Name</label>
                                <input type="text" name="item" id="item" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="price">Item Price</label>
                                <input type="text" name="price" id="price" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="stock">Item Qty in Stock</label>
                                <input type="text" name="stock" id="stock" class="form-control">
                            </div>
                            <div class="form-group">
                                <button name="submit" type="submit" class="btn btn-primary btn-lg btn-block">Add Product</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card mt-5">
                    <div class="card-body">
                        <h2>My All Products</h2>
                        <hr>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Item</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($product = mysqli_fetch_assoc($run)) {
                                ?>
                                    <tr>
                                        <td><?php echo $product['id'] ?></td>
                                        <td><?php echo $product['item'] ?></td>
                                        <td><?php echo $product['price'] ?></td>
                                        <td><?php echo $product['qty'] ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>