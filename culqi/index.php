<?php
require 'vendor/autoload.php';

// Configura tu API Key y tu Código de Comercio
$SECRET_API_KEY = "sk_test_xxxxxxxxxxxxxxxxxxxx";
$culqi = new Culqi\Culqi(array('api_key' => $SECRET_API_KEY));

// Crea un cargo a una tarjeta
try {
  $charge = $culqi->Charges->create(
      array(
          "amount" => 1000,
          "currency_code" => "PEN",
          "email" => "test@culqi.com",
          "source_id" => "xxx-xxxxxxxxxxxxx-xxxx-xx"
      )
  );
  // Respuesta del cargo
  print_r($charge);
} catch (Exception $e) {
  echo $e->getMessage();
}
?>
