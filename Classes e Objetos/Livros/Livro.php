<?php

class Livro
{

    private $titulo;
    private $autor;
    private $genero;
    private $qtdpagina;


    function atributos(){


    }










    /**
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     */
    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of autor
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     */
    public function setAutor($autor): self
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of genero
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     */
    public function setGenero($genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of qtdpagina
     */
    public function getQtdpagina()
    {
        return $this->qtdpagina;
    }

    /**
     * Set the value of qtdpagina
     */
    public function setQtdpagina($qtdpagina): self
    {
        $this->qtdpagina = $qtdpagina;

        return $this;
    }
}
