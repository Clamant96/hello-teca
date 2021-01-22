<section id="sectionPrecos">
    <div id="texto">
        <div id="button">
            <button>
                Baixe o Hello!Teca Free
            </button>
        </div>
        <div id="imgReticulo">
            <img src="<?= URL ?>/public/img/irregular-form1.png">
            <div id="conteudoBanner">
                <div id="logoBanner">
                    <h1>Hello!Teca</h1><p>Premium</p>
                </div>
                <div id="promocaoBanner">
                    <h1>30 dias grátis</h1><p>A partir daí, R$24,99/mês</p><p>Cancele a qualquer momento*</p>
                </div>
                <img id="forma" src="<?= URL ?>/public/img/formato_triamgular.png">
            </div>
            <img id="dimesao" src="<?= URL ?>/public/img/irregular-form2.png">
        </div>
    </div>
    <div id="mouse">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-mouse" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 3a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 3zm4 8V5a4 4 0 0 0-8 0v6a4 4 0 0 0 8 0zM8 0a5 5 0 0 0-5 5v6a5 5 0 0 0 10 0V5a5 5 0 0 0-5-5z"/>
        </svg>
    </div>
</section>

<section id="sectionPlanos">
    <div id="menuProdutos">
        <h1>Leia sem limites</h1>
    </div>
    <div id="produtosPage">

        <?php foreach($dados['planos'] as $plano): ?>

            <div id="produto"> 
                <div id="plano"> 
                    <h1><?= $plano->titulo ?></h1>
                    <p><?= $plano->descricao ?></p>
                    <p>R$ <?= $plano->preco ?> / mês</p>
                    <h2>* Apenas <?= $plano->qtdconta ?> conta</h2>
                </div>
                <div id="buttonProduto">
                    <a href="#">
                        <button>Começar</button>
                    </a>
                </div>
            </div>
            
        <?php endforeach ?>

    </div>
</section>