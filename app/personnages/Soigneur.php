<?php
namespace app\personnages;
use app\personnages\Personnage;
use app\armes\Arme;
use app\armures\Armure;
use app\competences\Competance;

class Soigneur extends Personnage {
    private Armure $armure;
    private Arme $arme;
    private int $niveau;
    private array $competence;

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