<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buzz Beverages</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300;400;700&family=Changa+One:ital@0;1&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- <div class="loader" id="loader">
        <div class="loader-number" id="loader-number">0%</div>
    </div> -->

    <header>
        <nav class="navbar">
            <div class="logo">
                <h1>Buzz </h1>
                <h1>Beverages</h1>
            </div>
            <div class="navlist">
                <ul>
                    <li><a href="#">SHOP NOW</a></li>
                    <li><a href="story.php">OUR STORY</a></li>
                    <li><a href="#">FIND US</a></li>
                    <li><a href="#">BLOG</a></li>
                </ul>
            </div>
            <div class="cart">
                <a href="#" id="login-link">LOGIN</a>
                <a href="#" id="cart-link">CART</a>
            </div>

            <div class="popup-overlay" id="popup-overlay">
                <div class="popup">
                    <span class="popup-close" id="popup-close">&times;</span>

                    <div class="popup-form active" id="login-form">
                        <h2>Login</h2>
                        <input type="email" placeholder="Email" required>
                        <input type="password" placeholder="Password" required>
                        <button type="submit">Login</button>
                        <p><a href="#" id="to-forgot-password">Forgot Password?</a></p>
                        <p>Don't have an account? <a href="#" id="to-register">Register</a></p>
                    </div>

                    <div class="popup-form" id="register-form">
                        <h2>Register</h2>
                        <input type="text" placeholder="Full Name" required>
                        <input type="email" placeholder="Email" required>
                        <input type="password" placeholder="Password" required>
                        <input type="password" placeholder="Confirm Password" required>
                        <button type="submit">Register</button>
                        <p>Already have an account? <a href="#" id="to-login-from-register">Login</a></p>
                    </div>

                    <div class="popup-form" id="forgot-password-form">
                        <h2>Forgot Password</h2>
                        <input type="email" placeholder="Email" required>
                        <button type="submit">Send Reset Link</button>
                        <p>Back to <a href="#" id="to-login-from-forgot">Login</a></p>
                    </div>
                </div>
            </div>

            <div class="cart-overlay" id="cart-overlay">
                <div class="side-cart">
                    <span class="cart-close" id="cart-close">&times;</span>
                    <h2>Your Cart</h2>
                    <div class="cart-items">
                        <p>No items in cart.</p>

                        <!-- <div class="cart-item">
                        <h3>Drink Name</h3>
                        <p>Price: $5.99</p>
                        <button class="remove-item">Remove</button>
                    </div> -->
                    </div>
                    <button class="checkout-btn">Checkout</button>
                </div>
            </div>
        </nav>
        <div class="home">
            <h1>eur <span>o</span> pa</h1>
        </div>
        <div class="home-img">
            <img src="Assets/blueberry.png" alt="Drink" id="drink">
            <!-- <img src="Assets/badage.png" alt="Badge" id="badge"> -->
        </div>
    </header>
    <main>
        <div class="ordernow">
            <p>Tastes like the soda you grew up sipping, but with the added benefit of microbiome and digestive health
                support today.</p>
            <a href="#">order now</a>
        </div>
        <div class="about">
            <h1>Taste That Wakes You Up</h1>
        </div>
        <!-- <div class="about-img">
            <img src="Assets/about.png" alt="">
        </div> -->
        <div class="till-line">
            <h1>Energize <i class="fa-solid fa-bolt"></i>Energize <i class="fa-solid fa-bolt"></i>Energize <i
                    class="fa-solid fa-bolt"></i>Energize <i class="fa-solid fa-bolt"></i>Energize <i
                    class="fa-solid fa-bolt"></i>Energize <i class="fa-solid fa-bolt"></i>Energize <i
                    class="fa-solid fa-bolt"></i></h1>
        </div>

        <div class="products">
            <h2>Our Products</h2>
            <div class="product-container">
                <div class="product-card">
                    <img src="Assets/hello.png" alt="Product 1">
                    <div class="product-text">
                        <h3>Energy Boost</h3>
                        <p>A refreshing drink packed with natural energy to power your day.</p>
                        <a href="#">Buy Now</a>
                    </div>
                </div>
                <div class="product-card">
                    <img src="Assets/hello.png" alt="Product 2">
                    <div class="product-text" id="product-text-2">
                        <h3>Health Elixir</h3>
                        <p>Supports your microbiome with a delicious, healthy twist.</p>
                        <a href="#">Buy Now</a>
                    </div>
                </div>
                <div class="product-card">
                    <img src="Assets/hello.png" alt="Product 2">
                    <div class="product-text">
                        <h3>Vitality Shot</h3>
                        <p>Quick hydration with a burst of essential vitamins.</p>
                        <a href="#">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="advantages">
            <div class="advantages-content">
                <h1>Doctor Recommended</h1>
                <h1>Herbal + Ayurvedic Options</h1>
                <h1>Multi-Vitamin Support</h1>
                <h1>Vegan Certified</h1>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="footer-slider-container">
            <div class="footer-img">
                <img src="https://i.pinimg.com/736x/d9/31/29/d93129b37f8ecf1ae98833834179f7ce.jpg" alt="">
                <img src="https://i.pinimg.com/736x/fd/b2/d9/fdb2d9cc097a86313b8d41df6c254d68.jpg" alt="">
                <img src="https://i.pinimg.com/736x/f5/78/b2/f578b2323729173e46bc0bcd533fd6ac.jpg" alt="">
                <img src="https://i.pinimg.com/736x/59/43/a2/5943a28e40716d6006c56fb8820289af.jpg" alt="">
                <img src="https://i.pinimg.com/736x/e7/d6/64/e7d6640ba71e3e6e2ed49a0e14982c93.jpg" alt="">
                <img src="https://i.pinimg.com/736x/c6/b5/77/c6b577af547b6e2be90ad7858314b2e6.jpg" alt="">
                <img src="https://i.pinimg.com/736x/e5/87/c7/e587c710fd0a5066ed0f354bc354bce0.jpg" alt="">

                <!-- duplicate images for smooth loop -->
                <img src="https://i.pinimg.com/736x/d9/31/29/d93129b37f8ecf1ae98833834179f7ce.jpg" alt="">
                <img src="https://i.pinimg.com/736x/fd/b2/d9/fdb2d9cc097a86313b8d41df6c254d68.jpg" alt="">
                <img src="https://i.pinimg.com/736x/f5/78/b2/f578b2323729173e46bc0bcd533fd6ac.jpg" alt="">
                <img src="https://i.pinimg.com/736x/59/43/a2/5943a28e40716d6006c56fb8820289af.jpg" alt="">
                <img src="https://i.pinimg.com/736x/e7/d6/64/e7d6640ba71e3e6e2ed49a0e14982c93.jpg" alt="">
                <img src="https://i.pinimg.com/736x/c6/b5/77/c6b577af547b6e2be90ad7858314b2e6.jpg" alt="">
                <img src="https://i.pinimg.com/736x/e5/87/c7/e587c710fd0a5066ed0f354bc354bce0.jpg" alt="">
            </div>
            <div class="footer-content">
                <div class="social-media">
                    <i class="fa-brands fa-facebook" aria-hidden="true">Facebook</i>
                    <i class="fa-brands fa-twitter" aria-hidden="true"> Twitter</i>
                    <i class="fa-brands fa-instagram" aria-hidden="true"> Instagram</i>
                    <i class="fa-brands fa-linkedin" aria-hidden="true"> Linkedin</i>
                </div>
                <div class="copyright">
                    <p>Copyright 2025 CarePlus. All rights reserved.</p>
                </div>
            </div>
        </div>

    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollTrigger.min.js"></script>
    <script src="script.js"></script>
</body>

</html>