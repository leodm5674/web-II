<?php
    class Categoria{
        private $id_categoria;
        private $categoria;

        public function getIdCategoria(){
            return $this->id_categoria;
        }

        public function setIdCategoria($id_categoria){
            $this->id_categoria = $id_categoria;
        }

        public function getCategoria(){
            return $this->categoria;
        }

        public function setCategoria($categoria){
            $this->categoria = $categoria;
        }



    }

