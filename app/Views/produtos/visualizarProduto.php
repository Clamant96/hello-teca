<section id="sectionEmAlta">
    <div id="menuProdutos">
        <h1>Em Alta</h1>
        <div id="search">
            <div id="botaoSearch">
                <input type="search" value="" placeholder="Pesquisar">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                    <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                </svg>
            </div>
        </div>
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

<div id="hr">
    <hr>
</div>

<section id="sectionProduto">
    <div id="opcoesNavegacao">
        <div id="navegacao">
            <div id="opcap">
                <p>Pág</p>
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-down-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                </svg>
            </div>
            <div id="opcap">
                <p>Cap</p>
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-down-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                </svg>
            </div>
        </div>
        <div id="titulo">
            <p><?= $dados['produto']->nome ?></p>
            <div id="tituloHr">
                <hr>
            </div>  
        </div>
    </div>
    <div id="navegacaoTelas">
        <div id="zoom">
            <div id="zoomOpcao">
                <p>Zoom</p>
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg>
            </div>
            <div id="zoomOpcao">
                <p>Zoom</p>
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-dash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                </svg>
            </div>
        </div>
        <div id="zoom">
            <div id="zoomOpcao">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
            <div id="zoomOpcao">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </div>
        </div>
    </div>
    <div id="paginasProduto">
        <div id="capa">
            <img src="<?= URL.'/public/img/'.$dados['produto']->img ?>">
        </div>
        <!-- <div id="paginacao">
            <img src="img/3.PNG">
        </div> -->
    </div>
</section>