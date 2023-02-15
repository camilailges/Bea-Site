<?php
    include("././acoes/conexao.php");

    if(isset($_POST["senha"]) && $mysqli != null){
        $senha = $mysqli->real_escape_string($_POST['senha']);
        $sql_code = "SELECT * FROM chave WHERE senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) { 
            $usuario = $sql_query->fetch_assoc();
            print_r($usuario);
            echo "funfou";
        }else{
            echo "nao funfou";
        }
    }else{
        echo "nao tem post";
    }

    if(isset($_POST["salvarfoto"])){ //salvarfoto?
        $arquivo = $_FILES['files']['name'];

        // $arquivo = explode(".",$arquivo["name"]);

        $allowed = array('gif', 'png', 'jpg', 'jpeg');
        $ext = pathinfo($arquivo, PATHINFO_EXTENSION);
        if (in_array($ext, $allowed)) {
            echo "Voce nao pode fazer upload desse tipo de arquivo";
        }else{
            echo "pode continuar..";
        }
        // if($arquivo[sizeof($arquivo)-1] != "jpg"){
        //     die("Voce nao pode fazer upload desse tipo de arquivo");
        // }else{
        //     echo "pode continuar..";
        // }
        // || $arquivo[sizeof($arquivo)-1] != "jpeg"
    }
?>

<html>
    <main>
        <div name="obras">
            <h1>Obras</h1>
        </div>
            <h2>Oi</h2>
            <form name="cad_novafoto" method="POST" action="" enctype="multipart/form-data">
                <input type="file" name="nova_foto" id="nova_foto"><br><br>
                <input type="submit" value="Salvar" name="salvarfoto"><br><br>
                <input type="password" name="senha"><br><br>
                <input type="submit" value="Entrar" name="salvarSenha"><br><br>
            </form>
    </main>
</html>