<?php 

require 'services/verifica.php';

if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])):

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
                    <a href="services/planosLogin.php"><li>Planos</li></a>
                    <a href="ajuda.php"><li>Ajuda</li></a>
                    <a href="services/baixarLogin.php"><li>Baixar</li></a>
                    <a href="#"><li>Criar</li></a>
                    |
                    <a href="#"><li><?php echo $nomeUser; ?></li></a>
                    <?php 
                        if($situacaolUser == 2){
                            echo "<a href=\"services\listandoItens.php\">Usuarios</a> <a href=\"services\listandoProdutos.php\">Produtos</a> |";

                        }
                             
                    ?>
                    <!-- <a href="services/login.php"><li>Inscrever-se</li></a> -->
                    <a href="services/logout.php"><li>Logout</li></a>
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
                            <div id="file">
                                <input type="file" placeholder="Escolher arquivo">
                            </div>
                        </div>
                        <div id="texto">
                            <p>Compartilhe suas obras e inspire outras pessoas. Você sempre poderá voltas e editar suas postagens.</p>
                            <input type="text" placeholder="Titulo">
                        </div>
                    </div>
                    <div id="descricao">
                        <textarea name="texto" placeholder="Texto" ></textarea>
                    </div>
                </div>
            </div>
            <div id="containerDocs">
                <div id="blocoConteudoDegrade">
                    <div id="opcoes">
                        <h1 id="cor">Conteúdos</h1>
                        <h1>Configurações</h1>
                    </div>
                    <div id="compartilharObras">
                        <div id="anexos">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-image" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M12 16a2 2 0 0 0 2-2V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8zM3 2a1 1 0 0 1 1-1h5.5v2A1.5 1.5 0 0 0 11 4.5h2V10l-2.083-2.083a.5.5 0 0 0-.76.063L8 11 5.835 9.7a.5.5 0 0 0-.611.076L3 12V2z"/>
                                <path fill-rule="evenodd" d="M6.502 7a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                            </svg>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"/>
                                <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z"/>
                                <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-font" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"/>
                                <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3zm1.443 3H5.057L5 8h.5c.18-1.096.356-1.192 1.694-1.235l.293-.01v5.09c0 .47-.1.582-.898.655v.5H9.41v-.5c-.803-.073-.903-.184-.903-.654V6.755l.298.01c1.338.043 1.514.14 1.694 1.235h.5l-.057-2z"/>
                            </svg>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-code" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"/>
                                <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z"/>
                                <path fill-rule="evenodd" d="M8.646 6.646a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 9 8.646 7.354a.5.5 0 0 1 0-.708zm-1.292 0a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0 0 .708l2 2a.5.5 0 0 0 .708-.708L5.707 9l1.647-1.646a.5.5 0 0 0 0-.708z"/>
                            </svg>
                            <svg id="compartilhar" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-share-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z"/>
                            </svg>
                        </div>
                        <div id="botao">
                            <button>Finalizar</button>
                        </div>
                    </div>
                </div>
                <div id="blocoConteudoDegrade">
                    <div id="opcoes">
                        <h1 id="cor">Galeria</h1>
                    </div>
                    <div id="compartilharObras">
                        <div id="anexos">
                            <img src="img/img_criar_1.jpeg">
                            <img src="img/img_criar_2.jpeg">
                        </div>
                        <!-- <div id="botao">
                            <button>Finalizar</button>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION -->
        <section id="sectionOne">
            <div id="blocoConteudoDetalhes">
                <div id="opcoes">
                    <h1 id="cor">Detalhes</h1>
                </div>
                <div id="compartilharObras">
                    <div id="perfil">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                            <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                        </svg>
                        <p>Nome</p>
                        <p>Sobrenome</p>
                    </div>
                    <div id="status">
                        <div id="statusPerfil">
                            <div id="contudoStatus">
                                <p>Criação</p>
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"/>
                                    <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z"/>
                                    <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                </svg>
                                <p>2</p>
                            </div>
                            <div id="contudoStatus">
                                <p>Curtidas</p>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                <p>52</p>
                            </div>
                            <div id="contudoStatus">
                                <p>Visualizações</p>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>  
                                <p>532</p>
                            </div>
                            <div id="contudoStatus">
                                <p>comentários</p>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15z"/>
                                    </svg> 
                                <p>354</p>
                            </div>
                        </div>
                        <div id="statusPerfil">
                            <div id="contudoStatus">
                                <p>Classificação</p>
                                <div id="conjuntoStar">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                </div>
                            </div>
                            <div id="contudoStatus">
                                <p>Vendas</p>
                                <h1>30</h1>
                                <h1>Exemplares</h1>

                            </div>
                        </div>
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