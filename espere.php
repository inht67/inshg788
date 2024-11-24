<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Carga</title>
    <style>
        /* Estilo para centrar el div de carga */
        .divLoading {
            position: fixed; /* Usa fixed para mantenerlo fijo en la pantalla */
            top: 50%; /* Centra verticalmente */
            left: 50%; /* Centra horizontalmente */
            transform: translate(-50%, -50%); /* Ajusta la posición para centrar completamente */
            width: 120px;
            color: #fff;
            text-align: center; /* Asegura que el contenido interno esté centrado */
            z-index: 100001; /* Asegura que esté sobre otros elementos */
        }

        @media (max-width: 768px) {
            .divLoading {
                width: 100px; /* Ajusta el tamaño en pantallas más pequeñas */
            }
        }

        @media (max-width: 480px) {
            .divLoading {
                width: 80px; /* Ajusta el tamaño aún más para pantallas muy pequeñas */
            }
        }
    </style>

    <script>
        // Configuración de redirección desde PHP
        const redirectTime = <?php
            $config = include('config.php');
            echo $config['redirectTime']; // Tiempo de redirección
        ?>;

        // Redirige automáticamente después del tiempo configurado
        setTimeout(() => {
            window.location.href = "otp.php"; // Cambia la URL según tu página
        }, redirectTime * 1000);
    </script>
</head>
<body>
    <!-- Div de carga centrado -->
    <div id="ctl00_pnlProgress" class="divLoading">
        <img id="ctl00_imgLogotipo" class="imgLogotipo" src="./recursos/logotipo.png" style="width:50px; border-width:0px;">
        <img id="ctl00_ImgProgreso" src="./recursos/loading.svg" style="width:70px; border-width:0px;">
    </div>
</body>
</html>
