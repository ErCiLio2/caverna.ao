
    <header>
    <?php if($url == 'chats' || $url == "contactos" || $url == "painel"){?>
    	<div class="header-chat header-container">
    			<ul>
	    			<li><a href="<?=BASE_URL?>"><img src="<?= BASE_URL?>img/arrow_left_circle_icon.png" alt=""></a></li>
	    			<li>
                        <button class="opcoes" id="btn-<?=$url?>">
                            <img src="<?= BASE_URL?>img/menu_opcoes.svg" alt="">
                        </button>
                    </li>
    			</ul>   
    <?php } else {?>
        <!--<div>
            <div>
                <a href="" class="logo">
                    <img src="<?=BASE_URL?>img/logo.png" alt="logo">
                </a>
                <h1>Caverna De Estilos</h1>
            </div>
            <div class="search-and-user">
                <form action="">
                    <input type="search" name="" id="">
                    <button type="submit">Pesquisar</button>
                </form>
            </div>
            <div class="user">
                <a href="?user=entrar" class="entrar">entrar</a>
                <a href="?user=cadastrar" class="cadastrar">cadastrar</a>
            </div>
        </div>-->
        <div class="header-container">
            <div class="header-info">
                <a href="<?= BASE_URL?>">
                    <img src="<?=BASE_URL?>img/ico.png" alt="">
                </a>
                <h1>Caverna De Estilos</h1>
            </div>
            <div class="header-actions">
                <div class="pesquisa">
                    <form method="post">
                        <input type="search" name="produto" id="" placeholder="Pesquise aqui...">
                        <button type="submit">pesquisa</button>
                    </form>
                </div>
                <div class="usuario">
                    <a href="?user=entrar" class="entrar">Entrar</a>
                    <a href="?user=cadastrar" class="cadastrar"> Cadastrar</a>
                </div>
            </div>
        </div>
    <?php } ?>
    </header>