<?php
class Categorie {
    private $nome;
    private $icon;

    /**
     *  function: construct for the class Categoria 
     *
     * @param [string] $nome
     * @param [string] $icon
     */
    public function __construct($nome, $icon){
        $this -> nome = $nome;
        $this -> icon = $icon;
    }

    /**
     *  function return name 
     *
     * @return string name of the category
     */

    public function getNome(){
        return $this->nome;
    }

    /**
     *  function return the icon of the category
     *
     * @return string icon of the category
     */
    public function getIcon(){
        return $this->icon;
    }


    



}

?>