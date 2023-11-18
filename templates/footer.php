
    <footer>
        <?php 
        if(isset($_SESSION['Usuario']) || isset( $_SESSION['Admin'] )){?>
            <nav>
                <ul>
                    <li>
                        <a href="<?=BASE_URL?>inicio" id="inicio">
                            <img src="<?= BASE_URL?>img/_icon/loja.png"> <span>Inicio</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=BASE_URL?>chats" id="chats">
                            <img src="<?= BASE_URL?>img/_icon/chat2.png">
                            <span>Chat</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=BASE_URL?>carrinho" id="carrinho">
                            <img src="<?= BASE_URL?>img/_icon/shopping.png">
                            <span>Compra</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=BASE_URL?>painel" id="painel">
                            <img src="<?= BASE_URL?>img/_icon/user.png">
                            <span>Perfil</span>
                        </a>
                    </li>
                </ul>
            </nav>
        <?php } else{?>
        <p class="copy"> &copy; - 2023</p>
        <?php }?>
    </footer>
