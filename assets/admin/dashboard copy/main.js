
let tabButtons = document.querySelectorAll(".tab-button");
let tabContents = document.querySelectorAll(".tab-content");

for (let i = 0; i < tabButtons.length; i++) {
  tabButtons[i].addEventListener("click", function (e) {
    e.preventDefault();
    let currentTab = this.getAttribute("data-tab");

    for (let j = 0; j < tabContents.length; j++) {
      tabContents[j].classList.remove("active");
    }

    for (let k = 0; k < tabButtons.length; k++) {
      tabButtons[k].classList.remove("active");
    }

    document.getElementById(currentTab).classList.add("active");
    this.classList.add("active");
  });
}

// Widget Switcher Active
const elements = document.querySelectorAll(".bwd-slider");

for (let i = 0; i < elements.length; i++) {
  elements[i].addEventListener("click", function () {
    // Remove "active" class from parent element
    const saveBtn = document.querySelector(".bwd-save-btn .button-primary");
    const parentElement = elements[i].closest(".bwd-single-widget-item");
    saveBtn.classList.add("active-color");
    if (parentElement.classList.contains("active")) {
      parentElement.classList.remove("active");
    }

    // Toggle "active" class on clicked element
    if (elements[i].classList.contains("active")) {
      elements[i].classList.remove("active");
    } else {
      elements[i].classList.add("active");
    }
  });
}

// All Widget Active And Disable

let enableWidget = document.querySelector(".bwd-enable-btn");
let disableWidget = document.querySelector(".bwd-disable-btn");
let saveBtn = document.querySelector(".bwd-save-btn .button-primary");
let switchElements = document.querySelectorAll(".bwd-slider");
let activeItem = document.querySelectorAll(".bwd-single-widget-item");
enableWidget.addEventListener("click", function(e) {
  e.preventDefault();
  saveBtn.classList.add("active-color")
  activeItem.forEach(item => {
    item.classList.add("active")
  })
  switchElements.forEach(switchElement => {
    switchElement.classList.add("active");
  });
})

disableWidget.addEventListener("click", function(e) {
  e.preventDefault();
  saveBtn.classList.add("active-color");
  activeItem.forEach(item => {
    item.classList.remove("active");
  })
  switchElements.forEach(switchElement => {
    switchElement.classList.remove("active");
  })
})
