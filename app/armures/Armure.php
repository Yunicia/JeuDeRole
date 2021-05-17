<?php
namespace app\armures;

abstract class Armure {
    protected static string $nom;
    protected int $resistancePhysique;
    protected int $resistanceMagique;

    public function __construct(int $resistancePhysique, int $resistanceMagique)
    {
        $this->setResistancePhysique($resistancePhysique);
        $this->setResistanceMagique($resistanceMagique);
    }

    public static function getNom():string
    {
        return static::$nom;
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
