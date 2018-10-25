var x;
x=$(document);
x.ready(initEvents);

function initEvents() {
var x;
x=$("a");
x.mouseover(enterMouse);
x.mouseout(exitMouse);
}

function enterMouse() {
$(this).css("background-color","#ff0");
}

function exitMouse() {
$(this).css("background-color","#fff");
} 