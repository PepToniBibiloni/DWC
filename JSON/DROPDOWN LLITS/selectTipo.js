$(function () {
    function loadTipo() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var tipos = JSON.parse(this.responseText);

                for (tipo in tipos) {
                    var idTipo = tipos[tipo].id;

                    appendToLlista($("<a/>", { class:"dropdown-item",href:"#",text:idTipo}));
                }
            }
        };
        xhttp.open("GET", "selectVivienda.php", true);
        xhttp.send();
    }

    function appendToLlista(item){
        $("#llistaTipo").append(item);
    }

    loadTipo();
});