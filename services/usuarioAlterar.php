<?php
  require 'verifica.php';
  
  // abre conexao com o banco 
  require_once 'conectarBanco.php';
  
  $id = $_GET["id"];
  //$sql = "SELECT idusuario, nome, email, senha FROM usuario WHERE idusuario = " . $id;
  $sql = "SELECT idusuario, nome, email, senha, sobrenome, dataNasc, tel, cpf FROM usuario WHERE idusuario = " . $id;
  
  $result = $mysqli->query($sql);

  $row = $result->fetch_assoc();
  $id = $row["idusuario"];
  $nome = $row["nome"];
  $sobrenome = $row["sobrenome"];
  $dataNasc = $row["dataNasc"];
  $tel = $row["tel"];
  $email = $row["email"];
  $senha = $row["senha"];
  $cpf = $row["cpf"];

  $result->free_result();

  $mysqli->close();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Teca - Altarar</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/styleAcesso.css">   

</head>
<body>
    <div id="container">

        <!-- HEADER -->
        <header id="header">
            <div id="img">
                <img src="../img/helloteca-logo-white.png">
            </div>
            <nav>
                <ul>
                    <a href="#"><li>Planos</li></a>
                    <a href="#"><li>Ajuda</li></a>
                    <a href="#"><li>Baixar</li></a>
                    <a href="#"><li>Criar</li></a>
                    |
                    <!-- <a href="#"><li>Inscrever-se</li></a> -->
                    <a href="login.php"><li>Login</li></a>
                </ul>
            </nav>
        </header>

        <!-- FORMULARIO -->
        <div id="formulario">
            <form id="form" action="usuarioAlterarOk.php" method="POST">
                
                    <img src="../img/helloteca-logo-black.png">
                
                <h1>Alterar</h1>
                <div id="container">
                    <div style="display:none;"> <!-- DEIXA O ID INVISIVEL PARA O USUARIO -->
                        <p>ID</p>
                        <input type="hiddem" name="idusuario" value="<?php echo $id; ?>">
                    </div>

                    <div id="cadastroUsuario">
                        <p>Nome</p>
                        <input type="text" name="nome" placeholder="Nome" value="<?php echo $nome; ?>" />
                    </div>

                    <div id="cadastroUsuario">
                        <p>Sobrenome</p>
                        <input type="text" name="sobrenome" placeholder="Sobrenome" value="<?php echo $sobrenome; ?>" />
                    </div>

                    <div id="cadastroUsuario">
                        <p>Data de Nascimento</p>
                        <input type="date" name="dataNasc" placeholder="Exemplo 01/01/2001" value="<?php echo $dataNasc; ?>" />
                    </div>

                    <div id="cadastroUsuario">
                        <p>Telefone</p>
                        <input type="tel" name="tel" placeholder="Exemplo (11) 12345-6789" value="<?php echo $tel; ?>" />
                    </div>

                    <div id="cadastroUsuario">
                        <p>E-mail</p>
                        <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>" />
                    </div>

                    <div id="cadastroUsuario">
                        <p>Senha</p>
                        <input type="password" name="senha" placeholder="Senha" value="<?php echo $senha; ?>" />
                    </div>

                    <div id="cadastroUsuario">
                        <p>CPF</p>
                        <input type="text" name="cpf" placeholder="_ _ _._ _ _._ _ _-_ _" value="<?php echo $cpf; ?>" />
                    </div>

                    <div id="cadastroUsuario">
                        <p>Perfil 1 ou 2</p>
                        <input type="number" name="situacao" placeholder="Tipo de perfil"/>

                    </div>

                    <div id="pointerCadastro">
                        <input type="radio" />
                        <p>Eu aceito os <a href="#">Termos e Condições</a> e a <a href="#">Política de Privacidade</a> da Hello!Teca</p>
                    </div> 

                    <div id="acessar">
                        <button type="submit">Atualizar</button>
                    </div>
                </div>
            </form>
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