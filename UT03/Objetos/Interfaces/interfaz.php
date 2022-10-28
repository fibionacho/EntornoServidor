<?php 
interface IPlataformaPago
{
    public function estableceConexión():bool;
    public function compruebaSeguridad():bool;
    public function pagar(string $cuenta, int $cantidad);
}

class BancoMalvado implements IPlataformaPago
{


    public function estableceConexión(): bool
    {
        echo "conexion BancoMalvado";
        return true;
    }
    
    public function compruebaSeguridad(): bool
    {
        echo "Conexion segura BancoMalvado";
        return true;
    }

    public function pagar(string $cuenta, int $cantidad)
    {
        echo "$cantidad euros pagados a cuenta $cuenta";
    }

}
?>