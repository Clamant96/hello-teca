<?php 

require 'verifica.php';

if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])):

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Teca - Gerenciar</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/styleAcesso.css"> 
    <link rel="stylesheet" href="../css/styleGerencia.css">  

</head>
<body>
    <div id="container">

        <!-- HEADER -->
        <header id="header">
            <a href="../indexCadastro.php">
                <div id="img">
                    <img src="../img/helloteca-logo-white.png">
                </div>
            </a>
            <nav>
                <ul>
                    <a href="../indexCadastro.php"><li>Inicio</li></a>
                    <a href="#"><li>Planos</li></a>
                    <a href="#"><li>Ajuda</li></a>
                    <a href="#"><li>Baixar</li></a>
                    <a href="#"><li>Criar</li></a>
                    |
                    <a href="cadastro.php"><li><?php echo $nomeUser; ?></li></a>
                    <?php 
                        if($situacaolUser == 2){
                            echo "<a href=\"listandoProdutos.php\">Produtos</a> |";

                        }
                                
                    ?>
                    <!-- <a href="services/login.php"><li>Inscrever-se</li></a> -->
                    <a href="logout.php"><li>Logout</li></a>
                </ul>
            </nav>
        </header>

        <!-- LISTANDO USUARIOS -->
        <div id="gerenciar">
            <div id="dados">
                <div id="tabela">
                    <div id="colunas">
                        <p>Nome de usuario</p>
                    </div>
                    <div id="colunas">
                        <p>E-mail</p>
                    </div>
                    <div id="colunas">
                        <p>Senha</p>
                    </div>
                    <div id="colunas">
                        <p>Gerenciar</p>
                    </div>
                </div>
                <?php 
                  require_once 'conectarBanco.php';
                  $sql = "SELECT * FROM usuario";
                      if ($result = $mysqli->query($sql)) {
                          while ($row = $result->fetch_assoc()) {
                              echo"
                                  <div id=\"linhas\">
                                      <div id=\"colunas\">
                                          <a href='UsuarioExcluirOk.php?id=" . $row["idusuario"] . "'>
                                              <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-trash-fill\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                                  <path fill-rule=\"evenodd\" d=\"M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z\"/>
                                              </svg>
                                          </a>
                                          <p>". $row["nome"] ." ". $row["sobrenome"] ."</p>
                                      </div>
                                      <div id=\"colunas\">
                                          <p>". $row["email"] ."</p>
                                      </div>
                                      <div id=\"colunas\">
                                          <p>". $row["senha"] ."</p>
                                      </div>
                                      <div id=\"colunas\">
                                          <div id=\"gerenciar\">
                                              <a href='usuarioAlterar.php?id=" . $row["idusuario"] . "'>
                                                  <p>Alterar</p>
                                              </a>
                                          </div>
                                      </div>
                                  </div>
                                ";
                          }

                          $result->free_result();
                      }
                    $mysqli->close();
                  ?>
            </div>
            <div id="ger">
                <a href="usuarioIncluir.php">
                    <p>Incluir</p>
                </a>
            </div>
        </div>

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
    
</body>
</html>

<?php 

else: header("Location: login.php"); endif;

?>