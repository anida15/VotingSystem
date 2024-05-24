<?php
session_start();

if (!isset($_SESSION['token'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $servername = "localhost";
 $username = "root";
 $password = "";
 $db ="aminaShop";
 
 date_default_timezone_set('Africa/Nairobi');
 $conn = mysqli_connect($servername, $username, $password,$db);

 


    // Handle file upload
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);


    // Get product details from form
    $productName = $_POST['product_name'];
    $productSection = $_POST['product_section'];
    $productDescription = $_POST['product_description'];
    $imagePath = $targetFile;

    $sql = "INSERT INTO products ( productName, productSection, productDescription, productImage) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $productName, $productSection, $productDescription, $imagePath);
    $stmt->execute();
    $stmt->close();

    $conn->close();

    header("Location: ../uploadPage.php");
    exit();
}
?>
