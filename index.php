<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
</head>

<body>
    
<h1>Persone</h1>

<?php
/**
     * 
     *      Definire classe Persona:
     *          - ATTRIBUTI (private):
     *              - nome
     *              - cognome
     *              - dataNascita (stringa)
     *          - METODI:
     *              - costruttore che accetta nome e cognome
     *              - setter/getter per ogni variabile
     *              - printFullPerson: che stampa "nome cognome: dataNascita"
     *              - toString: che ritorna "nome cognome: dataNascita"
     * 
     * 
     *      Definire classe Employee che eredita da Persona:
     *          - ATTRIBUTI (private):
     *              - stipendio
     *              - dataAssunzione
     *          - METODI:
     *              - costruttore che accetta nome, cognome e stipendio
     *              - setter/getter per variabili 
     *              - printFullEmployee: che stampa "nome cognome: stipendio (dataAssunzione)"
     *              - toString: che ritorna "nome cognome: stipendio (dataAssunzione)"
     * 
     */
class People {

    private $name;
    private $surname;
    private $dateBirthday;

    public function __construct($name, $surname){

        $this -> setName($name);
        $this -> setSurname($surname);
    }

    // NOME
    public function getName(){

        return $this -> name;
    }
    public function setName($name){
        $this -> name = $name;
    }

    // COGNOME
    public function getSurname(){

        return $this -> surname;
    }
    public function setSurname($surname){

        $this -> surname = $surname;
    }

    // DATA DI NASCITA
    public function getBirthday(){

        return $this -> dateBirthday;
    }
    public function setBirthday($dateBirthday){

        $this -> dateBirthday = $dateBirthday;
    }

    // NOME COMPLETO + DATA DI NASCITA
    public function printFullPerson(){

        return $this -> getName() . " " . $this -> getSurname() . ": " . "Nato il " . $this -> getBirthday();
    }

    public function __toString() {

        return $this -> printFullPerson();
    }
}

class Employee extends People {
    private $salary;
    private $dateEmployee;

    public function __construct($name, $surname, $salary) {

        parent::__construct($name, $surname);
        $this -> setSalary($salary);
    }

    // SALARIO
    public function getSalary(){

        return $this -> salary;
    }
    public function setSalary($salary){
        $this -> salary = $salary;
    }

    // DATA ASSUNZIONE
    public function getDateEmployee(){

        return $this -> dateEmployee;
    }
    public function setDateEmployee($dateEmployee){

        $this -> dateEmployee = $dateEmployee;
    }

    public function printFullEmplyee() {

        return $this -> getName() . " " . $this -> getSurname() . "/ " . "Stipendio netto di: €" . $this -> getSalary() . " " . "(" . "Assunto il " . $this -> getDateEmployee() . ")";
    }

    public function __toString() {
        return $this -> printFullEmplyee();
    }
}
    
    $people1 = new People("Antonino", "Piazza Palotto");
    $people1 -> setBirthday("02/03/1992");

    echo $people1;
    echo "<br> ---------------------- <br><br>";

    $people1 = new Employee("Antonino", "Piazza Palotto", 1600);
    $people1 -> setDateEmployee("18/01/2022");

    echo $people1;

?>

</body>
</html>