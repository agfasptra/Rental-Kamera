let search = document.querySelector(".search-box");

document.querySelector("#search-icon").onclick = () => {
  search.classList.toggle("active");
  menu.classList.remove("active");
};

let menu = document.querySelector(".navbar");

document.querySelector("#menu-icon").onclick = () => {
  menu.classList.toggle("active");
  search.classList.remove("active");
};

window.onscroll = () => {
  menu.classList.remove("active");
  search.classList.remove("active");
};

let header = document.querySelector("header");

const orderButtons = document.querySelectorAll(".order-btn");
const orderForm = document.getElementById("order-form");

orderButtons.forEach((button) => {
  button.addEventListener("click", () => {
    const kameraName = button.dataset.kamera;
    const harga = button.dataset.harga;

    document.getElementById("kamera").value = kameraName;
    document.getElementById("harga").value = harga;

    // Display order form
    orderForm.style.display = "block";
  });
});

window.addEventListener("scroll", () => {
  header.classList.toggle("shadow", window.scrollY > 0);
});
