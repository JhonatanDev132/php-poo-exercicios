<?php
require_once "Tecnico.php";

final class Didatico extends Tecnico{
    private string $disciplina;
    private $nivel = array("Básico", "Médio", "Superior");

    // ----------------------------------------------------------------
    
    public function setDisciplina(string $disciplina): void{
        $this->disciplina = $disciplina;
    }

    public function getDisciplina(): string{
        return $this->disciplina;
    }

    // ----------------------------------------------------------------
    
    public function setNivel($nivel): void{
        $this->nivel = $nivel;
    }

    public function getNivel(): array{
        return $this->nivel;
    }
    

    
}
?>