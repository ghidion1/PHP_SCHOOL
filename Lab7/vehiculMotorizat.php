<?php
include_once './vehicul.php';

abstract class VeihculMotorizat implements vehicul
{
    protected $marca, $model, $anFabricate, $capacitatemotor;
    public function __construct($marca, $model, $anFabricate, $capacitatemotor){
        $this->marca = $marca;
        $this->model = $model;
        $this->anFabricate = $anFabricate;
        $this->capacitatemotor = $capacitatemotor;

    }
    public function porneste()
    {
        return "Porneste";
    }
    public function opreste()
    {
        return "Opreste";
    }
    abstract public function tipcombustibil();
}
?>