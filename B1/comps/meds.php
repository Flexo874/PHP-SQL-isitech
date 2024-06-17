<?php
class Meds
{
    public $nom;
    public $dose;
    public $fabricant;
    public $quantite;


    public function __construct($nom, $dose, $fabricant, $quantite)
    {
        $this->nom = $nom;
        $this->dose = $dose;
        $this->fabricant = $fabricant;
        $this->quantite = $quantite;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getDose()
    {
        return $this->dose;
    }

    public function getFabricant()
    {
        return $this->fabricant;
    }

    public function getQuantite()
    {
        return $this->quantite;
    }
    /*$medsList = [
    $med1 = new Meds('Paracétamol', '500mg', 'Sanofi', 100),
    $med2 =new Meds('Ibuprofène', '400mg', 'Pfizer', 200),
    $med3 =new Meds('Amoxicilline', '250mg', 'Teva', 150),
    $med4 =new Meds('Aspirine', '100mg', 'Bayer', 50),
    $med5 =new Meds('Insuline', '100U', 'Novo Nordisk', 300),
    $med6 =new Meds('Vitamine C', '1000mg', 'Nature Made', 400),
    $med7 =new Meds('Oméprazole', '20mg', 'AstraZeneca', 120),
    $med8 = new Meds('Loratadine', '10mg', 'Merck', 220),
    $med9 =new Meds('Simvastatine', '40mg', 'Sandoz', 140),
    $med10 =new Meds('Métronidazole', '500mg', 'Roche', 180)];*/
}

