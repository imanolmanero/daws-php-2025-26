<?php 

class publicacion {
    //Propiedades
    private string $autores;
    private int $año;
    private string $editorial;
    private string $titulo;
    private string $texto;

    //Constructor
    public function __construct($autores,$año,$editorial,$titulo,$texto) {
        $this->autores = $autores;
        $this->año = $año;
        $this->editorial = $editorial;
        $this->titulo = $titulo;
        $this->texto = $texto;
    }
    
    //Metodo -> leer
    public function leer(){
        return $this->texto;
    }

    public function verTitulo(){
        return $this->titulo;
    }

    //Metodo -> escribir
    public function escribir($string){
        return $this -> texto. " " .$string;
    }

}