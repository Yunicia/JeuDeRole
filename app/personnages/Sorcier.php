<?php
namespace app\personnages;
use app\personnages\Personnage;
use app\armes\Arme;
use app\armures\Armure;

class Sorcier extends Personnage {
    private Armure $armure;
    private Arme $arme;
    private int $niveau;
    private array $competence;

    public function afficheCartePersonnage():string
    {
        $cartePersonnage = "<div class='cartePersonnage'>";
        $cartePersonnage .= "<h2>Sorcier</h2>";
        $cartePersonnage .= parent::afficheCartePersonnage();
        $cartePersonnage .= "<p>".$this->getPseudo()." est un(e) mage qui possède l'armure ".$this->getArmure()->getNom()." et l'arme ".$this->getArme()->getNom()."<br></p>";
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

    public function getCompetence():array
    {
        return $this->competence;
    }

    public function setCompetence(array $competence):void
    {
        $this->competence = $competence;
    }

    public function getArmure():Armure
    {
        return $this->armure;
    }

    public function setArmure(Armure $armure):void
    {
        $this->armure = $armure;
    }

    public function getArme():Arme
    {
        return $this->arme;
    }

    public function setArme(Arme $arme):void
    {
        $this->arme = $arme;
    }

    public function getNiveau():int
    {
        return $this->niveau;
    }

    public function setNiveau(int $niveau):void
    {
        $this->niveau = $niveau;
    }
}