<?php
    
    require_once 'livros.php';
    require_once 'livrosView.php';

    class livroController{
        //Criar uma propriedadeprivada chamada $model
        //|Ela será usada para armazenaruma instancia da classe aluno.
        private $model;

        //Criar um método constructor da classe, ele é chamado automaticamente quando um objeto é criado.
        public function __construct()
        {
            //criar uma nova instancia da classe aluno, e armazenar na propriedade $model
            $this->model= new Livro();
        }

        //Método público chamado listar.
        // Serve para buscar a lista de alunos e passar para o view.
        public function listar(){
            //chama o método listarAluno() do modelo e armazena na variável $alunos.
            $livros = $this->model->listarLivros();
            // chama a função exibir alunos e envia a lista para mostrar no navegador.

            exibirLivros($livros);
        }
    }

    //execução do codigo
    //aqui fora da classe é criado um objeto do tipo AlunoController();
    $controler = new livroController();
    // Após criar o Objeto, é chamado o método  listar();
    $controler->listar();


?>