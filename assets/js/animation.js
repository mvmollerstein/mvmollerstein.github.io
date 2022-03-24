
var text = ["Hola", "Hallo", "Merhaba"];
var counter = 0;
var elem = $("#animation");
setInterval(change, 300);
function change() {
  elem.fadeOut(function(){
      elem.html(text[counter]);
      counter++;
      if(counter >= text.length) { counter = 0; }
      elem.fadeIn();
  });
}
