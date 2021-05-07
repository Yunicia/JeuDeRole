<?php
namespace app\competences;

class Competence {
    private string $nom;
    private string $type;
    private float $coefPuissance;

    public function __construct(string $nom, string $type, float $coefPuissance)
    {
        $this->nom = $nom;
        $this->type = $type;
        $this->coefPuissance = $coefPuissance;
    }

    public function getNom():string
    {
        return $this->nom;
    }
    public function getType():string
    {
        return $this->type;
    }
    public function getCoefPuissance():float
    {
        return $this->coefPuissance;
    }
}