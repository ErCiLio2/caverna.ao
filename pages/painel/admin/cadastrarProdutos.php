<main class="main-painel" id="gerenciar">
    <div class="cadastrar_Produtos">
        <form action="" method="post" enctype="multipart/form-data">
            
            <div class=" grid grd-1">
                <input type="text" nome="input_nomeProduto" class="p-8" placeholder="Nome Do Produto" autofocus require>
                <textarea name="input_descricaoProduto" class="p-8" id="" cols="" rows="3" placeholder="Descricao"  require></textarea>
                
                <div class="">
                    <div>
                        <input type="file" accept="image/*" name="foto[]" id=""  class="py-8" id="input_foto_de_capa"  require>
                        <label for="input_foto_de_capa">Foto De Capa</label>
                    </div>
                    <div>
                        <input type="file" accept="image/*" name="foto[]" id=""  class="py-8" id="input_foto_de_capa"  require>
                        <label for="input_foto_de_capa">Foto De Capa</label>
                    </div>
                    <div>
                        <input type="file" accept="image/*" name="foto[]" id=""  class="py-8" id="input_foto_de_capa"  require>
                        <label for="input_foto_de_capa">Foto De Capa</label>
                    </div>
                </div>
                <span class="">
                    <button class="p-5">Adicionar Foto</button>
                </span>
                <input type="text" class="p-8" placeholder="Valor do Produto em AOA(Kz)"  require>
                <input type="text" class="p-8" placeholder="Porcentagem(%) do IVA"  require >
                <input type="text" class="p-8" placeholder="Quantidade"  require>
                <input type="submit" value="Cadastrar Produto" class="p-10" >
            </div>

        </form>
    <?php
    if(isset($_POST['foto']))
        if(isset($_FILES))
        {
            $fotos   = $_FILES['foto'];
            $ft_nome = $fotos['name'];
            $ft_tmp_nome   = $fotos['tmp_name'] ;
            
            for ($key=0; $key<count($ft_nome); $key++) {

                    
                    $ext = strtolower(substr($ft_nome[$key],-4)); //Pegando extensão do arquivo
                    $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
                    $dir = './img/uploads/'; //Diretório para uploads
                    sleep(1);
                    try {
                        move_uploaded_file($ft_tmp_nome[$key], $dir.$new_name);
                        echo '<button class="btn btn-default">Enviar nova imagem</button>';
                    } catch (\Throwable $th) {
                        //throw $th;
                    }
                    //Fazer upload do arquivo
                    #echo '<img src="./img/uploads/'. $new_name .'" class="img img-responsive img-thumbnail" width="200">';}
                
            #echo '<button class="btn btn-default">Enviar nova imagem</button>';
            } 
        }?>
    </div>

</main>