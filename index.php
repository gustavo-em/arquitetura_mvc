<?php
class Model{
    public function trazer_dados(){
        return array(
            'nome' => 'Gustavo',
            'idade' => '21'
        );
    }
}

class Controller{
    public function validar(){
        $objeto_model = new Model;
        $dados = $objeto_model->trazer_dados();

        if ($_POST['input'] == 'f') {
            return array(
                'Matheus',
                'Rodrigo',
                'Carlos'
            );
        }

        if($dados['nome'] == 'Gustavo'){
            return array(
                'Gustavo',
                'Guilherme',
                'Henrrique'
            );
        }


    }
}
?>



<?php

$controller = new Controller;
$dados_do_controller = $controller->validar();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>

    <h1 class='test'>Titulo</h1>

    <ul>
        <?php 
        foreach($dados_do_controller as $dados){
            echo '<li>'.$dados.'</li>';
        }

        ?>
    </ul>


    <form action="" method="post">
        <input type="text" name="input" id="input">
        <button type="submit" value="">MANDAR POST</button>
    </form>

    <?php
    if($_POST['input']){
        echo $_POST['input'];
    }
    ?>
</body>
</html>