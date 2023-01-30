<?php
    include("conexao.php");

    if(isset($_POST["senha"]) && $conexao != null){
        $query = $conexao->prepare("SELECT * FROM chave WHERE senha = ?");
        $query->execute(array($_POST["senha"]));

        if($query->rowCount()){
            $user = $query->fetchAll(PDO::FETCH_ASSOC)[0];
            print_r($user);
            echo "funfou";
        }else{

        }
    }else{
        echo "nao tem post";
    }
?>