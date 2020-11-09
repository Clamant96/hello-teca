<?php 

require 'services/verifica.php';

if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])):

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Teca</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <div id="container">

        <!-- HEADER -->
        <header id="header">
            <div id="img">
                <img src="img/helloteca-logo-white.png">
            </div>
            <nav>
                <ul>
                    <a href="#"><li>Planos</li></a>
                    <a href="#"><li>Ajuda</li></a>
                    <a href="#"><li>Baixar</li></a>
                    <a href="#"><li>Criar</li></a>
                    |
                    <a href="#"><li>Inscrever-se</li></a>
                    <a href="#"><li>Login</li></a>
                </ul>
            </nav>
        </header>

        <!-- SECTION -->
        <section id="sectionOne">
            <div id="texto">
                <div id="img">
                    <img src="img/helloteca-logo-white-home.png">

                    <div id="button">
                        <button>
                            Baixe o Hello!Teca Free
                        </button>
                    </div>

                </div>
                <div id="imgReticulo">
                    <img src="img/irregular-form1.png">
                    <p>A sua plataforma digital interativa de livros e quadrinhos. Leia livros, revistas, HQ`s, mangás, light novels e muito mais!</p>
                    <img id="dimesao" src="img/irregular-form2.png">
                </div>
            </div>
            <div id="search">
                <div id="botaoSearch">
                    <input type="search" value="" placeholder="Pesquisar">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                    </svg>
                </div>
            </div>
            <div id="mouse">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-mouse" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 3a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 3zm4 8V5a4 4 0 0 0-8 0v6a4 4 0 0 0 8 0zM8 0a5 5 0 0 0-5 5v6a5 5 0 0 0 10 0V5a5 5 0 0 0-5-5z"/>
                </svg>
            </div>
        </section>

        <section id="sectionTwo">
            <div id="menuProdutos">
                <h1>Principais Destaques</h1>
            </div>
            <div id="produtosPage">
                <div id="produto">
                    <img src="img/Repetição de grade 8.png">
                    <div id="buttonProduto">
                        <a href="#">
                            <button>Ver</button>
                        </a>
                    </div>
                </div>
                <div id="produto">
                    <img src="img/Repetição de grade 7.png">
                    <div id="buttonProduto">
                        <a href="#">
                            <button>Ver</button>
                        </a>
                    </div>
                </div>
                <div id="produto">
                    <img src="img/Repetição de grade 6.png">
                    <div id="buttonProduto">
                        <a href="#">
                            <button>Ver</button>
                        </a>
                    </div>
                </div>
                <div id="produto">
                    <img src="img/Repetição de grade 9.png">
                    <div id="buttonProduto">
                        <a href="#">
                            <button>Ver</button>
                        </a>
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

else: header("Location: services/login.php"); endif;

?>