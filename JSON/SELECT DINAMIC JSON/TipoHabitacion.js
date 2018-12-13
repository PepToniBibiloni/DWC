$(function() {

    function loadTipoHabitacion() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var tipoHabitacion = JSON.parse(this.responseText);
                for (tipos in tipoHabitacion) {
                    var idHabitacion = tipoHabitacion[tipos].id;
                    var nombreHabitacion = tipoHabitacion[tipos].nombre;
                    var item = $("<option/>", {value:idHabitacion, text:nombreHabitacion});
                    $("#tipoHab").append(item);
                }
            }
        };
        xhttp.open("GET", "selectTipoHabitacion.php", true);
        xhttp.send();
    }
    loadTipoHabitacion();
});