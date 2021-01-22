<section id="formulario">
    <form id="form" action="<?=URL?>/usuarios/login" method="POST">
            <img src="<?=URL?>/public/img/helloteca-logo-black.png">
        <h1>Login</h1>
        <div id="container">
            <?=Sessao::mensagem('usuario')?>
            <div id="email">
                <p>E-mail <b>*</b></p>
                <input type="text" name="email" placeholder="E-mail" value="<?=$dados['email']?>" id="<?= $dados['preencha_email'] ? 'invalido' : '' ?>" />
                <div id="textoFeedback" class="<?= $dados['preencha_email'] ? 'feedback' : 'none' ?>">
                    <?= $dados['preencha_email'] ?>
                </div>
            </div>

            <div id="senha">
                <p>Senha <b>*</b></p>
                <input type="password" name="senha" placeholder="Senha" value="<?=$dados['senha']?>" id="<?= $dados['preencha_senha'] ? 'invalido' : '' ?>" />
                <div id="textoFeedback" class="<?= $dados['preencha_senha'] ? 'feedback' : 'none' ?>">
                    <?= $dados['preencha_senha'] ?>
                </div>
            </div>

            <div id="pointer">
                <input type="radio" name="senha" placeholder="Senha" />
                <p>Lembrar senha</p>
            </div>

            <div id="acessar">
                <button type="submit" >Entrar</button>
            </div>

            <div id="cadastro">
                <a href="<?= URL ?>/usuarios/cadastrar">
                    <p>Cadastrar</p>
                </a>
                |
                <a href="#">
                    <p>Esqueceu a senha?</p>
                </a>
            </div>
        </div>
    </form>
</section>