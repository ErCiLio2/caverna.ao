
    <header>
    <?php 
        #$url == 'chats' || $url == "contactos" || $url == "painel"
        if(isset($_SESSION['Usuario']) || isset( $_SESSION['Admin'] )){?>
            <div class="header-chat header-container">
                <ul>
                    <li>
                        <a href="<?=BASE_URL?>">
                            <img src="<?=BASE_URL?>img/ico.png" alt="">
                        </a>
                    </li>
                    <li>
                        <button class="opcoes" id="btn-<?=$url?>">
                            <img src="<?= BASE_URL?>img/menu_opcoes.svg" alt="">
                        </button>
                    </li>
                </ul>  
            </div>
    <?php } else {?>
        <div class="header-container">
            <div class="header-info">
                <a href="<?= BASE_URL?>">
                    <img src="<?=BASE_URL?>img/ico.png" alt="Caverna">
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