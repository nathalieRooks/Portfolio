document.addEventListener('DOMContentLoaded', () => {
    const links = document.querySelectorAll('.top-navbar a');
    const mainContent = document.getElementById('main-content');

    links.forEach(link => {
        link.addEventListener('click', (event) => {
            event.preventDefault();
            const page = link.getAttribute('href').replace('#', '');

            fetch(`content-loader.php?page=${page}`)
                .then(response => response.text())
                .then(data => {
                    mainContent.innerHTML = data;
                })
                .catch(error => {
                    mainContent.innerHTML = '<p> Er is een fout opgetreden bij het laden van de pagina </p>';
                    console.error('Fout', error);
                });
        });
    });

    let contentLoaded = false;

    mainContent.addEventListener('DOMNodeInserted', () => {
        if (!contentLoaded) {
            contentLoaded = true;

            // popup
            const openPopup = document.getElementById('openPopup');
            const closePopup = document.getElementById('closePopup');
            const popup = document.getElementById('popup');

            if (openPopup && closePopup && popup) {
                openPopup.addEventListener('click', () => {
                    popup.style.display = 'flex';
                    showDivs(slideIndex); // Zorgt ervoor dat de eerste afbeelding zichtbaar is
                });

                closePopup.addEventListener('click', () => {
                    popup.style.display = 'none';
                });

                window.addEventListener('click', (event) => {
                    if (event.target === popup) {
                        popup.style.display = 'none';
                    }
                });
            }
        }
    });
});

// **Carrousel functionaliteit**
let slideIndex = 1;

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    let slides = document.getElementsByClassName("mySlides");

    if (slides.length === 0) return; // Check of er slides zijn

    if (n > slides.length) slideIndex = 1;
    if (n < 1) slideIndex = slides.length;

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slides[slideIndex - 1].style.display = "block";
}

// **EventListeners voor navigatieknoppen**
document.addEventListener('click', (event) => {
    if (event.target.classList.contains('display-container-button-left')) {
        plusDivs(-1);
    } else if (event.target.classList.contains('display-container-button-right')) {
        plusDivs(1);
    }
});
