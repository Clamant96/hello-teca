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
    <link rel="stylesheet" href="../css/stylePlanos.css">

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
                    <a href="baixarLogin.php"><li>Baixar</li></a>
                    <a href="../criar.php"><li>Criar</li></a>
                    |
                    <a href="#"><li><?php echo $nomeUser; ?></li></a>
                    <?php 
                        if($situacaolUser == 2){
                            echo "<a href=\"listandoItens.php\">Usuarios</a> <a href=\"listandoProdutos.php\">Produtos</a> |";

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
                <!-- <div id="img">
                    <img src="img/helloteca-logo-white-home.png">

                    <div id="button">
                        <button>
                            Baixe o Hello!Teca Free
                        </button>
                    </div>

                </div> -->
                <div id="button">
                        <button>
                            Baixe o Hello!Teca Free
                        </button>
                    </div>
                <div id="imgReticulo">
                    <img src="../img/irregular-form1.png">
                    <div id="conteudoBanner">
                        <div id="logoBanner">
                            <h1>Hello!Teca</h1><p>Premium</p>
                        </div>
                        <div id="promocaoBanner">
                            <h1>30 dias grátis</h1><p>A partir daí, R$24,99/mês</p><p>Cancele a qualquer momento*</p>
                        </div>
                        <img id="forma" src="../img/formato_triamgular.png">
                    </div>
                    <!-- <p>A sua plataforma digital interativa de livros e quadrinhos. Leia livros, revistas, HQ`s, mangás, light novels e muito mais!</p> -->
                    <img id="dimesao" src="../img/irregular-form2.png">
                </div>
            </div>
            <!-- <div id="search">
                <div id="botaoSearch">
                    <input type="search" value="" placeholder="Pesquisar">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                    </svg>
                </div>
            </div> -->
            <div id="mouse">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-mouse" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 3a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 3zm4 8V5a4 4 0 0 0-8 0v6a4 4 0 0 0 8 0zM8 0a5 5 0 0 0-5 5v6a5 5 0 0 0 10 0V5a5 5 0 0 0-5-5z"/>
                </svg>
            </div>
        </section>

        <section id="sectionTwo">
            <div id="menuProdutos">
                <h1>Leia sem limites</h1>
            </div>
            <div id="produtosPage">
                <?php 
                    require_once 'conectarBanco.php';
                    $sql = "SELECT * FROM promocao";
                    if ($result = $mysqli->query($sql)) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div id=\"produto\"> 
                                <div id=\"plano\"> 
                                    <h1>". $row["titulo"] ."</h1>
                                    <p>". $row["descricao"] . "</p>
                                    <p>R$ ". $row["preco"] ." / mês</p>
                                    <h2>* Apenas ". $row["qtdconta"] ." conta</h2>
                                </div>
                                <div id=\"buttonProduto\">
                                    <a href=\"../indexCadastro.php\">
                                        <button>Começar</button>
                                    </a>
                                </div>

                            </div>
                            ";
                        }

                        $result->free_result();
                    }
                    $mysqli->close();
                    ?>
                <!-- <div id="produto">
                    <div id="plano">
                        <h1>Premium</h1>
                        <p>Leitura online e off-line</p>
                        <p>Download de inúmeros títulos</p>
                        <p>Acesso a fóruns de discussão</p>
                        <p>Compartilhamento de conteúdo</p>
                        <p>R$ 24,99/mês</p>
                        <h2>* Até 2 contas</h2>
                    </div>
                    
                    <div id="buttonProduto">
                        <a href="services/login.php">
                            <button>Ver</button>
                        </a>
                    </div>
                </div>
                <div id="produto">
                    <div id="plano">
                        <h1>Estudante</h1>
                        <p>Leitura online e off-line</p>
                        <p>Download de inúmeros títulos</p>
                        <p>Acesso a fóruns de discussões</p>
                        <p>Compartilhamento de conteúdo</p>
                        <p>* Desconto especial de 50% para universitários</p>
                        <p>R$ 12,49/mês</p>
                        <h2>* Apenas 1 conta</h2>
                    </div>
                    
                    <div id="buttonProduto">
                        <a href="services/login.php">
                            <button>Ver</button>
                        </a>
                    </div>
                </div> -->
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