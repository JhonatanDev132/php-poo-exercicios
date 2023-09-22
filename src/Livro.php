<?php
class Livro{

    // Primeiro adicionar as propriedades antes de fazer as propriedades
    private string $titulo;
    private string $autor;
    private int $paginas = 0;


   // SET_TITULO

   public function setTitulo(string $titulo): self
   {
       $this->titulo = $titulo;
       
       return $this;
    }

    // GET_TITULO

    public function getTitulo(): string
    {
        return $this->titulo;
    }
    
   // SET_AUTOR
   
   public function setAutor(string $autor): self
   {
       $this->autor = $autor;
       
       return $this;
    }
   

    // GET_AUTOR

    public function getAutor(): string
    {
        return $this->autor;
    }
    
    
    // SET_PAGINAS
   
   public function setPaginas(int $paginas): self
    {
       $this->paginas = $paginas;
       
       return $this;
    }

    // GET_PAGINAS
    public function getPaginas(): int
    {
        return $this->paginas;
    }
}
?>