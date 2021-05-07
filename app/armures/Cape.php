<?php
namespace app\armures;

class Cape implements Armure{
    private string $nom;
    private int $resistancePhysique;
    private int $resistanceMagique;

    public function __construct(string $nom, int $resistancePhysique, int $resistanceMagique)
    {
        $this->setNom($nom);
        $this->setResistancePhysique($resistancePhysique);
        $this->setResistanceMagique($resistanceMagique);
    }


    public function setNom(string $nom):void
    {
        $this->nom = $nom;
    }
    public function getNom():string
    {
        return $this->nom;
    }
    public function setResistancePhysique(int $resistancePhysique):void
    {
        $this->resistancePhysique = $resistancePhysique;
    }
    public function getResistancePhysique():int
    {
        return $this->resistancePhysique;
    }
    public function setResistanceMagique(int $resistanceMagique):void
    {
        $this->resistanceMagique = $resistanceMagique;
    }
    public function getResistanceMagique():int
    {
        return $this->resistanceMagique;
    }
}