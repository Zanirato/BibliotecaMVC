<?php

    class Livro{
        private $livros = [
            ['nome' => 'Sherlock Holmes - O Signo dos Quatro', 'autor' => 'Sir Arthur Conan Doyle', 'ano' => 1890, ''],
            ['nome' => 'Crime e Castigo', 'autor' => 'Fyodor Dostoevsky', 'ano' => 1866],            ['nome' => 'O Corvo', 'autor' => 'Edgar Allan Poe', 'ano' => 1845],
            ['nome' => 'A Metamorfose', 'autor' => 'Franz Kafka', 'ano' => 1915],
            ['nome' => 'Não Mais Humano', 'autor' => 'Osamu Dazai', 'ano' => 1948],
        ];


        //Define um método público chamado listarAlunos
        //Esse método serve para "retornar" o conteúdo do array $alunos

        public function listarLivros(){
            return $this->livros;
        }
    }

?>