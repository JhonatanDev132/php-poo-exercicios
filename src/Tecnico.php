<?php
require_once "src/Livro.php";
    final class Tecnico extends Livro {
      private $formato = array("digital", "formato");

      /**
       * Get the value of formato
       */
      public function getFormato() : array
      {
            return $this->formato;
      }

      /**
       * Set the value of formato
       */
      public function setFormato(array $formato): void
      {
            $this->formato = $formato;

      }
    }
    

?>