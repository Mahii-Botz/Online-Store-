<?php
include 'db.php';

// Start session and get product name from URL
session_start();
$product_name = isset($_GET['product']) ? htmlspecialchars($_GET['product']) : 'Product';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database connection
$db = new mysqli('localhost', 'root', '', 'mahii_store');

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    
    // Prepare and bind
    $stmt = $db->prepare("INSERT INTO orders (product_name, customer_name, phone_number, address) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $product_name, $name, $phone, $address);
    
    // Set parameters and execute
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    
    if ($stmt->execute()) {
        $_SESSION['order_success'] = true;
        header("Location: thank_you.php");
        exit();
    } else {
        $error = "Error: " . $stmt->error;
    }
    
    $stmt->close();
    $db->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order <?php echo $product_name; ?> | Maki Store</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f0ff;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        .order-container {
            max-width: 600px;
            margin: 30px auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h1 {
            color: #8a2be2;
            text-align: center;
        }
        .product-info {
            text-align: center;
            margin-bottom: 20px;
            font-size: 18px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        .submit-btn {
            background-color: #8a2be2;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }
        .submit-btn:hover {
            background-color: #7b1fa2;
        }
        .error {
            color: red;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="order-container">
        <h1>Complete Your Order</h1>
        
        <div class="product-info">
            You're ordering: <strong><?php echo $product_name; ?></strong>
        </div>
        
        <?php if (isset($error)): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
        
        <form method="POST">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            
            <div class="form-group">
                <label for="address">Shipping Address</label>
                <textarea id="address" name="address" rows="4" required></textarea>
            </div>
            
            <button type="submit" class="submit-btn">Complete Order</button>
        </form>
    </div>
</body>
</html>