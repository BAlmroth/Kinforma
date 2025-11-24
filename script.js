// nav bar
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
    const images = JSON.parse(img.dataset.images);
    const frameCount = images.length;
    const defaultImg = img.dataset.default || "";
    let currentIndex = -1;

    images.forEach((src) => {
      const pre = new Image();
      pre.src = src;
    });

    img.addEventListener("mousemove", (e) => {
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
      img.style.backgroundImage = defaultImg ? `url('${defaultImg}')` : "";
      currentIndex = -1;
    });
  });
});
