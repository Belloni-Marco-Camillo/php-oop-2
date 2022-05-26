<?php 

/* Questo ora è un componente */

/* Avvio la Classe, entità */
class User {
    public $id;
    public $name;
    public $lastname;
    public $premium;
    

    /* Definisco un construct */
    function __construct($id, $name, $lastname, $premium) {
        /* Definisco le istanze all'interno del construtto */
        $this->id = $id;
        $this->name = $name;
        $this->lastname = $lastname;
        $this->premium = $premium;
    }




    /* Avvio un method */
    public function getSpecie(){
        return $this->famiglia; // essendo protetto $famiglia lo salvo in una funzione pubblica
    }
    /* Avvio altro method per ereditarietà */
    public function parla() {
        return "Io Parlo";
    }
}
$users = [
    new User('1','marco','belloni', true),

    new User('2','nicolas','flamel', false)
];
?>