<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../../imagens/3944hg.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../../style.css">
    <title>Comunidade/Login</title>
    <style>
        h1{
            text-align: center;
            color: #8b8b8b;
        }
        .sec{
            text-align: center;
            margin-top: 110px;
        }
     
        form input{
           
            border-color: #8b8b8b;
            border-width: 1px;
            width: 650px;
            height: 30px;
        }
        .sub{
            width: 180px;
            height: 50px;
            background-color: #00C9FF;
            color: white;
            border: none;
            font-size: 22px;
            text-transform: uppercase;

        }
        .sub:hover{
            background-color: #8b8b8b;
            color: white;

        }
        a{
            color:#00C9FF;
        }
        a:hover{
            color:#8b8b8b;
        }
    </style>
</head>

<body onload="preCarregamento();">
  
    <header class="cabeçalho1">
        <div class="header">
            <main>
                <div class="logo">
                <img src="../../../imagens/hg.png" alt="Logo do Jogo" height="60px" width="70px">
                </div>
                <nav>
                        <a href="https://chat.whatsapp.com/D4GHmGO4XqPA8taYAHUGel" target="_blank" rel="external">
                            <img src="../../../imagens/whatsapp.png" height="35px" width="35px">
                        </a>

                        <a href="https://web.facebook.com/pedropaulo.brambila.9/" target="_blank" rel="external">
                            <img src="../../../imagens/facebook.png" height="40px" width="40px">
                        </a>

                        <a href="https://www.instagram.com/animalummundo/" target="_blank" rel="external">
                            <img src="../../../imagens/instagram.png" height="35px" width="35px">
                        </a>
                </nav>
            </main>
        </div>
    </header>
    
    <header class="cabeçalho2">
      
            <div class="menu">
                <div class ="divisor-menu">
                    <ul>
                        <li> 
                            <a href="../../../../home.html" rel = "next" target="_self"> 
                                Inicio
                            </a>
                        </li>
                        <li> 
                            <a href="../../../personagens/personagens.html" rel = "next" target="_self"> 
                                Personagens
                            </a>
                        </li>
                        <li>
                            <a href="../../../artes/artes.html" rel = "next" target="_self">
                                Artes
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
    </header>
<br><br><br><br><br><br><br>
    <?php
    require 'bd/DataBase.php';
    require 'session.php';
    require 'post.php';

    $banco = new DataBase();
    $session= new Session();
    $post = new PosT();
    $sug = $post->get('txtconteudo');
    if($sug == '')
    {
        echo "<h1>Preencha o Campo de Sugestão</h1>";
    }
    else{
        $banco->Insert($sug,$session->get('cod'));
        echo "<h1>OBRIGADO!!</h1>";
        $session->destroy();
    }

    ?>

    
    </main>
    <br>
   

    <script src="app.js"></script>
</body>
</html>



