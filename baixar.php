<?php 

//require 'services/verifica.php';

//if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])):

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Teca</title>
    <link rel="stylesheet" href="css/styleBaixar.css">

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
                    <a href="index.php"><li>Inicio</li></a>
                    <a href="services/login.php"><li>Ajuda</li></a>
                    <a href="#"><li>Baixar</li></a>
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
            <div id="texto">
                <div id="forma">
                    <h1>Clique no arquivo de instalação para finalizar</h1>
                    <img src="img/formato_retagular.png">
                    <p>Se o download não tiver começado, <a href="#">tente novamente.</a></p>
                    <p>Não deu certo? Baixe pelo <a href="#">Microsoft Store</a></p>
                </div>
                <!-- <div id="imgReticulo">
                    <img src="img/irregular-form1.png">
                    <div id="conteudoBanner">
                        <div id="logoBanner">
                            <h1>Hello!Teca</h1><p>Premium</p>
                        </div>
                        <div id="promocaoBanner">
                            <h1>30 dias grátis</h1><p>A partir daí, R$24,99/mês</p><p>Cancele a qualquer momento*</p>
                        </div>
                        <img id="forma" src="img/formato_triamgular.png">
                    </div>
                    <img id="dimesao" src="img/irregular-form2.png">
                </div> -->
            </div>
            <!-- <div id="mouse">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-mouse" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 3a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 3zm4 8V5a4 4 0 0 0-8 0v6a4 4 0 0 0 8 0zM8 0a5 5 0 0 0-5 5v6a5 5 0 0 0 10 0V5a5 5 0 0 0-5-5z"/>
                </svg>
            </div> -->
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