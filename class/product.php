<?php 

/* Questo ora è un componente */

/* Avvio la Classe, entità */
class Products {
    public $id;
    public $title;
    public $kind;
    public $description;
    public $price;
    public $marca;

    /* Definisco un construct */
    function __construct($id, $title, $kind, $description, $price, $marca) {
        /* Definisco le istanze all'interno del construtto */
        $this->id = $id;
        $this->title = $title;
        $this->kind = $kind;
        $this->description = $description;
        $this->price = $price;
        $this->marca = $marca;
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
$product = new Products('1','crocchette','cibo','Lorem ipsum dolor sit amet.','10.99','moon');
?>
