<?php

class AnimalProducts{
    private $nome;
    private $peso;
    private $disponibilita;
    private $prezzo;
    private $codiceEan;

    public function __construct($_nome,$_peso,$_disponibilita,$_prezzo,$_codiceEan)
    {
        $this->nome=$_nome;
        $this->peso=$_peso;
        $this->disponibilita=$_disponibilita;
        $this->prezzo=$_prezzo;
        $this->codiceEan=$_codiceEan;
    }
    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of peso
     */ 
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set the value of peso
     *
     * @return  self
     */ 
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get the value of disponibilita
     */ 
    public function getDisponibilita()
    {
        return $this->disponibilita;
    }

    /**
     * Set the value of disponibilita
     *
     * @return  self
     */ 
    public function setDisponibilita($disponibilita)
    {
        $this->disponibilita = $disponibilita;

        return $this;
    }

    /**
     * Get the value of prezzo
     */ 
    public function getPrezzo()
    {
        return $this->prezzo;
    }

    /**
     * Set the value of prezzo
     *
     * @return  self
     */ 
    public function setPrezzo($prezzo)
    {
        $this->prezzo = $prezzo;

        return $this;
    }

    /**
     * Get the value of codiceEan
     */ 
    public function getCodiceEan()
    {
        return $this->codiceEan;
    }

    /**
     * Set the value of codiceEan
     *
     * @return  self
     */ 
    public function setCodiceEan($codiceEan)
    {
        $this->codiceEan = $codiceEan;

        return $this;
    }
}