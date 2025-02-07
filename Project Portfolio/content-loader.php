<?php
$page = $_GET['page'] ?? 'home';

// Geeft aan waar de pagina's staan
$pageDirectory = './pages/';
$file = $pageDirectory . $page . '.php';

if (file_exists($file)) {
    include($file);
} else{
    echo'<h2>Pagina niet gevonden</h2>';
}

?>