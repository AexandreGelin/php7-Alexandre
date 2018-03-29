<?php
class Pauvre extends Societe{

    public function depenser(int $spend){

        print "vous avez depenser" .$this->spend;
    }

    public function revenu(int $income){

        print "Vous recevez :".$this->income. "€";
    }

    public function jeVisMal(){

        print parent::trainDeVie(). " Difficilement";
    }

}

 ?>
