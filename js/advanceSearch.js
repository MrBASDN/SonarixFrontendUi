function toggleSelection(element) {
    const isSelected = element.getAttribute("data-selected") === "true";
    element.setAttribute("data-selected", !isSelected);
}

function toggleFilters() {
    let itemList = document.getElementById("filterContainer");
    let arrowhead = document.getElementById("arrowhead");
    if (itemList.dataset.menu === "open") {
        arrowhead.style.transform = "rotate(0deg)";
        itemList.dataset.menu = "closed";
    } else {
        arrowhead.style.transform = "rotate(180deg)";
        itemList.dataset.menu = "open";
    }
}

