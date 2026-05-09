<?php

if ($peticionAjax) {
    require_once "../models/ordenCompraModelo.php";
} else {
    require_once "./models/ordenCompraModelo.php";
}

class ordenCompraControlador extends ordenCompraModelo
{

    // controlador para agregar orden de compra controlador 
    public function agregar_ordenCompra_controlador()
    {

        // obteniendo datos de la orden de compra en variable
        // aquí solo se captura los datos del mismo formulario, datos como el año mes y semana se capturaran automáticamente del sistema cuando se registre ese orden de registro
        // ----------------------------------------------- 


        // datos de las orden de compra
        $OC_Serie = mainModel::limpiar_cadena($_POST['ordenC_Serie_reg']);
        $OC_Correlativo = mainModel::limpiar_cadena($_POST['ordenC_Correlativo_reg']);

        // fechas 
        $OC_fechaEmision = mainModel::limpiar_cadena($_POST['ordenC_FechaEmision_reg']);
        $OC_FechaVencimiento = mainModel::limpiar_cadena($_POST['ordenC_FechaVencimiento_reg']);
        $OC_Estado = mainModel::limpiar_cadena($_POST['ordenC_Estado_reg']);

        // datos visuales de la oc
        $OC_proveedor = mainModel::limpiar_cadena($_POST['ordenC_Proveedor_reg']);
        $OC_Descricion = mainModel::limpiar_cadena($_POST['ordenC_Descripcion_reg']);
        $OC_TipoCosto = mainModel::limpiar_cadena($_POST['ordenC_TipoCosto_reg']);

        // datos numéricos
        $OC_Inafecto = mainModel::limpiar_cadena($_POST['ordenC_Inafecto_reg']);
        $OC_Subtotal = mainModel::limpiar_cadena($_POST['ordenC_Subtotal_reg']);
        $OC_Igv = mainModel::limpiar_cadena($_POST['ordenC_Igv_reg']);
        $OC_total = mainModel::limpiar_cadena($_POST['ordenC_Total_reg']);
        $OC_Percepcion = mainModel::limpiar_cadena($_POST['ordenC_Percepcion_reg']);
        $OC_Detraccion = mainModel::limpiar_cadena($_POST['ordenC_Detraccion_reg']);

        // datos para el guardado de los archivos pdf 
        $OC_Ordenpdf = mainModel::limpiar_cadena($_POST['ordenC_Ocpdf_reg']);
        $OC_Bancopdf = mainModel::limpiar_cadena($_POST['ordenC_Bancopdf_reg']);
        $OC_Facturapdf = mainModel::limpiar_cadena($_POST['ordenC_Facturapdf_reg']);
        $OC_Guiapdf = mainModel::limpiar_cadena($_POST['ordenC_GuiaPdf_reg']);
    }
}
