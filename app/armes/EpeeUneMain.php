<?php
namespace app\armes;

class EpeeUneMain extends Arme {

    public function __construct(int $puissancePhysique, int $puissanceMagique)
    {
        $this->nom = "Epée à une main";
        parent::__construct($puissancePhysique, $puissanceMagique);
    }
}