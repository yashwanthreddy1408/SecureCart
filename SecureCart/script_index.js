document.addEventListener('DOMContentLoaded', function() {
    const productLinks = document.querySelectorAll('[id^="productLink"]');
    productLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default link behavior
            document.getElementById('loadingOverlay').style.display = 'block'; // Show loading overlay
            window.location.href = link.href;
        });
    });

    // Format price with commas
    const productPrices = document.querySelectorAll('.product-price');
    productPrices.forEach(price => {
        price.textContent = formatPrice(price.textContent);
    });

    function formatPrice(price) {
        const parts = String(price).split('.');
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ',');
        return parts.join('.');
    }
});

window.addEventListener('load', function() {
    const loadingOverlay = document.getElementById('loadingOverlay');
    if (loadingOverlay) {
        loadingOverlay.style.display = 'none'; // Hide loading overlay after page loads
    }
});
function sortProducts(sortType) {
    var url = new URL(window.location.href);
    url.searchParams.set('sort', sortType);
    window.location.href = url.href;
}
var carousel = new bootstrap.Carousel(myCarousel, {
    interval: 4000,  // Change slide every 4 seconds
    pause: 'hover',  // Pause on mouse hover
    keyboard: true,  // Enable keyboard navigation
    wrap: true,  // Wrap around at the ends
    touch: true,  // Enable touch swipe
    ride: 'carousel',  // Autoplay the carousel
    slide: true,  // Animate slides
    transition: 600,  // Transition duration in milliseconds
    // You can also specify the easing function here, such as 'ease-in-out'
});
// Preload images for smoother carousel transitions
var images = [
    'https://assets.sangeethamobiles.com/placeholder_banner/placeholderBanner_1714736664_360.jpg',
    'https://assets.sangeethamobiles.com/placeholder_banner/placeholderBanner_1714715823_323.jpg',
    'https://assets.sangeethamobiles.com/placeholder_banner/placeholderBanner_1712038743_361.jpg',
    'https://assets.sangeethamobiles.com/placeholder_banner/placeholderBanner_1714373337_419.jpg',
    'https://assets.sangeethamobiles.com/placeholder_banner/placeholderBanner_1711020115_429.jpg',
    'https://assets.sangeethamobiles.com/placeholder_banner/placeholderBanner_1711020244_393.jpg',
    'https://assets.sangeethamobiles.com/placeholder_banner/placeholderBanner_1711024936_233.jpg',
    // Add more image URLs as needed
];

function preloadImages(images) {
    for (var i = 0; i < images.length; i++) {
        var img = new Image();
        img.src = images[i];
    }
}

preloadImages(images);
var priceSlider = new Slider('#priceSlider', {
    tooltip: 'hide',  // Hide the tooltip on the slider itself
});