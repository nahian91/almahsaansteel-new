// Hide Preloader on Page Load
window.addEventListener("load", function () {
    let preloader = document.getElementById("preloader");
    preloader.style.opacity = "0";
    setTimeout(() => {
        preloader.style.display = "none";
    }, 500); // Smooth fade-out effect
});

// Sticky Header on Scroll
window.addEventListener("scroll", function () {
    let header = document.querySelector(".header-area");
    if (window.scrollY > 50) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
});

// jQuery for Scroll to Top Button
jQuery(document).ready(function ($) {
    var scrollButton = $('#scrollToTop');

    // Show/hide button on scroll
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            scrollButton.fadeIn();
        } else {
            scrollButton.fadeOut();
        }
    });

    // Scroll to top when clicked
    scrollButton.click(function () {
        $('html, body').animate({ scrollTop: 0 }, 500);
    });

    $('#menu').slicknav({
        appendTo: ".mainemenu"
    });
});