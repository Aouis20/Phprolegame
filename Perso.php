<?php

// Class abstraite (à hériter et non instanciable)
abstract class Perso
{
    // Statistique par défaut
    private $name;
    private $pv;
    private $atq;
    private $def;
    private $state;

    // SETTER NAME PV ATQ DEF

    public function setNAME($name)
    {
        return $this->name = $name;
    }
    public function setPV($pv)
    {
        return $this->pv = $pv;
    }

    public function setATQ($atq)
    {
        return $this->atq = $atq;
    }

    public function setDEF($def)
    {
        return $this->def = $def;
    }

    // GETTERS NAME PV ATQ DEF

    public function getNAME()
    {
        return $this->name;
    }
    public function getPV()
    {
        return $this->pv;
    }

    public function getATQ()
    {
        return $this->atq;
    }

    public function getDEF()
    {
        return $this->def;
    }


    // Présente le perso
    public function __toString()
    {
        return "Je suis {$this->getNAME()}";
    }

    // Constructeur
    public function __construct(string $name)
    {
        $name ? $this->setNAME(ucfirst(strtolower($name))) : $this->setNAME('John');
        $this->pv = $this->setPV(100);
    }

    // Auto-Attaque
    public function Attaque(Perso $target)
    {
        $target->pv -= $this->getATQ() - $target->getDEF();
        echo "{$target->getNAME()} a attaqué {$this->getNAME()}, il n'a plus que {$target->getPV()} ❤️!";
    }
}


// Mage
class Mage extends Perso
{
    private $magie = 75;

    // Présente le perso
    public function __toString()
    {
        return "Je suis {$this->getNAME()} le mage ({$this->getPV()}PV / {$this->getATQ()}ATQ / {$this->getDEF()}DEF.)";
    }

    // Attribution des stats
    public function __construct($name)
    {
        $name ? $this->setNAME(ucfirst(strtolower($name))) : $this->setNAME('John');
        $this->pv = $this->setPV(100);
        $this->atq = $this->setATQ(rand(5,10));
        $this->def = $this->setDEF(0);
    }

    // Attaque Spéciale
    public function Spell(Perso $target)
    {
        $target->pv -= $this->magie - $target->getDEF();
        echo "{$target->getNAME()} a lancé un sort {$this->getNAME()}, il n'a plus que {$target->getPV()} ❤️!";
    }

    public function Sleep(Perso $target)
    {
        // Sleep 
    }
}


// Guerrier
class Guerrier extends Perso
{
    private $physique = 50;

    // Présente le perso
    public function __toString()
    {
        return "Je suis {$this->getNAME()} le guerrier ({$this->getPV()}PV / {$this->getATQ()}ATQ / {$this->getDEF()}DEF).";
    }

    // Attribution des stats
    public function __construct($name)
    {
        $name ? $this->setNAME(ucfirst(strtolower($name))) : $this->setNAME('John');
        $this->pv = $this->setPV(100);
        $this->atq = $this->setATQ(rand(20,40));
        $this->def = $this->setDEF(rand(10,19));
    }

    // Attaque Spécial
    public function Frappe(Perso $target)
    {
        $target->pv -= $this->physique - $target->getDEF();
        echo "{$target->getNAME()} a frappé {$this->getNAME()}, il n'a plus que {$target->getPV()} ❤️!";
    }
}