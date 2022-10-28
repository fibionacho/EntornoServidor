<?php

class BancoMaloMalisimo  implements IPlataformaPago
{
    
    public function estableceConexión(): bool
    {
        echo "Conexion BancoMaloMalisimo";
        return true;
    }

    public function compruebaSeguridad(): bool
    {
        echo "COnexion segura BancoMaloMalisimo";
        return true;
    }

    public function pagar(string $cuenta, int $cantidad)
    {
        echo "$cantidad euros pagados a cuenta $cuenta con BancoMaloMalisimo";
    }
}

?>