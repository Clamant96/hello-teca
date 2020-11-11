<?php 

//require 'services/verifica.php';

//if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])):

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Teca - Criar</title>
    <link rel="stylesheet" href="css/styleCriar.css">

</head>
<body>
    <div id="container">

        <!-- HEADER -->
        <header id="header">
            <a href="index.php">
                <div id="img">
                    <img src="img/helloteca-logo-white.png">
                </div>
            </a>
            <nav>
                <ul>
                    <a href="planos.php"><li>Planos</li></a>
                    <a href="services/login.php"><li>Ajuda</li></a>
                    <a href="baixar.php"><li>Baixar</li></a>
                    <a href="services/login.php"><li>Criar</li></a>
                    |
                    <!--<a href="#"><li><?php echo $nomeUser; ?></li></a>-->
                    <?php /*
                        if($situacaolUser == 2){
                            echo "<a href=\"services\listandoItens.php\">Usuarios</a> <a href=\"services\listandoProdutos.php\">Produtos</a> |";

                        }
                         */       
                    ?>
                    <a href="services/cadastro.php"><li>Inscrever-se</li></a>
                    <a href="services/login.php"><li>Login</li></a>
                </ul>
            </nav>
        </header>

        <!-- SECTION -->
        <section id="sectionOne">
            <div id="blocoConteudo">
                <h1>Comece a criar</h1>
                <div id="compartilharObras">
                    <div id="img">
                        <div id="controleSvg">
                            <p>Insira a imagem</p>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-image" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9c0 .013 0 .027.002.04V12l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094L15 9.499V3.5a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm4.502 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                            </svg>
                        </div>
                        <div id="texto">
                            <p>Compartilhe suas obras e inspire outras pessoas. Você sempre poderá voltas e editar suas postagens.</p>
                            <input type="text" placeholder="Titulo">
                        </div>
                    </div>
                    <div id="descricao">
                        <input type="text" placeholder="Texto">
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <section id="footer">
            <div id="footerLogo">
                <img src="img/helloteca-logo-white.png">
                <div id="social">
                    <img src="img/twitter-icon.png">
                    <img src="img/instagram-icon.png">
                    <img src="img/youtube-icon.png">
                    <img src="img/facebook-icon.png">
                </div>
            </div>
            <div id="footerMenu">
                <nav>
                    <ul>
                        <a href="#"><p>Começar</p></a>
                        <a href="#"><li>Baixar</li></a>
                        <a href="#"><li>Criar</li></a>
                    </ul>
                </nav>
                <nav>
                    <ul>
                        <a href="#"><p>Conta</p></a>
                        <a href="#"><li>Planos</li></a>
                        <a href="#"><li>Inscrever-se</li></a>
                    </ul>
                </nav>
                <nav>
                    <ul>
                        <a href="#"><p>Links Uteis</p></a>
                        <a href="#"><li>Ajuda</li></a>
                        <a href="#"><li>Planos</li></a>
                    </ul>
                </nav>
            </div>
        </section>

        <footer id="footerLicenca">
            <nav>
                <ul>
                    <li>Legal</li>
                    <li>Centro de Privacidade</li>
                    <li>Políticas de Privacidade</li>
                    <li>Cookies</li>
                    <li>Sobre Anúncios</li>
                </ul>
                <div id="copyright">
                    <p>Brasil</p>
                    <p>©2020 Hello!Teca</p>
                </div>
            </nav>
        </footer>

    </div>
    
    <script src="js/javaScript.js"></script>
</body>
</html>

<?php 

//  else: header("Location: services/login.php"); endif;

?>