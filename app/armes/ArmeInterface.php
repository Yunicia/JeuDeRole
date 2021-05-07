<?php
namespace app\armes;

interface ArmeInterface{
    public function getNom();
    public function setPuissancePhysique(int $puissancePhysique);
    public function getPuissancePhysique();
    public function setPuissanceMagique(int $puissanceMagique);
    public function getPuissanceMagique();
}