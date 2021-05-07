<?php
namespace app\armes;

class Baton extends Arme{

    public function __construct(int $puissancePhysique, int $puissanceMagique)
    {
        $this->nom = "Baton";
        parent::__construct($puissancePhysique, $puissanceMagique);
    }
}