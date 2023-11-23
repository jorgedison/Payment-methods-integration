# Integración de Culqi Checkout en PHP

Este proyecto muestra cómo integrar el sistema de checkout de Culqi en una aplicación PHP. Se utiliza el SDK oficial de Culqi para PHP para facilitar el proceso de realizar cargos a tarjetas de crédito/débito.

## Requisitos Previos

-   PHP 7.x o superior.
-   [Composer](https://getcomposer.org/), un gestor de dependencias para PHP.

## Configuración

1.  **Clonar el Repositorio:** Si aún no lo has hecho, clona este repositorio en tu máquina local.
    
2.  **Instalar Dependencias:** Navega al directorio del proyecto y ejecuta el siguiente comando para instalar las dependencias requeridas:
        
    `composer require culqi/culqi-php`
    
4.  **Configurar Claves API:** Deberás obtener tus claves API (pública y secreta) de tu cuenta de Culqi. Configura estas claves en tu archivo de configuración o variables de entorno.
    

## Uso

1.  **Incluir el SDK de Culqi:** Asegúrate de incluir el SDK de Culqi en tu script PHP:
        
    `require 'vendor/autoload.php';` 
    
2.  **Manejo de Errores:** Implementa un manejo adecuado de errores para capturar y responder a cualquier problema que pueda surgir.
    

## Seguridad

-   Nunca almacenes información de tarjetas de crédito directamente en tu servidor.
-   Asegúrate de cumplir con los estándares de seguridad y privacidad pertinentes, como PCI-DSS.

## Soporte

Si tienes alguna pregunta o problema con la integración, puedes abrir un issue en este repositorio o contactar al soporte de Culqi.
