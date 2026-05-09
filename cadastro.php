<?php
  if(isset($_POST['submit']))
  {
    // print_r($_POST["usuario"]);
    // print_r('<br>');
    // print_r($_POST["email"]);
    // print_r('<br>');
    // print_r($_POST["data"]);
    // print_r('<br>');
    // print_r($_POST["senha"]);
    
    include_once('config.php');

    $usuario = $_POST['nome'];
    $email = $_POST['email']; 
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO fiction(nome,email,senha) 
    VALUES('$usuario','$email','$senha')");

    // header('Location: login.php');
  }
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Fiction Corpoartion</title>
    <!-- RODAPE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet">
    <!-- ICONS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/c0ae4bbcc8.js" crossorigin="anonymous"></script>
    <!-- SLIDES -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <!-- FONT WEASOM -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

</head>

<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    height: 100%;
    width: 100%;
    margin: 0;
    overflow-x: hidden;
    background-color: grey;
}
.amoocecon{
    display: flex;
    justify-content: center;
    z-index: -1;
}
.w50 {
    width: 50%;
    float: left;
    padding-right: 15px;
}

.box {
    display: flex;
    width: 930px;
    justify-content: center; 
}

.img-box {
    background-color: rgba(255, 255, 255, 0.5);
    width: 50%;
    display: flex;
    align-items: center;
    padding: 20px;
    border-radius: 20px 0 0 20px;
}

.img-box img {
    width: 100%;
}

.form-box {
    background-color: rgba(255, 255, 255, 0.4);
    backdrop-filter: blur(40px);
    padding: 30px 40px;
    width: 50%;
    border-radius: 0 20px 20px 0;
}

.form-box h2 {
    font-size: 30px;
}

.form-box p {
    font-weight: bold;
    color: #3D3D3D;
}

.form-box p a {
    color: white;
    text-decoration: none;
}

.form-box form {
    margin: 20px 0;
}

form .input-group {
    margin-bottom: 15px;
}

form .input-group label {
    color: #3D3D3D;
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
}

form .input-group input {
    width: 100%;
    height: 47px;
    background-color: rgba(255, 255, 255, 0.32);
    border-radius: 20px;
    outline: none;
    border: 2px solid transparent;
    padding: 15px;
    font-size: 15px;
    color: #616161;
    transition: all 0.4s ease;
}

form .input-group input:focus {
    border-color: grey;
}

form .input-group button {
    width: 100%;
    height: 47px;
    background: grey;
    border-radius: 20px;
    outline: none;
    border: none;
    margin-top: 15px;
    color: white;
    cursor: pointer;
    font-size: 16px;
}

@media (max-width:930px) {
    .img-box {
        display: none;
    }

    .box {
        width: 700px;
    }

    .form-box {
        width: 100%;
        border-radius: 20px;
    }
}

@media (max-width:500px) {
    .w50 {
        width: 100%;
        padding: 0;
    }
}
header {
    position: absolute;
    width: 100%;
}

header a {
    color: white;
    text-decoration: none;
    transition: 0.3s;
}

header a:hover {
    opacity: 0.7;
    color: black;
}

header .logo {
    font-size: 24px;
    text-transform: uppercase;
    letter-spacing: 4px;
}

header nav {
    display: flex;
    justify-content: space-around;
    align-items: center;
    font-family: system-ui, -apple-system, Helvetica, Arial, sans-serif;
    height: 8vh;
}

header main {
    background: url("bg.jpg") no-repeat center center;
    background-size: cover;
    height: 92vh;
}

.nav-list {
    list-style: none;
    display: flex;
}

.nav-list li {
    letter-spacing: 3px;
    margin-left: 32px;
}

.mobile-menu {
    display: none;
    cursor: pointer;
}

.mobile-menu div {
    width: 32px;
    height: 2px;
    background: #fff;
    margin: 8px;
    transition: 0.3s;
}

