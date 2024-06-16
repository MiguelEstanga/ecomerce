<?php

namespace App\Helper;
use App\Models\EpresasDeEnvioYRetiro;
use App\Models\Sucursal;
Class Retiro
{
    public static function getRetiro($id_epresas_de_envio_y_retiros)
    {
        $retiro = EpresasDeEnvioYRetiro::find($id_epresas_de_envio_y_retiros);
        return $retiro;
    }
   public static function getSucursal($id_epresas_de_envio_y_retiros)
    {
        $sucursal = Sucursal::find($id_epresas_de_envio_y_retiros);
        return $sucursal;
    }
}