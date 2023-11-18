<?php
    if(isset($_GET["prod"]))
    $id = $_GET['prod'];

    if(!empty($_GET['prod']))
        $item = Produtos::pesquisarProduto($id)[0];
        $titulo = $item[1];
        $preco  = $item[2];
        $img    = json_decode($item[7])[0];
        $descri = $item[3];
        $quant  = $item[5];
?>
<main class="">
    <div id="delete_produto">
        <div>
            <img style="display:block;width:100%" src="<?=BASE_URL.$img?>" alt="">
            <p>Item: <?= $titulo?></p>
            <p>Preco: <?= $preco?>Kz</p>
            <p>Descricao: <?= $descri?></p>
            <p>Quantidade: <?= $quant?> Unidades</p>
        </div>
        <button id="confirmar">Confirmar Eliminaçao</button>
        <button id="canselar">Canselar</button>
    </div>
</main>