@media (max-width: 999px) {
    header .logo {
        max-width: 60px;
        padding-right: 0px;
    }

    header .navigation {
        position: relative;
        display: hidden;
        width: 100%;
        height: 100%;
    }

    header .navigation li a {
        font-size: 1.5em;
        margin: 5px;
    }

    .toggle {
        position: relative;
        right: 0px;
        top: 0px;
        width: 30px;
        height: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        cursor: pointer;
        background: url(images/menu.png);
        background-size: 30px;
        background-position: center;
        background-repeat: no-repeat;
        filter: invert(1);
        transition: all 0.15s ease-in-out;
        z-index: 100;
    }

    .toggle.active {
        position: fixed;
        right: 20px;
        background: url(images/close.png);
        background-size: 25px;
        background-position: center;
        background-repeat: no-repeat;
        z-index: 11;
    }

    header .navigation.active {
        position: absolute;
        display: flex;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        background: #fff;
        z-index: 10;
    }

    .navigation ul {
        width: 100%;
    }

    .navigation ul li {
        width: 100%;
        text-align: center;
    }

    .navigationul li a {
        display: inline-block;
        font-size: 36px;
        color: #fff;
        text-transform: uppercase;
    }

    .nav-list {
        display: none;
        position: absolute;
        top: 8vh;
        right: 0;
        width: 50vw;
        height: 92vh;
        background: grey;
        flex-direction: column;
        align-items: center;
        justify-content: space-around;
        transform: translateX(100%);
        transition: transform 0.3s ease-in;
        z-index: 20;
        margin-top: 10px;
    }

    .nav-list li {
        margin-left: 0;
        opacity: 0;
    }

    .mobile-menu {
        display: block;
    }

    .nav-list.active {
        transform: translateX(0);
        display: flex;
    }

    html {
        overflow-x: hidden;
    }

    body {
        overflow-x: hidden;
    }
}

@keyframes navLinkFade {
    from {
        opacity: 0;
        transform: translateX(50px);
    }

    to {
        opacity: 1;
        transform: translateX(0);
    }
}

.mobile-menu.active .line1 {
    transform: rotate(-45deg) translate(-8px, 8px);
}

.mobile-menu.active .line2 {
    opacity: 0;
}

.mobile-menu.active .line3 {
    transform: rotate(45deg) translate(-5px, -7px);
}
.footer {
    background: black;
    padding: 30px 0px;
    font-family: 'Play', sans-serif;
    text-align: center;
}

.footer .row {
    width: 100%;
    margin: 1% 0%;
    padding: 0.6% 0%;
    color: white;
    font-size: 0.8em;
}

.footer .row a {
    text-decoration: none;
    color: white;
    transition: 0.5s;
}

.footer .row a:hover {
    color: white;
}

.footer .row ul {
    width: 100%;
}

.footer .row ul li {
    display: inline-block;
    margin: 0px 30px;
}

.footer .row a i {
    font-size: 2em;
    margin: 0% 1%;
}

@media (max-width:999px) {
    .footer {
        text-align: left;
        padding: 5%;
    }

    .footer .row ul li {
        display: block;
        margin: 10px 0px;
        text-align: left;
    }

    .footer .row a i {
        margin: 0% 3%;
    }
}
</style>
    <!-- HEADER -->
    <header>
    
        <nav>
            <a class="logo" href="#"></a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list">
                <li><a href="index.html">Início</a></li>
                <li><a href="login.php">Sobre</a></li>
                <li><a href="login.php">Estúdio</a></li>
                <li><a href="login.php">Contato</a></li>
            </ul>
        </nav>
    
    </header>
    <br><br><br>
    <div class="amoocecon">
        <div class="box">
        <div class="img-box">
            <img src="img/login.png">
        </div>
        <div class="form-box">
            <h2>Criar Conta</h2>
            <p> Já é um membro? <a href="login.php"> Login </a> </p>
            <form action="cadastro.php" method="POST">
                <div class="input-group">
                    <label for="nome"> Nome Completo</label>
                    <input type="text" name="nome" id="nome" placeholder="Digite o seu nome completo" required>
                </div>

                <div class="input-group">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" placeholder="Digite o seu email" required>
                </div>

                <div class="input-group">
                    <label for="telefone">Telefone</label>
                    <input type="tel" id="telefone" placeholder="Digite o seu telefone" required>
                </div>

                <div class="input-group w50">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
                </div>

                <div class="input-group w50">
                    <label for="Confirmarsenha">Confirmar Senha</label>
                    <input type="password" id="Confirmarsenha" placeholder="Confirme a senha" required>
                </div>

                <div class="input-group">
                    <input type="submit" name="submit" id="submit" value="Entrar" class="submit">
                </div>

            </form>
        </div>
    </div>
    </div>
    
<!-- FOOTER -->

<footer>
    <div class="footer">
        <div class="row">
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
        </div>

        <div class="row">
            <ul>
                <li><a href="https://policies.google.com/privacy?hl=pt-BR"> Políticas de Privacidade</a></li>
                <li><a href="https://policies.google.com/terms?hl=pt-BR">Termos de Serviços</a></li>
            </ul>
        </div>

        <div class="row">
            FICTION Copyright © 2023 Fiction Corporation - Todos Direitos Reservados || Designed Por: Cecon
        </div>
    </div>
</footer>

</body>

</html>