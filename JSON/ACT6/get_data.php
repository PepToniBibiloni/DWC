<?php
require_once("../db_connection.php");
$statement ="select id
from tipo_habitacion";
$res = $conn->prepare($statement);
$res->execute();
    if(mysqli_num_rows($res) > 0) {
        echo '<option value="">------- Select -------</option>';
        while($row = mysqli_fetch_object($res)) {
            echo '<option value="'.$row->id.'">'.$row->id.'</option>';
        }
    } else {
        echo '<option value="">No Record</option>';
    }


?>