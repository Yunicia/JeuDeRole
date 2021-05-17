<?php
namespace app\personnages;
use app\personnages\Personnage;

class Soigneur extends Personnage {

    public function afficheCartePersonnage():string
    {
        $cartePersonnage = "<div class='cartePersonnage'>";
        $cartePersonnage .= "<h2>Soigneur</h2>";
        $cartePersonnage .= parent::afficheCartePersonnage();
        $cartePersonnage .= "<p>".$this->getPseudo()." est un soigneur qui possède l'armure \"".$this->getArmure()->getNom()."\" et l'arme \"".$this->getArme()->getNom()."\".<br></p>";
        $cartePersonnage .= "</div>";

        return $cartePersonnage;
    }

    public function calculForceBasic(): int
    {   //bonus de class -10
        return parent::calculForceBasic() - 10;
    }

    public function calculForceMagique(): int
    {
        return parent::calculForceBasic() + 20;
    }
}