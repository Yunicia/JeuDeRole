<?php
namespace app\armes;

abstract class Arme {
    protected static string $nom;
    protected int $puissancePhysique;
    protected int $puissanceMagique;

    public function __construct(int $puissancePhysique, int $puissanceMagique)
    {
        $this->setPuissancePhysique($puissancePhysique);
        $this->setPuissanceMagique($puissanceMagique);
    }

    public static function getNom():string
    {
        return static::$nom;
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