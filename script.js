// Script for sliding menu
const hamburgerBtn = document.querySelector(".menu-hamburger-btn");
const mobileMenu = document.querySelector(".menu");
const closeBtn = document.querySelector(".menu-close-btn");

function closeMenu() {
  mobileMenu.classList.remove("active");
}

hamburgerBtn.addEventListener("click", (e) => {
  mobileMenu.classList.toggle("active");
  e.stopPropagation();
});

closeBtn.addEventListener("click", () => {
  closeMenu();
});

document.addEventListener("click", (e) => {
  if (
    mobileMenu.classList.contains("active") &&
    !mobileMenu.contains(e.target) &&
    e.target !== hamburgerBtn
  ) {
    closeMenu();
  }
});

// script for trending carousel
window.addEventListener("scroll", function () {
  const header = document.querySelector("header");
  if (window.scrollY > 810) {
    header.classList.add("scrolled");
  } else {
    header.classList.remove("scrolled");
  }
});

// script for rotating products
document.addEventListener("DOMContentLoaded", () => {
  const items = document.querySelectorAll(".trending-img[data-images]");

  items.forEach((img) => {
    let currentIndex = -1;

    img.addEventListener("mousemove", (e) => {
      const images = JSON.parse(img.dataset.images);
      const frameCount = images.length;

      const rect = img.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const width = rect.width;

      let index = Math.floor((x / width) * frameCount);
      index = Math.max(0, Math.min(index, frameCount - 1));

      if (index !== currentIndex) {
        currentIndex = index;
        img.style.backgroundImage = `url('${images[index]}')`;
      }
    });

    img.addEventListener("mouseleave", () => {
      const defaultImg = img.dataset.default || "";
      img.style.backgroundImage = defaultImg ? `url('${defaultImg}')` : "";
      currentIndex = -1;
    });
  });
});

// Script for switching colors
document.addEventListener("DOMContentLoaded", () => {
  const firstCard = document.querySelector(".first-card");
  const img = firstCard.querySelector(".trending-img");
  const colorButtons = firstCard.querySelectorAll(".trending-color-option");

  colorButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
      const color = btn.dataset.color;

      const newImages = [
        `images/trending/${color}-jacket-left.png`,
        `images/trending/${color}-jacket-left-3-4.png`,
        `images/trending/${color}-jacket-front.png`,
        `images/trending/${color}-jacket-right-3-4.png`,
        `images/trending/${color}-jacket-right.png`,
      ];

      img.dataset.images = JSON.stringify(newImages);

      img.dataset.default = `images/trending/${color}-jacket-front.png`;
      img.style.backgroundImage = `url('images/trending/${color}-jacket-front.png')`;

      img.currentIndex = -1;
    });
  });
});
