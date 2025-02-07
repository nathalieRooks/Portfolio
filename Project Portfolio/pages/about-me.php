<body>
    
    <main class="about-me">
        <div class="about-me-main">
            <div class="about-me-name">
                <div class="about-me-foto">
                    <img src="./media/placeholder-me.png" alt="Foto van mij" style="width: 300px;">
                </div>
                <div class="about-me-titel">
                    <h2>Nathalie Rooks</h2>
                    <p>Hi, Op deze pagina vind je meer over mij en waar ik mee bezig ben</p>
                    <a href="#over-mij"><button>Meer over mij</button></a>

                    <a href="./media/CV-Jan-25-protected.pdf" target="_blank"><button>CV</button></a>
                </div>
            </div>
            <div class="about-me-skills">
                <h2>Skills</h2>
                <table>
                    <tr>
                        <th>HTML/CSS</th>
                        <th>Python</th>
                        <th>PHP</th>
                        <th>JS</th>
                    </tr>
                    <tr>
                        <td class="HTML-Project-1">
                            <button id="openPopup" class="popup-button">Project 1</button>
                            <div id="popup" class="popup">
                                <div class="popup-content">
                                    <h2>HTML-CSS</h2>
                                    <p>Tijdens mijn keuze deel heb ik veel gewerkt met html-css. Op terug kijkend zou ik een aantal dingen anders zou doen. Onder andere de hoeveelheid van herhaaldelijke code</p>
                                    <!-- Slide show -->
                                    <div class="display-container">
                                        <div class="display-foto">
                                        <img class="mySlides" src="./media/projecten/html/html-header.png" alt="foto van header code" >
                                        <img class="mySlides" src="./media/projecten/html/html-over.png" alt="foto van header code" >
                                        <img class="mySlides" src="./media/projecten/html/product-kaart.png" alt="foto van header code" >
                                        </div>
                                        <button class="display-container-button-left" onclick="plusDivs(-1)">&#10094;</button>
                                        <button class="display-container-button-right" onclick="plusDivs(+1)">&#10095;</button>
                                    </div>
                                    <button id="closePopup" class="popup-button">Sluiten</button>
                                </div>
                            </div>
                        </td>
                        <td><button id="openPopup" class="popup-button">Project 1</button>
                            <div id="popup" class="popup">
                                <div class="popup-content">
                                    <h2>Python</h2>
                                    <p>Tijdens mijn tweede keuzedeel heb ik een game gemaakt waarbij je steen papier schaar kan spelen tegen de computer met behulp van een webcam. Voor dit project heb ik mezelf python geleerd. Dit programma is gemaakt met pycharm. De imports die ik heb gebruikt zijn onder andere numpy, tensorflow en cv2. <br> Voor de herkenning van de handen heb ik een keras model gemaakt.
                                    </p>
                                    <!-- Slide show -->
                                    <div class="display-container">
                                        <div class="display-foto">
                                        <img class="mySlides" src="./media/projecten/python/Achtergrond-Kleur.png" alt="foto van de achtergrond van de game" >
                                        <img class="mySlides" src="./media/projecten/python/training-1.png" alt="training van machine learning model deel 1" >
                                        <img class="mySlides" src="./media/projecten/python/training-2.png" alt="Training van machine learning model deel 2" >
                                        <img class="mySlides" src="./media/projecten/python/game-deel-1.png" alt="Deel 1 van de game script">
                                        </div>
                                        <button class="display-container-button-left" onclick="plusDivs(-1)">&#10094;</button>
                                        <button class="display-container-button-right" onclick="plusDivs(+1)">&#10095;</button>
                                    </div>
                                    <button id="closePopup" class="popup-button">Sluiten</button>
                                </div>
                            </div></td>
                        <td>Project 1</td>
                        <td>project 1</td>
                    </tr>
                </table>
            </div>
            <div id="over-mij" class="about-me-over-mij">
                <h2>Over Mij</h2>
                <p>Hi, Leuk dat je een kijkje komt nemen op mijn portfolio. <br> Ik ben Nathalie en woon samen met mijn vriend in Heerenveen. Op het moment ben ik bezig ik bezig met de opleiding tot Software Development. <br> Buiten school om vind ik het leuk om met vriendinnen af te spreken en actief bezig te zijn. Daarom ben ik meerdere keren per week te vinden in de sportschool en vind ik het leuk om hard te lopen. Op het moment ben ik het trainen voor mijn eerste halve marathon. Op deze website hoop ik je meer te laten zien over wie ik ben en wat ik kan.</p>

                <!-- Foto slide show WIP-->
            </div>
            <div class="about-me-video">
                <h2>Video</h2>
                <p>Ga gezellig een dagje met mij mee. De video is in de maak! Geniet ondertussen van deze copyright vrije timelapse<span style='font-size:30px;'>&#128522;</span></p>
                <!-- Video -->
                <div class="about-me-video-video">
                    <video width="640px" height="320px" controls>
                        <source src="./media/202368-918049003.mp4">
                    </video>
                </div>


            </div>
        </div>
    </main>
</body>

<script src="index.js"></script>