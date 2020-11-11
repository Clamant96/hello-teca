<?php 

require 'verifica.php';

if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])):

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Teca</title>
    <link rel="stylesheet" href="../css/stylebaixar.css">

</head>
<body>
    <div id="container">

        <!-- HEADER -->
        <header id="header">
            <a href="index.php">
                <div id="img">
                    <img src="../img/helloteca-logo-white.png">
                </div>
            </a>
            <nav>
                <ul>
                    <a href="../indexCadastro.php"><li>Inicio</li></a>
                    <a href="../ajuda.php"><li>Ajuda</li></a>
                    <a href="#"><li>Baixar</li></a>
                    <a href="login.php"><li>Criar</li></a>
                    |
                    <a href="#"><li><?php echo $nomeUser; ?></li></a>
                    <?php 
                        if($situacaolUser == 2){
                            echo "<a href=\"services\listandoItens.php\">Usuarios</a> <a href=\"services\listandoProdutos.php\">Produtos</a> |";

                        }
                             
                    ?>
                    <!-- <a href="services/login.php"><li>Inscrever-se</li></a> -->
                    <a href="logout.php"><li>Logout</li></a>
                </ul>
            </nav>
        </header>

        <!-- SECTION -->
        <section id="sectionOne">
            <div id="texto">
                <div id="forma">
                    <h1>Clique no arquivo de instalação para finalizar</h1>
                    <img src="../img/formato_retagular.png">
                    <p>Se o download não tiver começado, <a href="#">tente novamente.</a></p>
                    <p>Não deu certo? Baixe pelo <a href="#">Microsoft Store</a></p>
                </div>
        </section>

        <!-- FOOTER -->
        <section id="footer">
            <div id="footerLogo">
                <img src="../img/helloteca-logo-white.png">
                <div id="social">
                    <img src="../img/twitter-icon.png">
                    <img src="../img/instagram-icon.png">
                    <img src="../img/youtube-icon.png">
                    <img src="../img/facebook-icon.png">
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
    
    <script src="../js/javaScript.js"></script>
</body>
</html>

<?php 

else: header("Location: services/login.php"); endif;

?>