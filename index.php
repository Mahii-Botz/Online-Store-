<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahii Online Store - Unique Gifts & Accessories</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #7c4dff;
            --primary-dark: #5e35b1;
            --secondary: #ff4081;
            --light: #f5f5f5;
            --dark: #212121;
            --gray: #757575;
            --white: #ffffff;
            --shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            --transition: all 0.3s ease;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header Styles */
        header {
            background-color: var(--white);
            box-shadow: var(--shadow);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }
        
        .logo {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary);
            text-decoration: none;
            display: flex;
            align-items: center;
        }
        
        .logo i {
            margin-right: 10px;
            color: var(--secondary);
        }
        
        .nav-links {
            display: flex;
            list-style: none;
        }
        
        .nav-links li {
            margin-left: 30px;
        }
        
        .nav-links a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            transition: var(--transition);
        }
        
        .nav-links a:hover {
            color: var(--primary);
        }
        
        .cart-icon {
            position: relative;
        }
        
        .cart-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background-color: var(--secondary);
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            font-size: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: var(--white);
            padding: 80px 0;
            text-align: center;
        }
        
        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }
        
        .hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 30px;
            opacity: 0.9;
        }
        
        /* Products Section */
        .section-title {
            text-align: center;
            margin: 60px 0 40px;
            position: relative;
        }
        
        .section-title h2 {
            font-size: 2rem;
            color: var(--dark);
            display: inline-block;
            background-color: var(--white);
            padding: 0 20px;
            position: relative;
            z-index: 1;
        }
        
        .section-title::after {
            content: "";
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background-color: #ddd;
            z-index: 0;
        }
        
        .products {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }
        
        .product {
            background-color: var(--white);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }
        
        .product:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .product-image {
            height: 250px;
            overflow: hidden;
            position: relative;
        }
        
        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }
        
        .product:hover .product-image img {
            transform: scale(1.05);
        }
        
        .product-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: var(--secondary);
            color: var(--white);
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }
        
        .product-content {
            padding: 20px;
        }
        
        .product-category {
            color: var(--gray);
            font-size: 14px;
            margin-bottom: 5px;
        }
        
        .product-title {
            font-size: 1.1rem;
            margin-bottom: 10px;
            color: var(--dark);
        }
        
        .product-description {
            color: var(--gray);
            font-size: 14px;
            margin-bottom: 15px;
            min-height: 60px;
        }
        
        .product-price {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 15px;
        }
        
        .price {
            font-weight: 700;
            color: var(--primary);
            font-size: 1.2rem;
        }
        
        .old-price {
            text-decoration: line-through;
            color: var(--gray);
            font-size: 0.9rem;
            margin-right: 5px;
        }
        
        .buy-btn {
            background-color: var(--primary);
            color: var(--white);
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 500;
            transition: var(--transition);
            display: flex;
            align-items: center;
        }
        
        .buy-btn i {
            margin-right: 5px;
        }
        
        .buy-btn:hover {
            background-color: var(--primary-dark);
        }
        
        /* Footer */
        footer {
            background-color: var(--dark);
            color: var(--white);
            padding: 60px 0 20px;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }
        
        .footer-column h3 {
            font-size: 1.2rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-column h3::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background-color: var(--primary);
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: #bdbdbd;
            text-decoration: none;
            transition: var(--transition);
        }
        
        .footer-links a:hover {
            color: var(--white);
            padding-left: 5px;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .social-links a {
            color: var(--white);
            background-color: rgba(255, 255, 255, 0.1);
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }
        
        .social-links a:hover {
            background-color: var(--primary);
            transform: translateY(-3px);
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #bdbdbd;
            font-size: 14px;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                padding: 15px 0;
            }
            
            .nav-links {
                margin-top: 20px;
            }
            
            .nav-links li {
                margin: 0 10px;
            }
            
            .hero h1 {
                font-size: 2rem;
            }
            
            .hero p {
                font-size: 1rem;
            }
            
            .products {
                grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            }
        }
        
        @media (max-width: 480px) {
            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .nav-links li {
                margin: 5px 10px;
            }
            
            .hero {
                padding: 60px 0;
            }
            
            .section-title h2 {
                font-size: 1.5rem;
            }
            
            .products {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Header with Navigation -->
    <header>
        <div class="container">
            <nav class="navbar">
                <a href="#" class="logo">
                    <i class="fas fa-gifts"></i> Mahii Online Store
                </a>
                <ul class="nav-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Collections</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li>
                        <a href="#" class="cart-icon">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="cart-count">3</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Discover Your Perfect Gift</h1>
            <p>Handpicked items that bring joy and make moments special. Find something unique for yourself or your loved ones.</p>
        </div>
    </section>

    <!-- Featured Products -->
    <div class="container">
        <div class="section-title">
            <h2>Featured Products</h2>
        </div>
        
        <div class="products">
            <!-- Product 1 -->
            <div class="product">
                <div class="product-image">
                    <img src="Teddy Bear.jpeg" alt="Cute Teddy Bear">
                    <span class="product-badge">Bestseller</span>
                </div>
                <div class="product-content">
                    <span class="product-category">Soft Toys</span>
                    <h3 class="product-title">Cute Teddy Bear</h3>
                    <p class="product-description">Fluffy and lovable. The perfect cuddle buddy for all ages!</p>
                    <div class="product-price">
                        <div>
                            <span class="old-price">LKR 3500.00</span>
                            <span class="price">LKR 2500.00</span>
                        </div>
                        <a href="order.php?product=Cute Teddy Bear" class="buy-btn">
                            <i class="fas fa-shopping-cart"></i> Buy
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Product 2 -->
            <div class="product">
                <div class="product-image">
                    <img src="heart.jpeg" alt="Heart Necklace">
                    <span class="product-badge">New</span>
                </div>
                <div class="product-content">
                    <span class="product-category">Jewelry</span>
                    <h3 class="product-title">Heart Necklace</h3>
                    <p class="product-description">Shine with love and elegance — wear your heart with this beautiful piece!</p>
                    <div class="product-price">
                        <div>
                            <span class="price">LKR 1000.00</span>
                        </div>
                        <a href="order.php?product=Heart Necklace" class="buy-btn">
                            <i class="fas fa-shopping-cart"></i> Buy
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Product 3 -->
            <div class="product">
                <div class="product-image">
                    <img src="suprise box.jpeg" alt="Surprise Box">
                    <span class="product-badge">Limited</span>
                </div>
                <div class="product-content">
                    <span class="product-category">Mystery Box</span>
                    <h3 class="product-title">Surprise Box</h3>
                    <p class="product-description">What's inside? Maybe something magical just for you! Contents worth $50+.</p>
                    <div class="product-price">
                        <div>
                            <span class="price">LKR 1500.00</span>
                        </div>
                        <a href="order.php?product=Surprise Box" class="buy-btn">
                            <i class="fas fa-shopping-cart"></i> Buy
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Product 4 -->
            <div class="product">
                <div class="product-image">
                    <img src="phone case.jpeg" alt="Pretty Phone Case">
                </div>
                <div class="product-content">
                    <span class="product-category">Accessories</span>
                    <h3 class="product-title">Pretty Phone Case</h3>
                    <p class="product-description">Make your phone stand out with this elegant floral design case.</p>
                    <div class="product-price">
                        <div>
                            <span class="old-price">$22.99</span>
                            <span class="price">$15.99</span>
                        </div>
                        <a href="order.php?product=Pretty Phone Case" class="buy-btn">
                            <i class="fas fa-shopping-cart"></i> Buy
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Mahii Store</h3>
                    <p>Bringing you unique and special gifts that make every moment memorable.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
                
                <div class="footer-column">
                    <h3>Shop</h3>
                    <ul class="footer-links">
                        <li><a href="#">All Products</a></li>
                        <li><a href="#">New Arrivals</a></li>
                        <li><a href="#">Bestsellers</a></li>
                        <li><a href="#">Special Offers</a></li>
                        <li><a href="#">Gift Cards</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Customer Service</h3>
                    <ul class="footer-links">
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Shipping Policy</a></li>
                        <li><a href="#">Returns & Exchanges</a></li>
                        <li><a href="#">Track Order</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>About</h3>
                    <ul class="footer-links">
                        <li><a href="#">Our Story</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2023 Mahii Online Store. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>