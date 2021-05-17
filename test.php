<?php

abstract class Arme{
    protected static $nom;

    public static function test(){
        echo static::$nom.'<br/>';
    }
}

class Baton extends Arme{
    protected static $nom = "baton";

}

class Epee extends Arme{
    protected static $nom = "epee";
}

Baton::test(); //affiche baton
Epee::test(); //affiche epee

