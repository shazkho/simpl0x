<?php
namespace Core\CargadorDeClases;

use Exception;

/**
 * Clase CargadorDeClases
 * Carga las clases necesarias para poder usar simpl0x. No modificar!
 *
 * @package Core\CargadorDeClases
 * @version 0.1
 * @since 0.1
 */
class CargadorDeClases
{
    public $assets = [];

    public function __construct()
    {
        /** @var string $bootstrap */
        /** @var string $fontawesome */
        /** @var string $jquery */
        try {
            $raiz = dirname(__DIR__, 1);
            $carpeta_assets = $raiz . '/vistas/assets/';
            include_once '../configuracion/assets.php';
            $this->assets['bootstrap'] = $carpeta_assets . $bootstrap . '/';
            $this->assets['fontawesome'] = $carpeta_assets . $fontawesome . '/';
            $this->assets['jquery'] = $carpeta_assets . $jquery . '/';
        } catch (Exception $e) {
            echo $e->getTraceAsString();
        }
    }

}