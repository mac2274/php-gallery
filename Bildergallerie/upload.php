<?php 

if(isset($_POST["submit"])){
    $uploadOrdner = "uploads/";
    $uploadPfad = $uploadOrdner . basename($_FILES["datei"]["name"]);
    $fileType = strtolower((pathinfo($uploadPfad, PATHINFO_EXTENSION)));

    $erlaubteDateien = ["jpg", "jpeg", "png", "gif"];

    if(in_array($fileType, $erlaubteDateien)){
        if(move_updated_files($FILES["datei"]["tmp_name"], $uploadPfad)){
            echo "Bild erfolgreich hochgeladen. <br>";
            echo "<img src='$uploadPfad' alt='Hochgeladenes Bild' style='max-width:3000px;'>";
        } else{ 
            echo "Fehler beim Hochladen!";
        }
    } else {
        echo "Nur Bilderdateien sind erlaubt!";
    }   
}
?>