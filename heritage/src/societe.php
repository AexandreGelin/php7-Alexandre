<?php
class Societe{
    protected $money;

    public function __construct(int $money){
        $this->money = $money;
    }

    public function trainDeVie(){
        return "Vous vivez :";
    }

}

 ?>
