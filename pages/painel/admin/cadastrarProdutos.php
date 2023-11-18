<main class="main-painel" id="gerenciar">
    <div class="cadastrar_Produtos">
        <form action="" method="post" enctype="multipart/form-data">
            
            <div class=" grid grd-1">
                <input type="text" name="input_nomeProduto" class="p-8" placeholder="Nome Do Produto" autofocus require>
                <textarea name="input_descricaoProduto" class="p-8" id="" cols="" rows="3" placeholder="Descricao"  require></textarea>
                
                <div class="fotosProduto">
                    <div>
                        <input type="file" accept="image/*" name="input_fotoProduto[]" id=""  class="py-8" id="input_foto_de_capa1"  require>
                        <label for="input_foto_de_capa1">Foto De Capa</label>
                    </div>
                    <div>
                        <input type="file" accept="image/*" name="input_fotoProduto[]" id=""  class="py-8" id="input_foto_de_capa2"  require>
                        <label for="input_foto_de_capa2">Foto De Capa</label>
                    </div>
                    <div>
                        <input type="file" accept="image/*" name="input_fotoProduto[]" id=""  class="py-8" id="input_foto_de_capa3"  require>
                        <label for="input_foto_de_capa3">Foto De Capa</label>
                    </div>
                </div>
                <div class="">
                    <label for="cor1">Verde</label> <input type="checkbox" name="input_corProduto[]" id="cor1" value="Verde">
                    <label for="cor2">Vermelo</label> <input type="checkbox" name="input_corProduto[]" id="cor2" value="Vermelo">
                    <label for="cor3">Amarelo</label> <input type="checkbox" name="input_corProduto[]" id="cor3" value="Amarelo">
                    <label for="cor4">Azul</label> <input type="checkbox" name="input_corProduto[]" id="cor4" value="Azul">
                </div>
                <div class="selecao">
                    <select name="input_generoProduto" id="" require>
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                        <option value="T">todos</option>
                    </select>
                    <select name="input_catgoriaProduto" id="" require>
                        <option value="1" >Alimentos</option>
                        <option value="2" >Roupas</option>
                    </select>
                </div>
                <input type="text" class="p-8" name='input_valorProduto' placeholder="Valor do Produto em AOA(Kz)"  require>
                <input type="text" class="p-8" name='input_ivaProduto' placeholder="Porcentagem(%) do IVA"  require >
                <input type="text" class="p-8" name='input_QuantidadeProduto' placeholder="Quantidade"  require>
                <input type="submit" value="Cadastrar Produto" class="p-10" name='input_cadastrarProduto'>
            </div>

        </form>
    <?php
    if(isset($_POST['input_cadastrarProduto']))
    {
        if(isset($_FILES['input_fotoProduto']) && isset($_FILES))
        {
            //var_dump($_FILES['input_fotoProduto']);
            
            try {
                $fotos   = $_FILES['input_fotoProduto'];
                $ft_nome = $fotos['name'];
                $ft_tmp_nome  = $fotos['tmp_name'] ;
                
                for ($key=0; $key<count($ft_nome); $key++) {
                    $ext = strtolower(substr($ft_nome[$key],-4)); //Pegando extensão do arquivo
                    $new_name = $_POST['input_nomeProduto'].date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
                    $dir = './img/uploads/'; //Diretório para uploads
                    sleep(1);
                    
                    try {
                        //Fazer upload do arquivo
                        move_uploaded_file($ft_tmp_nome[$key], $dir.$new_name);
                        $novo_foto[] = $dir.$new_name;
                        //echo '<button class="btn btn-default">Enviar nova imagem</button>';
                    } catch (\Throwable $th) {
                        echo "Erro ->".$th;
                    }
                    #echo '<img src="./img/uploads/'. $new_name .'" class="img img-responsive img-thumbnail" width="200">';
                }
            } catch (\Throwable $th) {
                echo "Erro ->".$th;
            }
            $novoProduto = [
                'novo_nomeProduto'          => $_POST['input_nomeProduto'],
                'novo_descricaoProduto'     => $_POST['input_descricaoProduto'],
                'novo_fotoProduto'          => json_encode($novo_foto),
                'novo_corProduto'           => json_encode($_POST["input_corProduto"]),
                'novo_generoProduto'        => $_POST["input_generoProduto"],
                'novo_catgoriaProduto'      => $_POST["input_catgoriaProduto"],
                'novo_valorProduto'         => $_POST['input_valorProduto'],
                'novo_ivaProduto'           => $_POST['input_ivaProduto'],
                'novo_QuantidadeProduto'    => $_POST['input_QuantidadeProduto'],
            ];
            $resultado = Produtos::cadastrarProduto($novoProduto);
            if(!empty($resultado))
                echo '<h2> O produto '.$resultado.' foi Cadastrado Com Sucesso </h2>';
        }
    }
        ?>
    </div>

</main>