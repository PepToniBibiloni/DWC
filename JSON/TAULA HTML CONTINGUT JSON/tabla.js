$(function () {
    function loadLlits() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var llits = JSON.parse(this.responseText);
                addToTable("<thead>" +
                    "<tr>" +
                    "<th scope='col'>Id</th>" +
                    "</tr>" + "</thead><tbody>"
                );

                for (tipo in llits) {
                    let id = llits[tipo].id;

                    let item =
                        "<tr>" +
                        "<td value=" + id + " scope='row'>" + id + "</td>" +
                        "</tr>";
                    addToTable(item);
                }
                addToTable("</tbody>");
            }
        };
        xhttp.open("GET", "selectTipusLlit.php", true);
        xhttp.send();
    }

    function addToTable(item) {
        $("#tipoLlit").append(item);
    }

    loadLlits();
});
