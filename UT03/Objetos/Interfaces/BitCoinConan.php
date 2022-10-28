<?php
class BitCoinConan implements IPlataformaPago
{
    public function estableceConexión(): bool
    {
        echo "conexion con Bitcoin";
        return true;
    }

    public function compruebaSeguridad(): bool
    {
        echo "conexion segura con Bitcoin";
        return true;
    }

    public function pagar(string $cuenta, int $cantidad)
    {
        echo "$cantidad criptomonedas pagadas a cuenta $cuenta de Bitcoin";
    }
}

?>