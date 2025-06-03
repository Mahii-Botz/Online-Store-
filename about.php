<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Mahii Online Store</title>
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
        
        /* Header Styles (consistent with main site) */
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
        
        /* About Hero Section */
        .about-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: var(--white);
            padding: 120px 0;
            text-align: center;
            margin-bottom: 60px;
        }
        
        .about-hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            font-weight: 700;
        }
        
        .about-hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto;
            opacity: 0.9;
        }
        
        /* About Content Sections */
        .about-section {
            display: flex;
            align-items: center;
            margin-bottom: 80px;
            gap: 50px;
        }
        
        .about-section.reverse {
            flex-direction: row-reverse;
        }
        
        .about-image {
            flex: 1;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--shadow);
        }
        
        .about-image img {
            width: 100%;
            height: auto;
            display: block;
            transition: var(--transition);
        }
        
        .about-image:hover img {
            transform: scale(1.03);
        }
        
        .about-text {
            flex: 1;
        }
        
        .about-text h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: var(--primary);
            position: relative;
            display: inline-block;
        }
        
        .about-text h2::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 3px;
            background-color: var(--secondary);
        }
        
        .about-text p {
            margin-bottom: 20px;
            color: var(--gray);
        }
        
        /* Team Section */
        .team-section {
            text-align: center;
            margin-bottom: 80px;
        }
        
        .section-title {
            margin-bottom: 50px;
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
        
        .team-members {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 30px;
        }
        
        .team-member {
            background-color: var(--white);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }
        
        .team-member:hover {
            transform: translateY(-10px);
        }
        
        .member-image {
            height: 300px;
            overflow: hidden;
        }
        
        .member-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }
        
        .team-member:hover .member-image img {
            transform: scale(1.05);
        }
        
        .member-info {
            padding: 20px;
        }
        
        .member-info h3 {
            font-size: 1.2rem;
            margin-bottom: 5px;
        }
        
        .member-info p.position {
            color: var(--primary);
            font-weight: 500;
            margin-bottom: 15px;
        }
        
        .member-info p.bio {
            color: var(--gray);
            font-size: 14px;
            margin-bottom: 15px;
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        
        .social-links a {
            color: var(--gray);
            transition: var(--transition);
        }
        
        .social-links a:hover {
            color: var(--primary);
        }
        
        /* Values Section */
        .values-section {
            margin-bottom: 80px;
        }
        
        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .value-card {
            background-color: var(--white);
            border-radius: 12px;
            padding: 30px;
            box-shadow: var(--shadow);
            text-align: center;
            transition: var(--transition);
        }
        
        .value-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .value-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 20px;
        }
        
        .value-card h3 {
            margin-bottom: 15px;
            font-size: 1.3rem;
        }
        
        .value-card p {
            color: var(--gray);
        }
        
        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: var(--white);
            padding: 60px 0;
            text-align: center;
            border-radius: 12px;
            margin-bottom: 80px;
        }
        
        .cta-section h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }
        
        .cta-section p {
            max-width: 700px;
            margin: 0 auto 30px;
            font-size: 1.1rem;
            opacity: 0.9;
        }
        
        .cta-btn {
            display: inline-block;
            background-color: var(--white);
            color: var(--primary);
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }
        
        .cta-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        /* Footer (consistent with main site) */
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
        
        .footer-social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .footer-social-links a {
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
        
        .footer-social-links a:hover {
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
        @media (max-width: 992px) {
            .about-section {
                flex-direction: column;
                gap: 30px;
            }
            
            .about-section.reverse {
                flex-direction: column;
            }
            
            .about-image, .about-text {
                width: 100%;
            }
        }
        
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                padding: 15px 0;
            }
            
            .nav-links {
                margin-top: 20px;
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .nav-links li {
                margin: 5px 15px;
            }
            
            .about-hero h1 {
                font-size: 2.2rem;
            }
            
            .about-hero p {
                font-size: 1rem;
            }
        }
        
        @media (max-width: 480px) {
            .about-hero {
                padding: 80px 0;
            }
            
            .about-hero h1 {
                font-size: 1.8rem;
            }
            
            .section-title h2 {
                font-size: 1.5rem;
            }
            
            .values-grid {
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
                <a href="index.html" class="logo">
                    <i class="fas fa-gifts"></i> Mahii
                </a>
                <ul class="nav-links">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="about.html" class="active">About</a></li>
                    <li><a href="#">Contact</a></li>
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
    <section class="about-hero">
        <div class="container">
            <h1>Our Story</h1>
            <p>Discover the passion and dedication behind Mahii Online Store</p>
        </div>
    </section>

    <!-- Our Story Section -->
    <div class="container">
        <section class="about-section">
            <div class="about-image">
                <img src="https://images.unsplash.com/photo-1526948128573-703ee1aeb6fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" alt="Our store">
            </div>
            <div class="about-text">
                <h2>How It All Began</h2>
                <p>Founded in 2018, Mahii started as a small boutique with a simple mission: to bring joy through thoughtfully curated gifts. What began as a passion project between two friends quickly grew into a beloved destination for unique finds.</p>
                <p>Our founders, Sarah and Mia, noticed a gap in the market for affordable yet high-quality gifts that carried meaning. They started by hand-selecting each item in the store, ensuring every product told a story or sparked happiness.</p>
                <p>Today, while we've grown beyond our humble beginnings, we still maintain that personal touch. Every item in our collection is still carefully selected by our team, with the same attention to detail and commitment to quality that started it all.</p>
            </div>
        </section>

        <section class="about-section reverse">
            <div class="about-text">
                <h2>Our Philosophy</h2>
                <p>At Mahii, we believe that the best gifts are those that create connections. Whether it's a plush teddy bear that becomes a child's constant companion or a piece of jewelry that symbolizes love, we know these items become part of life's precious moments.</p>
                <p>We're committed to sustainability and ethical sourcing. Over 80% of our products come from small businesses and independent artisans who share our values. We're proud to support these creators while bringing you unique items you won't find anywhere else.</p>
                <p>Customer happiness is at the core of everything we do. From our easy returns policy to our handwritten thank-you notes, we go the extra mile to make every shopping experience special.</p>
            </div>
            <div class="about-image">
                <img src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" alt="Our philosophy">
            </div>
        </section>
    </div>

    <!-- Team Section -->
    <div class="container">
        <section class="team-section">
            <div class="section-title">
                <h2>Developer</h2>
            </div>
            
            <div class="team-members">
                <div class="team-member">
                    <div class="member-image">
                        <img src="my.jpg" alt="Sarah Johnson">
                    </div>
                    <div class="member-info">
                        <h3>Mihiranga Wickramasinghe</h3>
                        <p class="position">Co-Founder & CEO</p>
                        <p class="bio">Mihiranga Wickramasinghe is fullstack Developer in this project.</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="team-member">
                    <div class="member-image">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=634&q=80" alt="Mia Chen">
                    </div>
                    <div class="member-info">
                        <h3>Mia Chen</h3>
                        <p class="position">Co-Founder & Creative Director</p>
                        <p class="bio">Mia's design background and passion for unique craftsmanship shape our product selection and brand aesthetic.</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                
               </div>

    <!-- Values Section -->
    <div class="container">
        <section class="values-section">
            <div class="section-title">
                <h2>Our Core Values</h2>
            </div>
            
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Thoughtful Curation</h3>
                    <p>Every product in our store is carefully selected for its quality, uniqueness, and ability to bring joy.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-hand-holding-heart"></i>
                    </div>
                    <h3>Customer Happiness</h3>
                    <p>Your satisfaction is our top priority. We stand behind every product with our happiness guarantee.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Sustainable Practices</h3>
                    <p>We're committed to eco-friendly packaging and supporting suppliers with ethical practices.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Continuous Innovation</h3>
                    <p>We're always exploring new products and ways to improve your shopping experience.</p>
                </div>
            </div>
        </section>
    </div>

    <!-- CTA Section -->
    <div class="container">
        <section class="cta-section">
            <h2>Ready to Find Your Perfect Gift?</h2>
            <p>Explore our carefully curated collection of unique items that bring joy to everyday moments.</p>
            <a href="index.html" class="cta-btn">Shop Now</a>
        </section>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Mahii Store</h3>
                    <p>Bringing you unique and special gifts that make every moment memorable.</p>
                    <div class="footer-social-links">
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