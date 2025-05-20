const mainImg = document.getElementById("mainProductImage");
const stars = document.querySelectorAll("#stars span");
const reviewInput = document.getElementById("review-input");
const submitButton = document.getElementById("submit-btn");
const cancelButton = document.getElementById("cancel-btn");

let selectedProductRating = 0;
function toggleDescription() {
  let visibility = document.getElementById("productDescription");
  const toggleDescriptionButton = document.getElementById("toggleDescription");
  if (visibility.getAttribute("data-visible") === "false") {
    visibility.setAttribute("data-visible", "true");
    toggleDescriptionButton.textContent = "Show Less";
  } else {
    visibility.setAttribute("data-visible", "false");
    toggleDescriptionButton.textContent = "Show More";
  }
}
function productImgLoad(imgSrc) {
  mainImg.src = imgSrc.src;
}
function handleHover(starValue) {
  stars.forEach((s) => {
    const sValue = parseInt(s.getAttribute("data-value"), 10);
    s.classList.toggle("selected", sValue <= starValue);
  });
}
function handleClick(starValue) {
  selectedProductRating = starValue;  
  submitButton.disabled = false;
  cancelButton.disabled = false;
}
function resetHover() {
  stars.forEach((s) => {
    s.classList.remove("selected");
    if (parseInt(s.getAttribute("data-value"), 10) <= selectedProductRating) {
      s.classList.add("selected");
    }
  });
}
function submitReview() {
  if (!reviewInput.value.trim()) {
    alert("Please write an actual review on what you think before submitting.");
  } else if (selectedProductRating == 0) {
    alert("Please provide a rating before submitting.");
  } else if (selectedProductRating > 0 && selectedProductRating <= 5 && reviewInput.value.trim()) {
    alert(`Thank you for your review! You rated this product ${selectedProductRating} stars.`);
    cancelReview();
  }
}
function cancelReview() {
  reviewInput.value = "";
  selectedProductRating = 0; 
  stars.forEach((star) => {
    star.classList.remove("selected");
  });
  submitButton.disabled = true;
  cancelButton.disabled = true
  alert('done bitch')
}
reviewInput.addEventListener("input", function () {
  if (reviewInput.value.trim()) {
    cancelButton.disabled = false;
    submitButton.disabled = false;
  } else {
    cancelButton.disabled = true;
    submitButton.disabled = true;
  }
});
stars.forEach((star) => {
  const starValue = parseInt(star.getAttribute("data-value"), 10);
  star.addEventListener("mouseover", function () {
    handleHover(starValue);
  });
  star.addEventListener("mouseleave", function () {
    resetHover();
  });
  star.addEventListener("click", function () {
    handleClick(starValue);
  });
});
