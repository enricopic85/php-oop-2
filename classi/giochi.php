<?php 
require_once __DIR__ . './animalProduts.php';

class Giochi extends AnimalProducts{
    private  $utilizzoGioco;
    private  $etaAnimale;
    public function __construct($_nome,$_peso,$_disponibilita,$_prezzo,$_codiceEan,$_utilizzoGioco,$_etaAnimale)
    {
        parent::__construct($_nome,$_peso,$_disponibilita,$_prezzo,$_codiceEan);
        $this->utilizzoGioco=$_utilizzoGioco;
        $this->etaAnimale=$_etaAnimale;
    }

    /**
     * Get the value of utilizzoGioco
     */ 
    public function getUtilizzoGioco()
    {
        return $this->utilizzoGioco;
    }

    /**
     * Set the value of utilizzoGioco
     *
     * @return  self
     */ 
    public function setUtilizzoGioco($utilizzoGioco)
    {
        $this->utilizzoGioco = $utilizzoGioco;

        return $this;
    }

    /**
     * Get the value of etaAnimale
     */ 
    public function getEtaAnimale()
    {
        return $this->etaAnimale;
    }

    /**
     * Set the value of etaAnimale
     *
     * @return  self
     */ 
    public function setEtaAnimale($etaAnimale)
    {
        $this->etaAnimale = $etaAnimale;

        return $this;
    }
}