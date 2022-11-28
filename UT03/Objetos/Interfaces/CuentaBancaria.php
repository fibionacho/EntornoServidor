<?php
class CuentaBancaria
{
    //ATRIBUTOS
    public $numCuenta;
    public $nombre;
    public $saldo;
    public static $prefijo=100000;

    //CONSTRUCTOR CON VALORES POR DEFECTO
    public function __construct ($nombre="anonimo",$saldo=0)
    {
        self::$prefijo++;
        $this->numCuenta = self::$prefijo;
        $this->nombre=$nombre;
        $this->saldo = $saldo;
    }

    //METODOS
    public function ingresar($ingreso)
    {
        $this->saldo+=$ingreso;
    }

    public function retirar($retiro)
    {
        $this->saldo-=$retiro;
    }

    public function getSaldo():float
    {
        return $this->saldo;
    }

    public function transferirA($cuentabancaria,$cantidad)
    {
        $this->retirar($cantidad);
        $cuentabancaria->ingresar($cantidad);
    }

    public function bancaRota()
    {
        $this->saldo=0;
    }

    public function unir($cuentabancaria)
    {
        $this -> ingresar($cuentabancaria->getSaldo());
        $cuentabancaria->bancaRota();
        $cuentabancaria->numCuenta=-1;
    }

    public function mostrar(){
        return $this->nombre." ".$this->numCuenta." ".$this->saldo;
    }

}




?>