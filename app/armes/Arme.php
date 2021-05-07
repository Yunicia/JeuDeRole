<?php
namespace app\armes;

abstract class Arme implements ArmeInterface{
    //protected string $nom;
    protected string $nom;
    protected int $puissancePhysique;
    protected int $puissanceMagique;

    public function __construct(int $puissancePhysique, int $puissanceMagique)
    {
        $this->setPuissancePhysique($puissancePhysique);
        $this->setPuissanceMagique($puissanceMagique);
    }


    public function getNom():string
    {
        return $this->nom;
    }
    public function setPuissancePhysique(int $puissancePhysique):void
    {
        $this->puissancePhysique = $puissancePhysique;
    }
    public function getPuissancePhysique():int
    {
        return $this->puissancePhysique;
    }
    public function setPuissanceMagique(int $puissanceMagique):void
    {
        $this->puissanceMagique = $puissanceMagique;
    }
    public function getPuissanceMagique():int
    {
        return $this->puissanceMagique;
    }
}