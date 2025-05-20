function toggleBoxes(status) {
    let slider = document.querySelector('.slider-container');
    switch (status) {
        case "signIn":
            slider.style.transform = 'translateX(0)';
            break;
        case "signUp":
            slider.style.transform = 'translateX(-50%)';
            break;
    }
}