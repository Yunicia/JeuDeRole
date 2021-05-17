<?php
namespace app\personnages;
use app\personnages\Personnage;

class Sorcier extends Personnage {

    public function afficheCartePersonnage():string
    {
        $cartePersonnage = "<div class='cartePersonnage'>";
        $cartePersonnage .= "<h2>Sorcier</h2>";
        $cartePersonnage .= parent::afficheCartePersonnage();
        $cartePersonnage .= "<p>".$this->getPseudo()." est un(e) mage qui possède l'armure \"".$this->getArmure()->getNom()."\" et l'arme \"".$this->getArme()->getNom()."\"<br></p>";
        $cartePersonnage .= "</div>";

        return $cartePersonnage;
    }

    public function calculForceBasic(): int
    {   //bonus de class -5
        return parent::calculForceBasic() - 5;
    }

    public function calculForceMagique(): int
    {
        return parent::calculForceBasic() + 15;
    }
}