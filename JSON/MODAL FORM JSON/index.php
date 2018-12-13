<?php
    require('conn.php');

    $result = $mysqli->query("SELECT nombre as name,id as sn FROM vivienda");
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="memberModalLabel">Editar casas</h4>
            </div>
            <div class="dash">

            </div>

        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Detalles casa</h1>
        </div>
    </div>
    <div class="row">
        <div id="member" class="col-lg-12">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    <?php
                         while ($mem = mysqli_fetch_assoc($result)):
                            echo '<tr>';
                               echo '<td>'.$mem['name'].'</td>';
                               echo '<td>
                                        <a class="btn btn-small btn-primary"
                                           data-toggle="modal"
                                           data-target="#exampleModal"
                                           data-whatever="'.$mem['sn'].' ">Edit</a>
                                     </td>';
                            echo '</tr>';
                         endwhile;
                         $result->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
    $('#exampleModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget)
          var recipient = button.data('whatever')
          var modal = $(this);
          var dataString = 'id=' + recipient;

            $.ajax({
                type: "GET",
                url: "editdata.php",
                data: dataString,
                cache: false,
                success: function (data) {
                    console.log(data);
                    modal.find('.dash').html(data);
                },
                error: function(err) {
                    console.log(err);
                }
            });
    })
</script>
</body>
</html>
