<?php
require_once __DIR__ . './animalProduts.php';

class Cucce extends AnimalProducts{
    private  $dimensioneCuccia;
    private  $materialeCuccia;
    public function __construct($_nome,$_peso,$_disponibilita,$_prezzo,$_codiceEan,$_dimensioneCuccia,$_materialeCuccia)
    {
        parent::__construct($_nome,$_peso,$_disponibilita,$_prezzo,$_codiceEan);
        $this->dimensioneCuccia=$_dimensioneCuccia;
        $this->materialeCuccia=$_materialeCuccia;
    }
}