$(function () {
    function loadTipo() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var reserves = JSON.parse(this.responseText);

                for (tipo in tipos) {
                    var idTipo = tipos[tipo].id;

                    var url = "tipoHab.php?id=" + idTipo;
                    appendToLlista($("<a/>", {href:url,class:'list-group-item list-group-item-action active', text:idTipo}));
                }
            }
        };
        xhttp.open("GET", "select.php", true);
        xhttp.send();
    }

    function appendToLlista(item){
        $("#llistaTipo").append(item);
    }

    loadTipo();
});