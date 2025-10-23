// Loader fade-out
window.addEventListener("load", () => {
    const loader = document.getElementById("loader");
    loader.style.opacity = "0";
    setTimeout(() => (loader.style.display = "none"), 600);
});

// Reveal animation on scroll
window.addEventListener("scroll", () => {
    document.querySelectorAll(".reveal").forEach((el) => {
        const rect = el.getBoundingClientRect();
        if (rect.top < window.innerHeight - 100) {
            el.classList.add("active");
        }
    });
});

// Mobile menu
const mobileMenuBtn = document.getElementById("mobileMenuBtn");
const mobileMenu = document.getElementById("mobileMenu");
mobileMenuBtn.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden");
});

// Typing animation
const texts = ["Web Developer", "UI/UX Designer", "Creative Coder"];
let index = 0;
let charIndex = 0;
let currentText = "";
const typedText = document.getElementById("typedText");

function type() {
    if (charIndex < texts[index].length) {
        currentText += texts[index].charAt(charIndex);
        typedText.textContent = currentText;
        charIndex++;
        setTimeout(type, 100);
    } else {
        setTimeout(erase, 2000);
    }
}

function erase() {
    if (charIndex > 0) {
        currentText = currentText.slice(0, -1);
        typedText.textContent = currentText;
        charIndex--;
        setTimeout(erase, 50);
    } else {
        index = (index + 1) % texts.length;
        setTimeout(type, 500);
    }
}

type();

// Filter projects
const filterButtons = document.querySelectorAll(".filter-btn");
const projectCards = document.querySelectorAll(".project-card");

filterButtons.forEach((button) => {
    button.addEventListener("click", () => {
        const filter = button.getAttribute("data-filter");

        // Update active filter button
        filterButtons.forEach((btn) => btn.classList.remove("active-filter"));
        button.classList.add("active-filter");

        // Filter projects
        projectCards.forEach((card) => {
            const category = card.getAttribute("data-category");
            if (filter === "all" || category === filter) {
                card.style.display = "block";
                card.classList.add("reveal");
                setTimeout(() => card.classList.add("active"), 100);
            } else {
                card.style.display = "none";
                card.classList.remove("active");
            }
        });
    });
});

// Progress bar animation
window.addEventListener("scroll", () => {
    document.querySelectorAll(".progress-bar").forEach((bar) => {
        const rect = bar.getBoundingClientRect();
        if (rect.top < window.innerHeight - 100) {
            const width = bar.getAttribute("data-width");
            bar.style.width = `${width}%`;
        }
    });
});
