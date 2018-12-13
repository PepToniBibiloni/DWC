<?php
$conn = new mysqli("localhost", "root", "", "travel");
if(isset($_REQUEST["nom"])){
    $id = $_REQUEST['id'];
    $nom = mysqli_real_escape_string($conn, $_REQUEST["nom"]);
    $query = "UPDATE vivienda SET nombre='".$nom."' WHERE id='".$id."'";
    if(mysqli_query($conn, $query)){
        echo 'Informació Actualitzada';
    }
    else {
        echo 'ERROR '.$query;
    }
}
?>