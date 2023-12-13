<?php
require 'vendor/autoload.php';

// Configura tu API Key y tu Código de Comercio
// Es recomendable guardar la clave API en un archivo de configuración o variable de entorno
$SECRET_API_KEY = getenv('CULQI_API_KEY');

// Verifica si la clave API está configurada
if (!$SECRET_API_KEY) {
    die("La clave API de Culqi no está configurada.");
}

$culqi = new Culqi\Culqi(['api_key' => $SECRET_API_KEY]);

// Crea un cargo a una tarjeta
try {
    $charge = $culqi->Charges->create([
        "amount" => 1000,
        "currency_code" => "PEN",
        "email" => "test@culqi.com",
        "source_id" => "xxx-xxxxxxxxxxxxx-xxxx-xx"
    ]);

    // Respuesta del cargo
    echo "<pre>";
    print_r($charge);
    echo "</pre>";
} catch (Exception $e) {
    // Maneja el error de manera más efectiva
    error_log("Error al crear el cargo: " . $e->getMessage());
    echo "Ocurrió un error al realizar el cargo. Por favor, inténtelo de nuevo.";
}
?>
