<?php
class Users{
    private  $nome;
    private  $cognome;
    private  $indirizzo;
    private  $dataNascita;
    private  $registrato;
    private  $numeroCartaCredito;
    private $scadenza; 
    private $cart=[];
    private $total;
    function __construct($_nome,$_cognome,$_indirizzo,$_dataNascita,$_registrato,$_numeroCartaCredito,$_scadenza)
    {
        
        $this->nome=$_nome;
        $this->cognome=$_cognome;
        $this->indirizzo=$_indirizzo;
        $this->dataNascita=$_dataNascita;
        $this->registrato=$_registrato;
        $this->numeroCartaCredito=$_numeroCartaCredito;
        $this->scadenza=$_scadenza;
    }
    public function addCart($prod){
      return  $cart[]=$prod;
    }
    public function totalProducts($carts){
            $total=0;
            foreach ($carts as $cart) {
                $total += $cart;
            }
            if ($this->registrato) {
                return "il totale da pagare è" . ($total*20)/100;
            } else{
                return "il totale da pagare è " . $total;
            }
            if ( date("Y/m/d") > $this->scadenza ) {
                return "carta" . $this->numeroCartaCredito . "scaduta";
            }
    }
}

