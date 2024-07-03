<?php
class Prodotti {
    private $titolo;
    private $prezzo;
    private $immagine;
    private $categoria;
    private $tipo;

    /**
     *  function construct for the class products
     *
     * @param [string] $titolo
     * @param [int] $prezzo
     * @param [string] $immagine
     * @param [string] $categoria
     * @param [string] $tipo
     */
    public function __construct($titolo, $prezzo, $immagine, $categoria, $tipo) {
        $this->titolo = $titolo;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
        $this->tipo = $tipo;
    }

    public function getTitolo() {
        return $this->titolo;
    }

    public function getPrezzo() {
        return $this->prezzo;
    }

    public function getImmagine() {
        return $this->immagine;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getTipo() {
        return $this->tipo;
    }
}
?>