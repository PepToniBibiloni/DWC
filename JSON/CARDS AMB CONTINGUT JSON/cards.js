$(function () {
    function loadCardsViviendas() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var viviendas = JSON.parse(this.responseText);
                var i=0;
                for (x in viviendas) {
                    if(i%2==0){
                        var rowDIV = $("<div/>",{class:"row",});
                        $("#cardsViviendas").append(rowDIV);
                    }
                    i++;
                    var id = viviendas[x].id;
                    var nom = viviendas[x].nombre;
                    var colDIV = $("<div/>",{class:"col-sm-6"});
                    var cardDIV = $("<div/>", {class:"card"});
                    var cardBody = $("<div/>",{class:"card-body"});
                    var cardH4 = $("<h4/>",{class:"card-title", text:nom});
                    var cardP = $("<p/>",{class:"card-text", text:id});
                    cardBody.append(cardH4, cardP);
                    cardDIV.append(cardBody);
                    colDIV.append(cardDIV);
                    rowDIV.append(colDIV);
                }
            }
        };
        xhttp.open("GET", "selectVivienda.php", true);
        xhttp.send();
    }
    loadCardsViviendas();
});
