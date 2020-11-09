<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Teca - Cadastro</title>
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
            <form id="form" action="novoCadastro.php" method="POST">
                
                    <img src="../img/helloteca-logo-black.png">
                
                <h1>Login</h1>
                <div id="container">
                    <div id="cadastroUsuario">
                        <p>Nome *</p>
                        <input type="text" name="nome" placeholder="Nome" />
                    </div>

                    <div id="cadastroUsuario">
                        <p>Sobrenome *</p>
                        <input type="text" name="sobrenome" placeholder="Sobrenome" />
                    </div>

                    <div id="cadastroUsuario">
                        <p>Data de Nascimento *</p>
                        <input type="date" name="dataNasc" placeholder="Exemplo 01/01/2001" />
                    </div>

                    <div id="cadastroUsuario">
                        <p>Telefone</p>
                        <input type="tel" name="tel" placeholder="Exemplo (11) 12345-6789" />
                    </div>

                    <div id="cadastroUsuario">
                        <p>E-mail *</p>
                        <input type="email" name="email" placeholder="E-mail" />
                    </div>

                    <div id="cadastroUsuario">
                        <p>Senha *</p>
                        <input type="password" name="senha" placeholder="Senha" />
                    </div>

                    <div id="cadastroUsuario">
                        <p>CPF *</p>
                        <input type="text" name="cpf" placeholder="_ _ _._ _ _._ _ _-_ _" />
                    </div>

                    <div id="pointerCadastro">
                        <input type="radio" />
                        <p>Eu aceito os <a href="#">Termos e Condições</a> e a <a href="#">Política de Privacidade</a> da Hello!Teca</p>
                    </div>

                    <div id="acessar">
                        <button type="submit">CRIAR SUA CONTA</button>
                    </div>

                    <!-- <div id="senha">
                        <p>Senha</p>
                        <input type="password" name="senha" placeholder="Senha" />
                    </div>

                    <div id="pointer">
                        <input type="radio" name="senha" placeholder="Senha" />
                        <p>Lembrar senha</p>
                    </div>

                    <div id="acessar">
                        <button type="submit" >Entrar</button>
                    </div>

                    <div id="cadastro">
                        <a href="#">
                            <p>Cadastrar</p>
                        </a>
                        |
                        <a href="#">
                            <p>Esqueceu a senha?</p>
                        </a>
                    </div> -->
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