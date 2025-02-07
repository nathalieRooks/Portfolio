<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "photo_gallery";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Verbinding mislukt: " . $conn->connect_error);
}

$sql = "SELECT * FROM photos ORDER BY uploaded_at DESC";
$result = $conn->query($sql);
?>
<!-- Html -->
<main>
    <div class="slideshow-container">
        <?php if ($result->num_rows > 0):    ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="slide">
                    <img src="<?php echo $row['file_path']; ?>" alt="Foto">
                </div>
            <?php endwhile; ?>

            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
        <?php else: ?>
            <p>Geen foto's gevonden.</p>
        <?php endif; ?>
    </div>
</main>

<!-- CSS -->
<style>
    .slideshow-container {
        max-width: 300px;
        position: relative;
        margin: auto;
    }

    .slide {
        display: none;
    } 

    .slide.active{
        display: none;
    }

    img {
        width: 100%;
    }

    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 10px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.3s;
        user-select: none;
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 5px;
    }

    .prev {
        left: 10px;
    }

    .next {
        right: 10px;
    }

    .prev:hover,
    .next:hover {
        background-color: rgba(0, 0, 0, 0.2);
    }
</style>

<!-- Java script -->
<script>
    let slideIndex = 0;
    showSlides();

    function showSlides(){
        let slides = document.getElementsByClassName("slide");
        for (let i = 0; i < slides.length; i++){
            slides[i].classList.display.remove("active");
        }

        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1; }
        slide[slideIndex - 1].classList.add("active");
        setTimeout(showSlides, 5000);
    }

    function plusSlides(n) {
    slideIndex += n - 1;

    if (slideIndex < 0) {
        slideIndex = slides.length - 1;
    }
    if (slideIndex >= slides.length) {
        slideIndex = 0;
    }

    for (let i = 0; i < slides.length; i++) {
        slides[i].classList.remove("active");
    }

    slides[slideIndex].classList.add("active");
}
</script>

<?php
$conn->close();
?>