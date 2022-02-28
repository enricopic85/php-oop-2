<?php
require_once __DIR__ . './animalProduts.php';

// dentro la classe ci sono: variabili,proprietà,metodi,costruttore
class Cibo extends AnimalProducts{
    private $scadenza;

    public function __construct($_nome,$_peso,$_disponibilita,$_prezzo,$_codiceEan,$_scadenza)
    {
        parent::__construct($_nome,$_peso,$_disponibilita,$_prezzo,$_codiceEan);
        $this->scadenza=$_scadenza;
    }
    
}

