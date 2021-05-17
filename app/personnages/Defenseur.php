<?php
namespace app\personnages;
use app\personnages\Personnage;

class Defenseur extends Personnage {

    public function afficheCartePersonnage():string
    {
        $cartePersonnage = "<div class='cartePersonnage'>";
        $cartePersonnage .= "<h2>Defenseur</h2>";
        $cartePersonnage .= parent::afficheCartePersonnage();
        $cartePersonnage .= "<p>".$this->getPseudo()." est un Defenseur qui possède l'armure \"".$this->getArmure()->getNom()."\" et l'arme \"".$this->getArme()->getNom()."\"<br></p>";
        $cartePersonnage .= "</div>";

        return $cartePersonnage;
    }

    public function calculForceBasic(): int
    {   //bonus de class +7
        return parent::calculForceBasic() + 7;
    }

    public function calculForceMagique(): int
    {
        return 10;
    }
}