<?php


class CompteBancaire{

    protected $name;
    protected $solde;

    public function __construct($name,$solde){
        $this->name = $name;
        $this->solde =$solde;
    }
    public function Affiche(): string {
        return $this->name. '<p>votre solde est de '.$this->solde.'.</p>';
    }

    public function retrait($cashout) {
        $this->solde = $this->solde - $cashout;
    }
    public function depot($cashin) {
        $this->solde =  $this->solde + $cashin;

    }
}