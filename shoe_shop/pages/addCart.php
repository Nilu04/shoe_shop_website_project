<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - Starshoes</title>
    <link rel="stylesheet" href="./styles/addCard.css">
</head>
<style>


</style>

    <header>
        <div class="logo">Starshoes</div>
        <ul class="nav-links">
        <a href="home.php">Home</a>
        <a href="shop.php">Shop</a>
        <a href="addCart.php">AddCart</a>
        <a href="contact.php">Contact Us</a>
        <a href="account.php">Account</a>
        <a href="about.php">About Us</a>
        
        </ul>
    </header>

    <main>
        <section class="products-section">
            <h2>Products</h2>
            <div class="product-list">
                <div class="product-item" data-id="1" data-name="Running Shoes" data-price="120">
                    <img src="images/shoe1.jpg" alt="Running Shoes">
                    <h3>Running Shoes</h3>
                    <p>$120.00</p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
                <div class="product-item" data-id="2" data-name="Formal Shoes" data-price="150">
                    <img src="images/shoe2.jpg" alt="Formal Shoes">
                    <h3>Formal Shoes</h3>
                    <p>$150.00</p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
               
            </div>
        </section>

        <section class="cart-section">
            <h2>Your Cart</h2>
            <div class="cart-items"></div>
            <div class="cart-summary">
                <p>Total: $<span id="cart-total">0.00</span></p>
                <a href="checkout.php">
    <button id="checkout-btn">Checkout</button>
</a>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Starshoes. All Rights Reserved.</p>
    </footer>

    <script src="script.js"></script>
    <script>
        
let cart = [];


function addToCart(id, name, price) {
    const existingProduct = cart.find(item => item.id === id);
    if (existingProduct) {
        existingProduct.quantity += 1;
    } else {
        cart.push({ id, name, price, quantity: 1 });
    }
    updateCartUI();
}


function updateCartUI() {
    const cartItemsContainer = document.querySelector('.cart-items');
    const cartCount = document.getElementById('cart-count');
    const cartTotal = document.getElementById('cart-total');
    cartItemsContainer.innerHTML = ''; 

    let total = 0;
    cart.forEach(product => {
        const cartItem = document.createElement('div');
        cartItem.classList.add('cart-item');
        cartItem.innerHTML = `
            <span>${product.name} (${product.quantity})</span>
            <span>$${(product.price * product.quantity).toFixed(2)}</span>
            <button class="remove-item" data-id="${product.id}">Remove</button>
        `;
        cartItemsContainer.appendChild(cartItem);
        total += product.price * product.quantity;
    });

    cartTotal.textContent = total.toFixed(2);
    cartCount.textContent = cart.length;

   
    document.querySelectorAll('.remove-item').forEach(button => {
        button.addEventListener('click', function () {
            const productId = parseInt(this.getAttribute('data-id'));
            removeFromCart(productId);
        });
    });
}


function removeFromCart(id) {
    cart = cart.filter(product => product.id !== id);
    updateCartUI();
}


document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', function () {
        const productElement = this.parentElement;
        const id = parseInt(productElement.getAttribute('data-id'));
        const name = productElement.getAttribute('data-name');
        const price = parseFloat(productElement.getAttribute('data-price'));

        addToCart(id, name, price);
    });
});



    </script>
</body>
</html>
