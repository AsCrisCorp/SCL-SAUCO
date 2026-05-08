<?php

$peticionAjax = true;
require_once "../config/APP.php";

// re-direcciona al login cuando intente ingresar a las carpetas ajax
if (isset($_POST['ordenC_Serie_reg']) || isset($_POST['ordenC_Correlativo_up'])) {

    // instancia al controlador
    require_once "../controller/ordenCompraControlador.php";
    $ins_ordenC = new ordenCompraControlador();

    // agregar orden de compra
    if (isset($_POST['ordenC_Serie_reg'])) {
        echo $ins_ordenC->agregar_ordenCompra_controlador();
    }
    // actualizar orden de compra 
    if (isset($_POST['empresa_id_up'])) {
        echo $ins_empresa->actualizar_empresa_controlador();
    }
} else {
    session_start(['name' => 'SCL']);
    session_unset();
    session_destroy();
    header("Location: " . SERVERURL . "login/");
    exit();
}
