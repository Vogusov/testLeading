$(document).ready(function () {

  // массив с нажатыми клавишами
  const pressedKeys = [];

  // функция проверки условия
  function checkCondition(keyPressedCode, pressedKeys, direction) {

    if (jQuery.inArray(keyPressedCode, pressedKeys) >= 0)
      return

    alert(`Нажата клавиша ${direction}`)
    pressedKeys.push(keyPressedCode)
    return
  }

  // обработчик нажатий
  $('body').bind('keydown', (function (event) {
    let keyPressedCode = event.keyCode
    switch (keyPressedCode) {

      case 37:
        checkCondition(keyPressedCode, pressedKeys, 'влево')
        break

      case 38:
        checkCondition(keyPressedCode, pressedKeys, 'вверх')
        break

      case 39:
        checkCondition(keyPressedCode, pressedKeys, 'вправо')
        break

      case 40:
        icheckCondition(keyPressedCode, pressedKeys, 'вниз')
        break
    }
  }))

})