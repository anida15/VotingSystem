<?php
session_start();

if (!isset($_SESSION['token'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        
        #navbar {
            background-color: #333;
            overflow: hidden;
        }
        #navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 20px 16px;
            text-decoration: none;
        }
        #navbar a:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>
<body>
<div id="navbar">
        <a href="#">Dashboard </a>
        <a href="uploadPage.php">Upload Products</a>
        <a href="#">sign-out</a>
    </div>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Upload Your Product</h5>
                        <form action="productManagement/sendProduct.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="product">Product Name:</label>
                                <input type="text" class="form-control" id="product" name="product_name" required>
                            </div>
                            <div class="form-group">
                                <label for="product">Product section:</label>
                                <input type="text" class="form-control" id="product" name="product_section" required>
                            </div>
                            <div class="form-group">
                                <label for="product">Product Description:</label>
                                <input type="text" class="form-control" id="product" name="product_description" required>
                            </div>
                            <div class="form-group">
                                <label for="image">Product Image:</label>
                                <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
