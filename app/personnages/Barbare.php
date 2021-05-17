<?php
namespace app\personnages;
use app\personnages\Personnage;

class Barbare extends Personnage {

    public function afficheCartePersonnage():string
    {
        $cartePersonnage = "<div class='cartePersonnage'>";
        $cartePersonnage .= "<h2>Barbare</h2>";
        $cartePersonnage .= parent::afficheCartePersonnage();
        $cartePersonnage .= "<p>".$this->getPseudo()." est un(e) Barbare qui possède l'armure \"".$this->getArmure()->getNom()."\" et l'arme \"".$this->getArme()->getNom()."\"<br></p>";
        $cartePersonnage .= "</div>";

        return $cartePersonnage;
    }

    public function calculForceBasic(): int
    {   //bonus de class +15
        return parent::calculForceBasic() + 15;
    }

    public function calculForceMagique(): int
    {
        return 0;
    }
}