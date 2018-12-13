<?php
    require('conn.php');
    $id = $_GET['id'];

    if (isset($_POST['submit'])) {
    	$id = $_POST['id'];
    	$nombre = $_POST['name'];
    	$mysqli->query("UPDATE vivienda SET nombre= '$nombre' WHERE id=$id");
    	header("location:index.php");
    }

    $viviendas = $mysqli->query("SELECT id,nombre FROM vivienda WHERE id='$id'");
    $mem = mysqli_fetch_assoc($viviendas);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<form method="post" action="editdata.php" role="form">
	<div class="modal-body">
		<div class="form-group">
			<label for="id">ID</label>
			<input type="text" class="form-control" id="id" name="id" value="<?php echo $mem['id'];?>" readonly="true"/>

		</div>
		<div class="form-group">
			<label for="name">Nombre</label>
			<input type="text" class="form-control" id="name" name="name" value="<?php echo $mem['nombre'];?>" />
		</div>
		</div>
		<div class="modal-footer">
			<input type="submit" class="btn btn-primary" name="submit" value="Update" />&nbsp;
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
	</form>
</body>
</html>
