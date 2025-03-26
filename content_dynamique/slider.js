<script>
const images = document.querySelectorAll('.images img');
const imagesContainer = document.querySelector('.images');
let currentIndex = 2; // Index de l'image active au début

function updateSlider() {
    // Mettre à jour les classes des images
    images.forEach((img, index) => {
        img.classList.remove('active');
        if (index === currentIndex) {
            img.classList.add('active');
        }
    });

    // Déplacer les extrémités vers l'autre côté
    const lastIndex = images.length - 1;
    if (currentIndex === 0) {
        imagesContainer.insertBefore(images[lastIndex], images[0]);
    } else if (currentIndex === lastIndex) {
        imagesContainer.appendChild(images[0]);
    }

    // Ajuster le déplacement
    imagesContainer.style.transform = `translateX(-${currentIndex * 120}px)`;
}

function slideLeft() {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    updateSlider();
}

function slideRight() {
    currentIndex = (currentIndex + 1) % images.length;
    updateSlider();
}

// Initialisation
updateSlider();
</script>
