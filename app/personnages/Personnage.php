<?php
namespace app\personnages;

abstract class Personnage
{
    private string $pseudo;
    private float $taille;
    private float $poids;
    private int $masseMusculaire;
    private int $age;
    private bool $sexe; //true femme et false homme
    private int $pointsDeVie;

    public function __construct(string $pseudo, float $taille, float $poids, int $masseMusculaire, int $age, bool $sexe)
    {
        $this->setPseudo($pseudo);
        $this->setTaille($taille);
        $this->setPoids($poids);
        $this->setMasseMusculaire($masseMusculaire);
        $this->setAge($age);
        $this->setSexe($sexe);
        $this->initPointsDeVie();
    }

    //getter et setter
    public function setPseudo(string $pseudo): void
    {
        $this->pseudo = ucfirst(strtolower($pseudo));
    }

    public function getPseudo(): string
    {
        return $this->pseudo;
    }

    public function setTaille(float $taille): void
    {
        $this->taille = $taille;
    }

    public function getTaille(): float
    {
        return $this->taille;
    }

    public function setPoids(float $poids): void
    {
        $this->poids = $poids;
    }

    public function getPoids(): float
    {
        return $this->poids;
    }

    public function setMasseMusculaire(int $masseMusculaire): void
    {
        $this->masseMusculaire = $masseMusculaire;
    }

    public function getMasseMusculaire(): int
    {
        return $this->masseMusculaire;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setSexe(int $sexe): void
    {
        $this->sexe = $sexe;
    }

    public function getSexe(): bool
    {
        return $this->sexe;
    }

    public function setPointsDeVie(int $pointsDeVie): void
    {
        $this->pointsDeVie = $pointsDeVie;
    }

    public function getPointsDeVie(): int
    {
        return $this->pointsDeVie;
    }

    //fin getter/setter

    public function initPointsDeVie()
    {
        $pointsDeVie = 500;

        if ($this->age < 18) {
            $this->pointsDeVie = $pointsDeVie / 2;
        } elseif ($this->age > 17 && $this->age < 26) {
            $this->pointsDeVie = $pointsDeVie;
        } else {
            $this->pointsDeVie = $pointsDeVie - $this->age;
        }
    }

    public function calculForceBasic(): int
    {
        $force = 5;
        $imc = $this->poids / ($this->taille * $this->taille);

        if ($imc > 17 && $imc < 26) {
            $force += 5;
        }

        if ($this->sexe) { //si femme
            if ($this->masseMusculaire < 28) {
                $force -= 2;
            } elseif ($this->masseMusculaire > 27 && $this->masseMusculaire < 45) {
                $force += (int)($this->masseMusculaire/10);
            }else{
                $force += 5;
            }
        } else //homme
        {
            if ($this->masseMusculaire < 35) {
                $force -= 2;
            } elseif ($this->masseMusculaire > 34 && $this->masseMusculaire < 55) {
                $force += (int)($this->masseMusculaire/10);
            }else{
                $force += 6;
            }
        }

        return $force;
    }

    public function afficheCartePersonnage():string
    {
        $cartePersonnage = "<h3>".$this->getPseudo()."</h3>";
        if($this->getSexe()){
            $cartePersonnage .= "<p>Elle mesure ".$this->getTaille()." m pour ".$this->getPoids()." kg.<br>";
        }else{
            $cartePersonnage .= "<p>Il mesure ".$this->getTaille()." m pour ".$this->getPoids()." kg.<br>";
        }
        $cartePersonnage .= $this->getPseudo()." a ".$this->getAge()." ans et possède ".$this->getPointsDeVie()." points de vie.<br>";
        $cartePersonnage .= "</p>";

        return $cartePersonnage;
    }

    //abstract public static function addCompetence();
}
