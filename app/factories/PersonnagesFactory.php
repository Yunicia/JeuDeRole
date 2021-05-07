<?php
namespace app\factories;

use app\armes\Baton;
use app\armes\EpeeUneMain;
use app\armures\Cape;
use app\armures\PlateArmor;

use app\competences\Competence;

use app\personnages\Barbare;
use app\personnages\Defenseur;
use app\personnages\Soigneur;
use app\personnages\Sorcier;

class PersonnagesFactory
{
    public static function creerBarbare()
    {  
        if(rand(0,1) == 0){
            $infosPersonnage = self::randInfosPersonnageFeminin();
            $babare = new Barbare($infosPersonnage["pseudo"], $infosPersonnage["taille"], $infosPersonnage["poids"], $infosPersonnage["masseMusculaire"], $infosPersonnage["age"], true);
        }
        else{
            $infosPersonnage = self::randInfosPersonnageMasculin();
            $babare = new Barbare($infosPersonnage["pseudo"], $infosPersonnage["taille"], $infosPersonnage["poids"], $infosPersonnage["masseMusculaire"], $infosPersonnage["age"], false);
        }

        $competences = array(new Competence("taper","physique", 1),
                            new Competence("taper fort", "physique", 0.5),
                            new Competence("sort de base", "magie", 0)
                    );
        $babare->setCompetence($competences);
        $epeeUneMain = new EpeeUneMain(15, 10);
        $armureTank = new PlateArmor("Armure grossière", 20, 15);
        $babare->setArme($epeeUneMain);
        $babare->setArmure($armureTank);
        return $babare;
    }

    public static function creerDefenseur()
    {  
        if(rand(0,1) == 0){
            $infosPersonnage = self::randInfosPersonnageFeminin();
            $defenseur = new Defenseur($infosPersonnage["pseudo"], $infosPersonnage["taille"], $infosPersonnage["poids"], $infosPersonnage["masseMusculaire"], $infosPersonnage["age"], true);
        }
        else{
            $infosPersonnage = self::randInfosPersonnageMasculin();
            $defenseur = new Defenseur($infosPersonnage["pseudo"], $infosPersonnage["taille"], $infosPersonnage["poids"], $infosPersonnage["masseMusculaire"], $infosPersonnage["age"], false);
        }

        $competences = array(new Competence("taper","physique", 1),
                            new Competence("taper fort", "physique", 0.5),
                            new Competence("soin", "magie", 1)
                    );
        $defenseur->setCompetence($competences);
        $epeeUneMain = new EpeeUneMain(10, 10);
        $armureTank = new PlateArmor("Armure", 20, 20);
        $defenseur->setArme($epeeUneMain);
        $defenseur->setArmure($armureTank);
        return $defenseur;
    }

    public static function creerSoigneur()
    {  
        if(rand(0,1) == 0){
            $infosPersonnage = self::randInfosPersonnageFeminin();
            $soigneur = new Soigneur($infosPersonnage["pseudo"], $infosPersonnage["taille"], $infosPersonnage["poids"], $infosPersonnage["masseMusculaire"], $infosPersonnage["age"], true);
        }
        else{
            $infosPersonnage = self::randInfosPersonnageMasculin();
            $soigneur = new Soigneur($infosPersonnage["pseudo"], $infosPersonnage["taille"], $infosPersonnage["poids"], $infosPersonnage["masseMusculaire"], $infosPersonnage["age"], false);
        }

        $competences = array(new Competence("taper","physique", 0.2),
                            new Competence("sort offensif", "magie", 1),
                            new Competence("soin", "magie", 2)
                    );
        $soigneur->setCompetence($competences);
        $baton = new Baton(8, 20);
        $cape = new Cape("Capuchon de soigneur", 20, 20);
        $soigneur->setArme($baton);
        $soigneur->setArmure($cape);
        return $soigneur;
    }

    public static function creerSorcier()
    {  
        if(rand(0,1) == 0){
            $infosPersonnage = self::randInfosPersonnageFeminin();
            $mage = new Sorcier($infosPersonnage["pseudo"], $infosPersonnage["taille"], $infosPersonnage["poids"], $infosPersonnage["masseMusculaire"], $infosPersonnage["age"], true);
        }
        else{
            $infosPersonnage = self::randInfosPersonnageMasculin();
            $mage = new Sorcier($infosPersonnage["pseudo"], $infosPersonnage["taille"], $infosPersonnage["poids"], $infosPersonnage["masseMusculaire"], $infosPersonnage["age"], false);
        }

        $competences = array(new Competence("taper","physique", 0.2),
                            new Competence("sort offensif", "magie", 3),
                            new Competence("petit sort offencif", "magie", 2)
                    );
        $mage->setCompetence($competences);
        $baton = new Baton(5, 15);
        $cape = new Cape("Capuchon anti-feu", 15, 15);
        $mage->setArme($baton);
        $mage->setArmure($cape);
        return $mage;
    }

    private static function randInfosPersonnageFeminin():array
    {
        $tableauPseudos = array("Pocahontas", "Aurore", "Vaiana", "Cendrillon", "Ariel", "Jasmine", "Mulan", "Blanche neige", "Belle", "Tiana", "Raiponse", "Merida", "Elsa", "Anna", "Alice", "Audrey", "Jane", "Marie", "Wendy");
        $tableauTaille = array(1.60, 1.61, 1.62, 1.63, 1.64, 1.65, 1.66, 1.67, 1.68, 1.69, 1.70, 1.71, 1.72, 1.73, 1.74, 1.75);
        $poids = rand(60,84);
        $masseMusculaire = rand(23,36);
        $age = rand(14,74);
        return array("pseudo" => $tableauPseudos[array_rand($tableauPseudos, 1)],
                    "taille" => $tableauTaille[array_rand($tableauTaille, 1)],
                    "poids" => $poids,
                    "masseMusculaire" => $masseMusculaire,
                    "age" => $age);
    }

    private static function randInfosPersonnageMasculin():array
    {
        $tableauPseudos = array("John Smith", "Philippe", "Maui", "Charmant", "Eric", "Aladdin", "Shang", "Arthur", "Merlin", "Hercule", "Marin", "Nemo", "Peter", "Remy", "Robin", "Sebastien", "Sven", "Dumbo", "Atchoum", "Bambi", "Buzz", "Woody");
        $tableauTaille = array(1.70, 1.71, 1.72, 1.73, 1.74, 1.75, 1.76, 1.77, 1.78, 1.79, 1.80, 1.81, 1.82, 1.83, 1.84, 1.85);
        $poids = rand(70,94);
        $masseMusculaire = rand(30,45);
        $age = rand(14,74);
        return array("pseudo" => $tableauPseudos[array_rand($tableauPseudos, 1)],
                    "taille" => $tableauTaille[array_rand($tableauTaille, 1)],
                    "poids" => $poids,
                    "masseMusculaire" => $masseMusculaire,
                    "age" => $age);
    }
}