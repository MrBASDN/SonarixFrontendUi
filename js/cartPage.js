window.onload = function() {
    toggleSection('cartContainer');
  };

function toggleSection(page) {
    let slider = document.querySelector('.slider');
    let addressContainer = document.querySelector('[data-title="delivery"]');
    let paymentContainer = document.querySelector('[data-title="payment"]');
    let cartCard = document.getElementById("cart-wrapper");
    let addressCard = document.getElementById("address-wrapper");
    let paymentCard = document.getElementById("payment-wrapper");

    switch (page) {
        case "cartContainer":
            slider.style.transform = `translateX(-${0 * 100}dvw)`;
            cartCard.classList.remove('hidden-card');
            addressCard.classList.add('hidden-card');
            paymentCard.classList.add('hidden-card');
            addressContainer.classList.remove('active');
            paymentContainer.classList.remove('active');
            break;
        case "addressContainer":
            cartCard.classList.add('hidden-card');
            addressCard.classList.remove('hidden-card');
            paymentCard.classList.add('hidden-card');
            slider.style.transform = `translateX(-${1 * 100}dvw)`;
            addressContainer.classList.add('active');
            paymentContainer.classList.remove('active');
            break;
        case "paymentContainer":
            cartCard.classList.add('hidden-card');
            addressCard.classList.add('hidden-card');
            paymentCard.classList.remove('hidden-card');
            slider.style.transform = `translateX(-${2 * 100}dvw)`;
            addressContainer.classList.add('active');
            paymentContainer.classList.add('active');
            break;
        default:
            cartCard.classList.remove('hidden-card');
            addressCard.classList.add('hidden-card');
            paymentCard.classList.add('hidden-card');
            slider.style.transform = `translateX(-${0 * 100}dvw)`
    }   
}