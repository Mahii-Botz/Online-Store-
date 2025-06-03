<?php
session_start();
if (!isset($_SESSION['order_success'])) {
    header("Location: index.php");
    exit();
}
unset($_SESSION['order_success']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You | Maki Store</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f0ff;
            margin: 0;
            padding: 20px;
            color: #333;
            text-align: center;
        }
        .thank-you-container {
            max-width: 600px;
            margin: 50px auto;
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h1 {
            color: #8a2be2;
        }
        .home-btn {
            background-color: #8a2be2;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
        }
        .home-btn:hover {
            background-color: #7b1fa2;
        }
    </style>
</head>
<body>
    <div class="thank-you-container">
        <h1>Thank You for Your Order!</h1>
        <p>Your order has been received and will be processed shortly.</p>
        <p>We'll contact you if we need any additional information.</p>
        <a href="index.php" class="home-btn">Back to Home</a>
    </div>
</body>
</html>