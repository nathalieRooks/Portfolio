<?php
$servername = "localhost";
$username ="root";
$password = "";
$dbname = "photo_gallery";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("verbinding mislukt: " . $conn->connect_error);
}

$sql = "SELECT * FROM photos ORDER BY uploaded_at DESC";
$result = $conn->query($sql);
?>

<style>
    body{
        text-align: #f0f0f0;
        text-align: center;
    }

    h2{
        margin-top: 20px;
    }

    .slideshow-container{
        max-width: 600px;
        position: relative;
        margin: auto;
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        border-radius: 10px;
        overflow: hidden;
    }

    .slide{
        display: none;
    }

    img {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }

    /* pijltjes */

    .prev, .next{
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.3s;
        user-select: none;
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 5px;
    }

    .prev{
        left: 10px;
    }

    .next{
        right: 10px;
    }

    .prev:hover, .next:hover{
        background-color: rgba(0, 0, 0, 0.8);
    }

    .dots{
        text-align: center;
        padding: 10px;
    }

    .dot{
        height: 15px;
        width: 15px;
        margin: 0 5px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
        cursor: pointer;
    }

    .active{
        background-color: #717171;
    }
</style>

<main>
    <div class="slideshow-container">
        <?php if ($result && $result->num_rows > 0): ?>
        <?php $slideIndex = 0; ?>
        <?php while ($row = $result->fetch_assoc()): ?>
        <div class="slide fade">
            <img src="<?php echo $row['file_path']; ?>" alt="Foto">
        </div>
        <?php endwhile; ?>

        <!-- Pijltjes -->
         <a href="prev" onclick="plusSlides(-1)"><</a>
         <a href="next" onclick="plusSlides(1)">></a>
         <?php else: ?>
            <p>geen fotos gevonden</p>
        <?php endif; ?>
    </div>
    <div class="dots"></div>
</main>

<script>
    let slideIndex = 0;
    slowSlides();

    function showSlides(){
        let slides = document.getElementsByClassName("Slide");
        let dotsContainer = document.querySelector('.dots');
        dotsContainer.innerHTML = "";

        for (let i = 0; i < slides.length; i++){
            slides[i].style.display = "none" // Verberg alle slides
        }

        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1;}

        slides[slideIndex -1].style.display = "block";

        // Punten
        for (let i = 0; i < slides.length; i++){
            let dot = document.createElement("span");
            dot.className = "dot";
            if (i === slideIndex - 1) dot.classList.add("active");
            dot.onclick = function(){ currentSlide(i + 1); };
            dotsContainer.appendChild(dot);
        }

        setTimeout(showSLides, 10000) // Verander slide elke 10 seconden
    }

    // Handmatig
    function plusSlides(n){
        slideIndex += n -1;
        if (slideIndex < 0) slideIndex = 0;
        showSlides();
    }

    function currentSlide(n){
        slideIndex = n - 1;
        showSlides();
    }
</script>

<?php $conn->close();?>