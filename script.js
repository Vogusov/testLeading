$(document).ready(function() {

  const pressedKeys = [];

  $('body').bind('keydown', (function (event) {
    let keyPressedCode = event.keyCode
    // console.log(event)
    switch (keyPressedCode) {

      case 37:
        if (jQuery.inArray(keyPressedCode, pressedKeys) >= 0)
          break;

        alert('Нажата клавиша влево')
        pressedKeys.push(keyPressedCode)
        break;

      case 38:
        if (jQuery.inArray(keyPressedCode, pressedKeys) >= 0)
          break;

        alert('Нажата клавиша вверх')
        pressedKeys.push(keyPressedCode)
        break;

      case 39:
        if (jQuery.inArray(keyPressedCode, pressedKeys) >= 0)
          break;

        alert('Нажата клавиша вправо')
        pressedKeys.push(keyPressedCode)
        break;

      case 40:
        if (jQuery.inArray(keyPressedCode, pressedKeys) >= 0)
          break;

        alert('Нажата клавиша вниз')
        pressedKeys.push(keyPressedCode)
        break;
    }
  }))

})