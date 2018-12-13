<?php
header("Content-Type: application/json; charset=UTF-8");
$conn = new mysqli("localhost", "root", "", "travel");
$stmt = $conn->prepare("SELECT id, nombre as nom FROM vivienda WHERE id=".$_REQUEST['id']);
$stmt->execute();
$result = $stmt->get_result();
$outp = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($outp);
?>