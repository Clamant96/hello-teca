<header id="header">
    <a href="<?= URL ?>">
        <div id="img">
            <img src="<?= URL ?>/public/img/helloteca-logo-white.png">
        </div>
    </a>
    <nav>
        <ul>
            <a href="<?= URL ?>/planos/listar"><li>Planos</li></a>
            <a href="<?= URL ?>/ajudas/central"><li>Ajuda</li></a>
            <a href="<?= URL ?>/baixar/index"><li>Baixar</li></a>
            <a href="<?= URL ?>/produtos/cadastrar"><li>Criar</li></a>
            <?php if(isset($_SESSION['usuario_id'])): ?>
                <a href="#"><li><?= $_SESSION['usuario_nome'] ?></li></a>
                <a href="<?= URL ?>/usuarios/logout"><li>Logout</li></a>
            <?php else: ?>
                <a href="<?= URL ?>/usuarios/cadastrar"><li>Inscrever-se</li></a>
                <a href="<?= URL ?>/usuarios/login"><li>Login</li></a>
            <?php endif; ?>
        </ul>
    </nav>
</header>