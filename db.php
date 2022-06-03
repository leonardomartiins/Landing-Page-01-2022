<?php 
    	$id 	= $_GET["id"];
        $email = isset($_GET["id"])?$_GET["id"]:"";
        $email = isset($_GET["email"])?$_GET["email"]:"";
        $nome  = isset($_GET["nome"])?$_GET["nome"]:""  ;
        $senha = isset($_GET["senha"])?$_GET["senha"]:"";
        $acao  = $_GET["acao"];
    
        $servername = "localhost";
        $database	= "dadosusuario";
        $username	= "root";
        $password	= "";
    
        $conexao = mysqli_connect($servername, $username, $password, $database);

        if ($acao=="insert"){
            $sql = "INSERT into dadosusuario(email,nome,senha) values('{$email}','{$nome}','{$senha}')";
            mysqli_query($conexao,$sql);
            echo "Dados salvos com sucesso!";
        }else if ($acao=="update"){
            $sql = "UPDATE dadosusuario SET email='{$email}',nome='{$nome}',senha='{$senha}' where id={$id}";
            mysqli_query($conexao,$sql);
            echo "Dados atualizados com sucesso!";
        }
        mysqli_close($conexao);
?>