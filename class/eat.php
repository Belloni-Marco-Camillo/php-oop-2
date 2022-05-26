<?php 

/* Tutto questo appartiene al figlio */
class Eat extends Products {

    public $ingredient;

    /* Ora, gli lascio le variabili del padre con construct e ::parent 
    Qui possono starci i tipi di String, Int ecc.. */
    public function __construct($id, $title, $kind, $description, $price, $marca, $ingredient) {
        parent::__construct($id, $title, $kind, $description, $price, $marca); // Nel figlio NON ci può essere string
        $this->ingredient = $ingredient; // Questa è l'istanza di una variabile presente solo il Leone.php 
    }       
    /* Questo method permette di vedere, tramite var dump, il verso dell'animale in question 
    e' presente anche nel genitore */
    public function base_on() {
        return "verdura";
    }

    /* Avvio un altro method per recuperare un parametro protetto dalla mia dichiarazione */
    public function discount(){
        return $this->price / 2; // essendo protetto $tattiche lo salvo in una funzione pubblica
    }

    
}
$ingredient = new Eat('1','crocchette','cibo','Lorem ipsum dolor sit amet.','10.99','moon','verdure');

?>