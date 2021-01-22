<section id="formulario">
    <form id="form" action="<?=URL?>/usuarios/cadastrar" method="POST">
        <img src="<?=URL?>/public/img/helloteca-logo-black.png">
        <h1>Login</h1>
        <div id="container">
            <div id="cadastroUsuario">
                <p>Nome *</p>
                <input type="text" name="nome" placeholder="Nome" value="<?=$dados['nome']?>" id="<?= $dados['preencha_nome'] ? 'invalido' : '' ?>" />
                <div id="textoFeedback" class="<?= $dados['preencha_nome'] ? 'feedback' : 'none' ?>">
                    <?= $dados['preencha_nome'] ?>
                </div>
            </div>

            <!-- <div id="cadastroUsuario">
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
            </div> -->

            <div id="cadastroUsuario">
                <p>E-mail *</p>
                <input type="text" name="email" placeholder="E-mail" value="<?=$dados['email']?>" id="<?= $dados['preencha_email'] ? 'invalido' : '' ?>" />
                <div id="textoFeedback" class="<?= $dados['preencha_email'] ? 'feedback' : 'none' ?>">
                    <?= $dados['preencha_email'] ?>
                </div>
            </div>

            <div id="cadastroUsuario">
                <p>Senha <b>*</b></p>
                <input type="password" name="senha" placeholder="Senha" value="<?=$dados['senha']?>" id="<?= $dados['preencha_senha'] ? 'invalido' : '' ?>" />
                <div id="textoFeedback" class="<?= $dados['preencha_senha'] ? 'feedback' : 'none' ?>">
                    <?= $dados['preencha_senha'] ?>
                </div>
            </div>

            <div id="cadastroUsuario">
                <p>Confirmar Senha <b>*</b></p>
                <input type="password" name="confirmar_senha" placeholder="Senha" value="<?=$dados['confirmar_senha']?>" id="<?= $dados['preencha_confirmar_senha'] ? 'invalido' : '' ?>" />
                <div id="textoFeedback" class="<?= $dados['preencha_confirmar_senha'] ? 'feedback' : 'none' ?>">
                    <?= $dados['preencha_confirmar_senha'] ?>
                </div>
            </div>

            <!-- <div id="cadastroUsuario">
                <p>CPF *</p>
                <input type="text" name="cpf" placeholder="_ _ _._ _ _._ _ _-_ _" />
            </div> -->

            <div id="pointerCadastro">
                <input type="radio" />
                <p>Eu aceito os <a href="#">Termos e Condições</a> e a <a href="#">Política de Privacidade</a> da Hello!Teca</p>
            </div>

            <div id="acessar">
                <button type="submit">CRIAR SUA CONTA</button>
            </div>
        </div>
    </form>
</section>