<!DOCTYPE html>
<html>
    <head>
        <title>
            Pesquisar
        </title>
    </head>
    <body>
        <?php
        $loginComSucesso = False;
        $login = $_POST["nomeDoUsuario"];
        $senha = $_POST["senhaDoUsuario"];
    
        $nomeValidoDeUsuario="aluno1";
        $senhaValidaDeUsuario=123;

        echo "<script> alert('".$login."')</script>";
        echo "<script> alert('".$senha."')</script>";

        if($login==$nomeValidoDeUsuario && $senha == $senhaValidaDeUsuario){$loginComSucesso = true;}
    echo "alert('$loginComSucesso<br>')";
    echo $loginComSucesso;
    echo $loginComSucesso;

    if($loginComSucesso==false){
        echo "<script>alert('".$loginComSucesso."')</script>";
        echo "<script>alert('$loginComSucesso era falso convertido como string vazia e login falhou')</script>";
    }else{
        echo "<script>alert('".$loginComSucesso."')</script>";
        echo "<script>alert('Ou seja, Login com Sucesso')</script>";
    }
    ?>
    </body>
</html>