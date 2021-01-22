<section id="sectionOne">
    <div id="texto">
        <div id="img">
            <img src="<?=URL?>/public/img/helloteca-logo-white-home.png" alt="<?= APP_NOME ?>" >
        </div>
        <div id="button">
            <button>
                Baixe o Hello!Teca Free
            </button>
        </div>
        <div id="imgReticulo">
            <img src="<?=URL?>/public/img/irregular-form1.png" alt="<?= APP_NOME ?>" >
            <p>A sua plataforma digital interativa de livros e quadrinhos. Leia livros, revistas, HQ`s, mangás, light novels e muito mais!</p>
            <img id="dimesao" src="<?=URL?>/public/img/irregular-form2.png" alt="<?= APP_NOME ?>" >
        </div>
    </div>
    <div id="search">
        <div id="botaoSearch">
            <input type="search" value="" placeholder="Pesquisar">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
            </svg>
        </div>
    </div>
    <div id="mouse">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-mouse" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 3a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 3zm4 8V5a4 4 0 0 0-8 0v6a4 4 0 0 0 8 0zM8 0a5 5 0 0 0-5 5v6a5 5 0 0 0 10 0V5a5 5 0 0 0-5-5z"/>
        </svg>
    </div>
</section>

<section id="sectionTwo">
    <div id="menuProdutos">
        <h1>Principais Destaques</h1>
    </div>
    <div id="produtosPage">
        
        <?php $contador = 0; ?>
        <?php foreach($dados['produtos'] as $produto): ?>
            <?php  if($contador < 4): ?>

            <div id="produto">
                <img src="<?= URL.'/public/img/'.$produto->img ?>" alt="<?=APP_NOME?>">
                <div id="buttonProduto">
                    <a href="<?= URL.'/produtos/vizualizarProduto/'.$produto->urlProduto ?>">
                        <button>Ver</button>
                    </a>
                </div>
            </div>
            
            <?php $contador++; ?>

            <?php endif; ?>
        <?php endforeach ?>

    </div>
</section>