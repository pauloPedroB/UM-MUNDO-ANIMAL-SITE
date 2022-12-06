<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Principal</title>
    <style>
        h1{
            color: #8b8b8b;
            text-align: center;
        }
    </style>
</head>
<body>
<?php
    require 'session.php';
    require 'bd/DataBase.php';
    require 'post.php';
    
    $post = new PosT();
    $login = $post->get('user');
    $pass = $post->get('password');

    $session = new Session();
    $banco = new DataBase();
    if($banco->Select($login,$pass)[0]['count(1)'] == '0')
    {
        
        echo '<h1>Usuário não encontrado</h1>';
    }
    else if($banco->Select($login,$pass)[0]['count(1)'] == '1')
    {
        $session->set('user',$banco->Select($login,$pass)[0]['user']);
        $session->set('email',$banco->Select($login,$pass)[0]['email']);
        $session->set('cod',$banco->Select($login,$pass)[0]['cod']);
        include 'home.php';
    }
    else{
        echo '<h1>Algo Deu Errado</h1>';
    }
?>
</body>
</html>

 