<?php
class Riche extends Societe{

    public function depenser(int $spend){

        print "vous avez depenser" .$spend;
    }

    public function revenu(int $income){

        print "Vous recevez :".$income. "€";
    }

    public function jeVisBien(){

        print parent::trainDeVie(). " Aisément";
    }

}

 ?>
