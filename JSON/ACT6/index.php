<?php include('../db_connection.php'); ?>
<div class="container-fluid">
    <div class="row">

            <label>Cama :</label>
            <select name="continent" class="form-control" id="continent">
                <option value=''>------- Select --------</option>
                <?php
                $sql = "select id from tipo_cama";
                $res = mysqli_query($con, $sql);
                if(mysqli_num_rows($res) > 0) {
                    while($row = mysqli_fetch_object($res)) {
                        echo "<option value='".$row->id."'>".$row->id."</option>";
                    }
                }
                ?>
            </select>

    </div>
</div>