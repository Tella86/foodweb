document.addEventListener("DOMContentLoaded", function() {
    const menuIcon = document.querySelector('.burger--icon');
    const menuNav = document.querySelector('.menu-nav');

    // Toggle the active class on menuNav when menuIcon is clicked
    menuIcon.addEventListener('click', function() {
        menuNav.classList.toggle('active');
    });
});

function showMenuItems(menuType) {
    var otherCards = document.getElementById("otherCards");
    otherCards.innerHTML = ""; // Clear previous menu items
    
    // Create and append menu items based on the clicked card
    if (menuType === 'burger') {
        otherCards.innerHTML += `
            <div class="card">
                <img src="./images/burger.png" alt="Burger" />
                <h4 class="card--title">Burger</h4>
                <div class="card--price">
                    <div class="price">$5.99</div>
                </div>
            </div>
            <!-- Add more burger items here if needed -->
        `;
    } else if (menuType === 'chips') {
        otherCards.innerHTML += `
            <div class="card">
                <img src="./images/chips.png" alt="Chips" />
                <h4 class="card--title">Chips</h4>
                <div class="card--price">
                    <div class="price">$2.49</div>
                </div>
            </div>
            <div class="card">
                <img src="./images/chips.png" alt="Chips" />
                <h4 class="card--title">Chips</h4>
                <div class="card--price">
                    <div class="price">$5.49</div>
                </div>
            </div>
            <div class="card">
                <img src="./images/chips.png" alt="Chips" />
                <h4 class="card--title">Chips</h4>
                <div class="card--price">
                    <div class="price">$7.49</div>
                </div>
            </div>
            <!-- Add more chips items here if needed -->
        `;
    } else if (menuType === 'milkshake') {
        otherCards.innerHTML += `
            <div class="card">
                <img src="./images/milkshake.png" alt="Milkshake" />
                <h4 class="card--title">Milkshake</h4>
                <div class="card--price">
                    <div class="price">$3.99</div>
                </div>
            </div>
            <!-- Add more milkshake items here if needed -->
        `;
    } else if (menuType === 'pizza') {
        otherCards.innerHTML += `
            <div class="card">
                <img src="./images/pizza.png" alt="Pizza" />
                <h4 class="card--title">Pizza</h4>
                <div class="card--price">
                    <div class="price">$7.99</div>
                </div>
            </div>
            <!-- Add more pizza items here if needed -->
        `;
    }
    // Add more else if blocks for other menu types as needed
    otherCards.classList.add("visible");
}
