$('body').keydown(function (event) {
  let keyPressedCode = event.keyCode
  switch (keyPressedCode) {
    case 37:
      alert('Нажата клавиша влево')
      break;
    case 38:
      alert('Нажата клавиша вверх')
      break;
    case 39:
      alert('Нажата клавиша вправо')
      break;
    case 40:
      alert('Нажата клавиша вниз')
      break;
  }
})