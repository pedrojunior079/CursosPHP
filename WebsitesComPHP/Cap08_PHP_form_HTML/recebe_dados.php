<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
        
        $username = $_POST["username"];
        $senha = $_POST["senha"];
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $erro=0;
        if(strlen($username)<5)
        { echo "O username deve possuir no mínimo 5 caracteres.<br>"; $erro=1; }
        if(strlen($senha)<5)
        { echo "A senha deve possuir no mínimo 5 caracteres.<br>"; $erro=1; }
        if($username == $senha)
        { echo "O username e a senha devem ser diferentes.<br>"; $erro=1; }
        if(empty($nome) OR strstr($nome, ' ')==FALSE)
        { echo "Favor digite seu nome corretamente.<br>"; $erro=1; }
        if(strlen($email)<8 || strstr($email, '@')==FALSE)
        { echo "Favor digitar seu email corretamente.<br>"; $erro=1;}
        if(empty($cidade))
        { echo "Favor digitar sua cidade.<br>"; $erro=1; }
        if(strlen($estado)!=2)
        { echo "Favor digite seu estado corretamente.<br>"; $erro=1; }
        if($erro==0)
        { echo "Todos os dados foram digitados corretamente!"; }
        

    ?>
</body>
</html>
