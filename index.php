<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio1_POO</title>
    <link rel="stylesheet" href="css/hp.css">
</head>
<body>
    <h1>Exercicio 1 | Utilizando POO no PHP</h1>

    <?php
        require_once "src/Livro.php";


        $livro1 = new Livro;

        $livro1->setTitulo("Harry Potter: E o Cálice de Fogo");
        $livro1->setAutor("J.K Rowling");
        $livro1->setPaginas(636);
    ?>

    <h2>Livro que estou lendo atualmente:</h2>

    <div>
    <h3><?=$livro1->getTitulo()?></h3>
    <p style="font-size: 13px;"><i>Criado por <?=$livro1->getAutor()?></i></caption>

    <p>Número de páginas: <?=$livro1->getPaginas()?></p>

    <p>
        Apesar de a escritora não possuir um bom histórico nas mídias a fora, nós temos que Harray potter foi o maior feito que ela consigou fazer entre suas obras fazendo ele ser o livro de bruxos mais famoso do mundo.
    </p>
    </div>

    <pre><?=var_dump($livro1)?></pre>

</body>
</html>