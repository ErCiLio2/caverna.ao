<main class="main-painel" id="gerenciar">
    <div class="corpo_gerenciar_produtos">
        <table cellspacing=0>
            <thead class="cabecalho_tb">
                <td class="">Codigo</td>
                <td class="">Nome</td>
                <td class="">Preco Unit</td>
                <td class="">Foto</td>
                <td class="">Descricao</td>
                <td class="">Iva</td>
                <td class="">Desconto</td>
                <td class="">Qtd</td>
                <td class="">Alterar</td>
            </thead>

    <?php 
            
            $produtos = Produtos::Produtos();
            foreach ($produtos as $produto){
            #var_dump($produto['prduto_fotos'] );    
            $produto['prduto_fotos'] = $string = substr($produto['prduto_fotos'], 2, -2 ); 
            $fotoProduto = explode(',',$produto['prduto_fotos'] );
            foreach($fotoProduto as $key => $foto){
                $fotoProduto[$key] = substr($foto, 1, -1 );
               # var_dump($fotoProduto);
            }?>
                
            <tr class="lin_tb">
                
                <td class="col"><?=$produto['prduto_id']?></td>
                <td class="col"><?=$produto['prduto_nome']?></td>
                <td class="col"><?=$produto['prduto_preco']?>kz</td>
                <td class="col"><img src="<?=BASE_URL.$fotoProduto[0]?>" alt="<?=$fotoProduto[0]?>"></td>
                <td class="col"><?=$produto['prduto_descricao']?></td>
                <td class="col"><?=$produto['prduto_iva']?></td>
                <td class="col">Desconto</td>
                <td class="col"><?=$produto['prduto_qtd']?></td>
                <td class="col col_alterar">
                    <a href="#alterar">Editar</a>
                    <a href="#apagar">Actualizar</a>
                </td>
            </tr>
    <?php }?>

            <tr class="lin_tb ft_tb_produto">
                <td class="col" colspan="9">
                    <a href="<?=BASE_URL?>painel/admin/cadastrarProdutos">Adicionar Produto</a>
                </td>
            </tr>

        </table>
    </div>
</main>