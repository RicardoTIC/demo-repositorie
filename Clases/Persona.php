<?php 



class Persona {

    private $nom;
    private $ape;
    private $edad;
    private $fechaNacimiento;

    public function __contruct(){}



    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getNom(){
        return $this->nom;
    }



}