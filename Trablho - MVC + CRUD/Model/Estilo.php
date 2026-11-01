<?php
    
    public class Estilo{
        private $id_estilo;
        private $estilo;

        public function getIdEstilo(){
            return $this->id_estilo;
        }

        public function setIdEstilo($id_estilo){
            $this->id_estilo = $id_estilo;
        }

        public function getEstilo(){
            return $this->estilo;
        }

        public function setEstilo($estilo){
            $this->estilo = $estilo;
        }
    }
