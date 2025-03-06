document.addEventListener("DOMContentLoaded", () => {
    const hamburger = document.querySelector(".hamburger-menu");
    const navbar = document.querySelector(".navbar");

    hamburger.addEventListener("click", () => {
        navbar.classList.toggle("active");
      
    });
});