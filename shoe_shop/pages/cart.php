<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Details - Starshoes</title>
    <link rel="stylesheet" href="styles/card.css">
</head>

<body>
    <header>
        <div class="logo">Starshoes</div>
        
    </header>

    <main>
        <section class="card-section">
            <h2>Add New Card</h2>
            <form id="card-form">
                <div class="form-group">
                    <label for="card-name">Cardholder Name</label>
                    <input type="text" id="card-name" required>
                </div>
                <div class="form-group">
                    <label for="card-number">Card Number</label>
                    <input type="text" id="card-number" maxlength="16" pattern="\d{16}" required>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="card-expiry">Expiry Date</label>
                        <input type="text" id="card-expiry" placeholder="MM/YY" maxlength="5" required>
                    </div>
                    <div class="form-group">
                        <label for="card-cvv">CVV</label>
                        <input type="text" id="card-cvv" maxlength="3" pattern="\d{3}" required>
                    </div>
                </div>
                <button type="submit" class="btn">Add Card</button>
            </form>
        </section>

        <section class="saved-cards-section">
            <h2>Saved Cards</h2>
            <div id="saved-cards"></div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Starshoes. All Rights Reserved.</p>
    </footer>

    <script src="script.js"></script>
    <script>
       
let savedCards = JSON.parse(localStorage.getItem('savedCards')) || [];


function displaySavedCards() {
    const savedCardsContainer = document.getElementById('saved-cards');
    savedCardsContainer.innerHTML = '';

    savedCards.forEach((card, index) => {
        const cardElement = document.createElement('div');
        cardElement.classList.add('saved-card');
        cardElement.innerHTML = `
            <span>${maskCardNumber(card.number)} - Expires ${card.expiry}</span>
            <button data-index="${index}">Delete</button>
        `;
        savedCardsContainer.appendChild(cardElement);
    });

   
    document.querySelectorAll('.saved-card button').forEach(button => {
        button.addEventListener('click', function () {
            const index = this.getAttribute('data-index');
            removeCard(index);
        });
    });
}


function maskCardNumber(cardNumber) {
    return cardNumber.slice(0, 12).replace(/\d/g, '*') + cardNumber.slice(-4);
}


document.getElementById('card-form').addEventListener('submit', function (e) {
    e.preventDefault();

    const cardName = document.getElementById('card-name').value;
    const cardNumber = document.getElementById('card-number').value;
    const cardExpiry = document.getElementById('card-expiry').value;
    const cardCVV = document.getElementById('card-cvv').value;

    const newCard = {
        name: cardName,
        number: cardNumber,
        expiry: cardExpiry,
        cvv: cardCVV
    };

    savedCards.push(newCard);
    localStorage.setItem('savedCards', JSON.stringify(savedCards));

    displaySavedCards();
    this.reset();
});


function removeCard(index) {
    savedCards.splice(index, 1);
    localStorage.setItem('savedCards', JSON.stringify(savedCards));
    displaySavedCards();
}


document.addEventListener('DOMContentLoaded', function () {
    displaySavedCards();
});

    </script>
</body>
</html> -->
