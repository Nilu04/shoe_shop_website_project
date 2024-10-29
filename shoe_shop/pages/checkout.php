<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Your Store</title>
    <link rel="stylesheet" href="./styles/checkout.css">
 
</head>
<body>
    <div class="checkout-container">
        <h2>Checkout</h2>
        
        <form>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="address">Shipping Address</label>
            <input type="text" id="address" name="address" required>

            <label for="total">Order Total ($)</label>
            <input type="number" id="total" name="total" required>

            <div class="payment-section">
                <h3>Payment Details</h3>
                <label for="card_number">Card Number</label>
                <input type="text" id="card_number" name="card_number" required pattern="\d{16}" placeholder="1234 5678 9101 1121">

                <label for="expiry_date">Expiry Date</label>
                <input type="text" id="expiry_date" name="expiry_date" required placeholder="MM/YY">

                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" required pattern="\d{3}" placeholder="123">
            </div>

            <button type="submit" class="safe-button">Place Order</button>
        </form>
    </div>
</body>
</html>
