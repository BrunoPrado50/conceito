<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe</title>
</head>
<body>
    <?php 
    
    class Animal {
        //Atributos
        public $nome;
        public $cor;

        //METODO CONSTRUTOR
        public function __construct($nome,$cor)
        {
            $this->nome = $nome;
            $this->cor = $cor;
        }

        //Metodos/Funções
        public function emitirSom(){
            return " O {$this->nome} de cor {$this->cor} faz um som... ";
        }
    }
    //Objeto
    $cachorro = new Animal("Bob","caramelo");
    $gato = new Animal("Layla","branquela");
    $galo = new Animal("cocó","branco");
    $cachorro1 = new Animal("Nina","marrom");
    echo $cachorro->emitirSom() ;
    echo $gato->emitirSom() ;
    echo $galo->emitirSom();
    echo $cachorro1->emitirSom();

    ?>
</body>
</html>