// Sticky navigation and active class
document.addEventListener("DOMContentLoaded", () => {
    const currentPath = window.location.pathname.split("/").pop();
    const navLinks = document.querySelectorAll("nav ul li a");

    navLinks.forEach(link => {
        if (link.getAttribute("href") === currentPath) {
            link.classList.add("active");
        }
    });
});

// Scroll-to-top button functionality
const scrollToTopButton = document.getElementById("scrollToTop");

if (scrollToTopButton) {
    window.addEventListener("scroll", () => {
        if (window.scrollY > 300) {
            scrollToTopButton.style.display = "block";
        } else {
            scrollToTopButton.style.display = "none";
        }
    });

    scrollToTopButton.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
}

// Contact form submission
const contactForm = document.getElementById("contact-form");
if (contactForm) {
    contactForm.addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent form from submitting
        alert("Your message has been successfully sent!");
        this.reset(); // Reset the form
    });
}
