<?php
class Users{
    private  $nome;
    private  $cognome;
    private  $indirizzo;
    private  $dataNascita;
    private  $registrato;
    private  $numeroCartaCredito;
    function __construct($_nome,$_cognome,$_indirizzo,$_dataNascita,$_registrato,$_numeroCartaCredito)
    {
        $this->nome=$_nome;
        $this->cognome=$_cognome;
        $this->indirizzo=$_indirizzo;
        $this->dataNascita=$_dataNascita;
        $this->registrato=$_registrato;
        $this->numeroCartaCredito=$_numeroCartaCredito;
    }
    public function getSconto(){
        if ($this->registrato) {
            
        }
    }
}

