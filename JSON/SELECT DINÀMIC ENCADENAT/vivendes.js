$(function () {

    function loadViviendas() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var viviendas = JSON.parse(this.responseText);
                for (tipos in viviendas) {
                    var nombre = viviendas[tipos].nombre;
                    var item = $("<option>"+nombre+"</option>");
                    $("#selectVivienda").append(item);
                }
            }
        };
        xhttp.open("GET", "selectVivienda.php", true);
        xhttp.send();
    }

    $("#selectVivienda").change(
        function loadTipoHab() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var viviendas = JSON.parse(this.responseText);
                    $("#selectTipoHab").empty();
                    for (tipos in viviendas) {
                        var idVivienda = viviendas[tipos].id;
                        var item = $("<option/>", {value: idVivienda});
                        $("#selectTipoHab").append(item);
                    }
                }
            };
            xhttp.open("GET", "selectTipoHab.php?idVivienda=" + $("#selectVivienda option:selected").val(), true);
            console.log($("#selectVivienda option:selected").val());
            xhttp.send();
        });

    loadViviendas();
});