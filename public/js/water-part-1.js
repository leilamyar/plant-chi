console.log('I am cooki :3');

/* document.addEventListener('keydown', function(ev){
    alert(ev.which + " " + ev.code);
  });

  (function() {
    var e = new Event('keydown');
    e.which = e.keyCode = 32;
    e.code = "Backspace"
    document.dispatchEvent(e);   
  })(); */

  window.addEventListener("keydown", checkKeyPRess, false);

  function checkKeyPRess(key){
      if(key.keyCode == "32"){
          console.log("The 'space bar' has been pressed");
        then  
      }
  }

/* function showKeyPress(evt) {
alert("onkeypress handler: \n"
      + "keyCode property: " + evt.keyCode + "\n"
      + "which property: " + evt.which + "\n"
      + "charCode property: " + evt.charCode + "\n"
      + "Character Key Pressed: "
      + String.fromCharCode(evt.charCode) + "\n"
     );
}

function keyDown(evt) {
alert("onkeydown handler: \n"
      + "keyCode property: " + evt.keyCode + "\n"
      + "which property: " + evt.which + "\n"
     );
} */