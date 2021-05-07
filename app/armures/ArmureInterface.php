<?php
namespace app\armures;

interface ArmureInterface{
    public static function getNom();
    public function setResistancePhysique(int $resistancePhysique);
    public function getResistancePhysique();
    public function setResistanceMagique(int $resistanceMagique);
    public function getResistanceMagique();
}