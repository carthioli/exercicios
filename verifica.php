<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Verifica</title>
</head>
<body>

        <fieldset><legend>Contato</legend>
            <form method="post" action="verifica.php">
                Login: <input type="text" name="login"></br></br>
                Senha: <input type="text" name="senha"></br></br>
                       <input type="submit" value="acessar">
            </form>
        </fieldset>

        <?php


             if ( array_key_exists( 'login', $_POST) ) {

                 $login = $_POST['login'];
                 $senha = $_POST['senha'];

                 if ($login == 'carlos' && $senha == '12345') {
                     echo "Carregando";

                 } else {
                     echo "Login ou senha invalida";
                 }
             }

        ?>

</body>
</html>