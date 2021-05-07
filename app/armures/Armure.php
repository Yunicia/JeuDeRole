<?php
namespace app\armures;

interface Armure{
    public function setNom(string $nom);
    public function getNom();
    public function setResistancePhysique(int $resistancePhysique);
    public function getResistancePhysique();
    public function setResistanceMagique(int $resistanceMagique);
    public function getResistanceMagique();
}
