<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop - Starshoes</title>
    <link rel="stylesheet" href="./styles/shop.css">
   
</head>

<body>
<header>
    <div class="logo">
        <span class="red">Star</span><span class="blue">shoes</span>
    </div>
    <ul class="nav-links">
        <a href="home.php">Home</a>
        <a href="shop.php">Shop</a>
        <a href="addCart.php">AddCart</a>
        <a href="contact.php">Contact Us</a>
        <a href="account.php">Account</a>
        <a href="about.php">About Us</a>
    </ul>
    <div class="cart-icon">
        <a href="checkout.php">
            <img src="../asset/cart_icon.png" alt="Cart">
            <span id="cart-count">0</span>
        </a>
    </div>
</header>
</body>

<main>
    <section class="products">
        <h2>Our Products</h2>
        <div class="product-grid">
            <!-- Products listed here -->
            <div class="product-item">
                <img src="../asset/b.jpg" alt="Red Running Shoes">
                <h3> Shoes</h3>
                <p>$120.00</p>
                <a href="#" class="btn">Add to Cart</a>
            </div>
            <div class="product-item">
                        <img src="../asset/s3.jpg" alt="White Running Shoes">
                        <h3> Shoes</h3>
                        <p>$120.00</p>
                        <a href="#" class="btn">Add to Cart</a>
                    </div>
                    <div class="product-item">
                        <img src="../asset/s4.jpg" alt="Brown Formal Shoes">
                        <h3>Heels</h3>
                        <p>$150.00</p>
                        <a href="#" class="btn">Add to Cart</a>
                    </div>
                    <div class="product-item">
                        <img src="../asset/s5.jpg" alt="Classic Formal Shoes">
                        <h3> Bag</h3>
                        <p>$150.00</p>
                        <a href="#" class="btn">Add to Cart</a>
                    </div>
                    <div class="product-item">
                        <img src="../asset/s6.jpg" alt="Elegant Formal Shoes">
                        <h3> Shoes</h3>
                        <p>$150.00</p>
                        <a href="#" class="btn">Add to Cart</a>
                    </div>
                    <div class="product-item">
                        <img src="../asset/s7.jpg" alt="Stylish Running Shoes">
                        <h3>Bag</h3>
                        <p>$120.00</p>
                        <a href="#" class="btn">Add to Cart</a>
                    </div>
                    <div class="product-item">
                        <img src="../asset/s8.jpg" alt="Modern Formal Shoes">
                        <h3>Bag</h3>
                        <p>$150.00</p>
                        <a href="#" class="btn">Add to Cart</a>
                    </div>
                    <div class="product-item">
                        <img src="../asset/s9.jpg" alt="Blue Formal Shoes">
                        <h3>Bag</h3>
                        <p>$150.00</p>
                        <a href="#" class="btn">Add to Cart</a>
                    </div>
            <!-- Add other product items similarly -->
        </div>
    </section>
</main>

<footer>
    <p>&copy; 2024 Starshoes. All Rights Reserved.</p>
</footer>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Initialize cart count from local storage or set to 0 if not found
        let cartCount = parseInt(localStorage.getItem("cartCount")) || 0;
        const cartCountElement = document.getElementById("cart-count");
        
        // Set the initial display for cart count
        cartCountElement.textContent = cartCount;

        // Select all "Add to Cart" buttons
        const addToCartButtons = document.querySelectorAll(".btn");

        addToCartButtons.forEach(button => {
            button.addEventListener("click", function (e) {
                e.preventDefault(); // Prevent any default behavior for the button

                // Increase cart count
                cartCount++;
                cartCountElement.textContent = cartCount;

                // Save the updated cart count to local storage
                localStorage.setItem("cartCount", cartCount);
            });
        });
    });
</script>

</body>
</html>
