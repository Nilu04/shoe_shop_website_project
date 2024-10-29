<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starshoes Online Shop</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="./styles/index.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <span class="red">Star</span><span class="blue">shoes</span>
            </div>
            <nav>
            <ul class="nav-links">
        <a href="index.php">Register</a>
        <a href="home.php">Home</a>
        <a href="shop.php">Shop</a>
        <a href="addCart.php">AddCart</a>
        <a href="contact.php">Contact Us</a>
        <a href="account.php">Account</a>
        <a href="about.php">About Us</a>
        <a href="checkout.php">Check out</a>
        
        </nav>
    </header>

    <div class="flash-sale-container">
        <div class="product-card">
            <div class="badge">20% OFF</div>
            <div class="product-image">
                <img src="../asset/s2.jpg" alt="Starshoes">
                <div class="free-offer">FREE socks</div>
            </div>
            <div class="countdown">
                <p>Offer Ends In</p>
                <div class="timer">
                    <span>0</span> DAYS
                    <span>11</span> HR
                    <span>07</span> MIN
                    <span>24</span> SEC
                </div>
            </div>
            <div class="product-info">
                <h3>Canvas Shoes</h3>
                <p class="old-price">Rs. 10,990</p>
                <p class="new-price">Rs. 8,790</p>
                <p class="save">SAVE Rs. 2,200</p>
                <button class="buy-now">BUY NOW</button>
            </div>
        </div>

        <div class="product-card">
            <div class="badge">36% OFF</div>
            <div class="product-image">
                <img src="../asset/offer11.jpg" alt="homepack">
            </div>
            <div class="countdown">
                <p>Offer Ends In</p>
                <div class="timer">
                    <span>0</span> DAYS
                    <span>23</span> HR
                    <span>08</span> MIN
                    <span>24</span> SEC
                </div>
            </div>
            <div class="product-info">
                <h3>Country Famous for its trendy leather Products</h3>
                <p class="old-price">Rs. 23,690</p>
                <p class="new-price">Rs. 14,990</p>
                <p class="save">SAVE Rs. 8,700</p>
                <button class="buy-now">BUY NOW</button>
            </div>
        </div>

        <div class="product-card">
            <div class="badge">41% OFF</div>
            <div class="product-image">
                <img src="../asset/s4.jpg" alt="shoe">
            </div>
            <div class="countdown">
                <p>Offer Ends In</p>
                <div class="timer">
                    <span>0</span> DAYS
                    <span>11</span> HR
                    <span>07</span> MIN
                    <span>24</span> SEC
                </div>
            </div>
            <div class="product-info">
                <h3>Red High Heels Shoes</h3>
                <p class="old-price">Rs. 5,990</p>
                <p class="new-price">Rs. 3,530</p>
                <p class="save">SAVE Rs. 2,450</p>
                <button class="buy-now">BUY NOW</button>
            </div>
        </div>
    </div>

    <main>
        <section class="hero">
            <h1>Welcome to Starshoes Online Shop</h1>
            <p>Your one-stop shop for the best shoes and accessories.</p>
            <a href="shop.html" class="btn">Shop Now</a>
            <img src="../asset/logo1.png" alt="Starshoes Logo">
        </section>

        <section class="products">
            <h2>Featured Products</h2>
            <div class="product-carousel">
                <div class="carousel-title">Starshoes</div>
                <div class="view-all">
                    <a href="shop.html">View All</a>
                </div>
                <div class="product-slider">
                    <div class="product">
                        <img src="../asset/s1.jpg" alt="Product 1">
                        <div class="product-name">shoe 1</div>
                        <div class="product-price">Rs. 750</div>
                    </div>
                    <div class="product">
                        <img src="../asset/s2.jpg" alt="Product 2">
                        <div class="product-name">shoe 2</div>
                        <div class="product-price">Rs. 750</div>
                    </div>
                    <div class="product">
                        <img src="../asset/s3.jpg" alt="Product 3">
                        <div class="product-name">shoe 3</div>
                        <div class="product-price">Rs. 750</div>
                    </div>
                    <div class="product">
                        <img src="../asset/s4.jpg" alt="Product 4">
                        <div class="product-name">Heels</div>
                        <div class="product-price">Rs. 4,750</div>
                    </div>
                    <div class="product">
                        <img src="../asset/s5.jpg" alt="Product 5">
                        <div class="product-name">Bag</div>
                        <div class="product-price">Rs. 2,250</div>
                    </div>
                    <div class="product">
                        <img src="../asset/s6.jpg" alt="Product 6">
                        <div class="product-name">Shoe 4</div>
                        <div class="product-price">Rs. 2,250</div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <section class="hero">
        <img src="../asset/offer3.jpg" alt="Starshoes Offer">
    </section>

    <footer>
        <p>&copy; 2024 Starshoes. All Rights Reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.product-slider').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: true,
                prevArrow: '<button type="button" class="slick-prev">←</button>',
                nextArrow: '<button type="button" class="slick-next">→</button>',
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });

            $('.btn').click(function(e) {
                e.preventDefault();
                alert('Item added to cart!');
            });
        });
    </script>
</body>
</html>
