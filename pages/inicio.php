<main>
    
    <section>
        <div class="produtos">
            
            <?php
                $id=0;
            foreach ($produtos as $produto){
            ?>
                <div class="produto">
                    <div>
                        <div class="foto-produto">
                            <img src="<?=SRC_IMG.$produto['fotos'][0]?>" alt="">                            
                        </div>
                        <p><?= $produto['nome']?></p>
                        <p><?= $produto['preco']?></p>
                        <a href="produto?id=<?=$id?>">Ver mais detalhes</a>
                        <a href="#" class="comprar">Comprar agora</a>
                    </div>
                </div>
            <?php 
                $id++;}?>
 
        </div><!-- produtos -->
    </section>

    <section class="conteudo">
        <div class="overlay"> 
            <div class="sidebar">
                <nav>
                    <ul>
                        <li><a href="?">Novas</a></li>
                        <li><a href="?">Melhores Preços</a></li>
                        <li><a href="?">Dicas De Moda</a></li>
                        <li><a href="?">Para Crianças</a></li>
                        <li><a href="?">Chinelas</a></li>
                        <li><a href="?">roupas</a></li>
                        <li><a href="contactos">Contactos</a></li>
                    </ul>
                </nav>
            </div>
            <div class="banner">  
                
            </div>
        </div>
    </section>

</main>
