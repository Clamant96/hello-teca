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
        <div id="listar">
            <?php 
                require_once 'conectarBanco.php';
                $sql = "SELECT * FROM usuario";
                if ($result = $mysqli->query($sql)) {
                  while ($row = $result->fetch_assoc()) {
                    echo "<div id=\"cardPerfis\">
                            <div id=\"opcoes\">
                              <a href='usuarioAlterar.php?id=" . $row["idusuario"] . "'>
                                <svg id=\"edit\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-pen\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                  <path fill-rule=\"evenodd\" d=\"M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z\"/>
                                </svg>
                              </a>

                              <a href='UsuarioExcluirOk.php?id=" . $row["idusuario"] . "'>
                                  <svg id=\"remove\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-person-x-fill\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path fill-rule=\"evenodd\" d=\"M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6.146-2.854a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z\"/>
                                  </svg>
                              </a>

                            </div>

                            <!--<div id=\"imagem\">
                            <img src=\"../img/profile-user.svg\">
                            
                            </div>

                            <div id=\"hr\"></div>-->

                            <div id=\"perfil\"> 
                              <div id=\"dadosUsuario\"> 
                                Nome: 
                                <div id=\"resultado\">"
                                  . $row["nome"] .
                                
                                "</div>
                              </div>

                              <div id=\"dadosUsuario\"> 
                                Sobrenome: 
                                <div id=\"resultado\">"
                                  . $row["sobrenome"] .
                              
                                "</div>
                              </div>

                              <div id=\"dadosUsuario\"> 
                                Data: 
                                <div id=\"resultado\">"
                                  . $row["dataNasc"] .
                              
                                "</div>
                              </div>

                              <div id=\"dadosUsuario\"> 
                                Cel.: 
                                <div id=\"resultado\">"
                                  . $row["tel"] .
                              
                                "</div>
                              </div>

                              <div id=\"dadosUsuario\"> 
                                E-mail: 
                                <div id=\"resultado\">"
                                  . $row["email"] .
                              
                                "</div>
                              </div> 

                              <div id=\"dadosUsuario\"> 
                              CPF: 
                              <div id=\"resultado\">"
                                . $row["cpf"] .
                            
                              "</div>
                            </div>

                            </div>

                          </div>
                          ";
                  }

                  $result->free_result();
                }
                $mysqli->close();
            ?>
            <?php 
                echo "<div id=\"cardPerfis\">
                <div id=\"opcoes\">
                <a href='usuarioIncluir.php'>
                    <svg id=\"add\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-person-plus-fill\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path fill-rule=\"evenodd\" d=\"M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z\"/>
                    </svg>
                </a>

                </div>

                <!--<div id=\"imagem\">
                <img src=\"../img/profile-user.svg\">
                
                </div>-->

                <div id=\"hr\"></div>

                <div id=\"perfil\"> 
                <div id=\"dadosUsuario\"> 
                    Administrador: 
                    <div id=\"resultado\">"
                    . $nomeUser .
                    
                    "</div>
                </div>

                <div id=\"dadosUsuario\"> 
                    E-mail: 
                    <div id=\"resultado\">"
                    . $emailUser .
                
                    "</div>
                </div> 

                </div>

            </div>
            ";
            
            ?>
                
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