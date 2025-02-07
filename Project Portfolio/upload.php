<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "photo_gallery";

// verbinding met database
$conn = new mysqli($servername, $username, $password, $dbname);

// Controle verbinding
if ($conn->connect_error){
    die("verbinding mislukt: " .$conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"])) {
    $uploadDir ="uploads/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $uploadDir . $fileName;

    // Controleer bestandtype
    $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
    $allowedTypes = array("jpg", "jpeg", "png", "gif");

    if(in_array($fileType, $allowedTypes)){
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // sla de gegevens op in de database
            $stmt = $conn->prepare("INSERT INTO photos(file_name, file_path) VALUES (?, ?)");
            $stmt-> bind_param("ss", $fileName, $targetFilePath);

            if($stmt->execute()){
                echo "Bestand succesvol geüpload!";
            } else{
                echo "Fout bij opslaan in database.";
            }
            $stmt->close();
        } else {
            echo "Fout bij uploaden.";
        }
    }else{
        echo"Alleen JPG, JPEG, PNG & GIF bestanden zijn toegestaan";
    }
}

$conn->close();
?>

<!-- Html upload -->

<form action="upload.php" method="post" enctype="multipart/form-data">
    Kies een bestand:
    <input type="file" name="file">
    <input type="submit" value="Uploaden">
</form>