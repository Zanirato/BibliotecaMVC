<?php

function exibirLivros($livros){
    // Imprime na tela um titulo h2 e abre uma lista não ordenada ul.
    echo "<h2> Lista de Livros: </h2> <ul>";

    foreach ($livros as $livro ){
        echo "<li> {$livro['nome']} ( {$livro['ano']} ) de {$livro['autor']}. </li>";
    }
    echo "</ul>";
}

?>