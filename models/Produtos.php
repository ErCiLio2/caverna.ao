<?php
    
    require_once('models/MySql.php');
    
    class Produtos
    {
        public static function Produtos()
		{
			$Sql= MySql::conectar()->prepare(" SELECT * from produtos where 1");

			$Sql->execute();

			if ($Sql->rowCount() > 0){
				return $Sql->fetchAll();
			}
			else{
				return 0;
			}
		}

        public static function cadastrarProduto($produto)
		{

			$nome		= 	$produto['novo_nomeProduto'];
			$descricao 	=	$produto['novo_descricaoProduto'];
			$fotos 		=	$produto['novo_fotoProduto'];
			$cor		=	$produto["novo_corProduto"];
			$genero		=	$produto["novo_generoProduto"];
			$categoria	=	$produto["novo_catgoriaProduto"];
			$valor 		=	$produto['novo_valorProduto'];
			$iva 		=	$produto['novo_ivaProduto'];
			$quant 		=	$produto['novo_QuantidadeProduto'];

			
			if(empty($nome))	echo $nome;
			if(empty($descricao))	echo $descricao;
			if(empty($fotos))	var_dump($fotos);

			$Sql= MySql::conectar()->prepare("INSERT into produtos VALUES(?,?,?,?,?,?,?,?,?,?,?,null)");

			$Sql->execute(array(date('sth'), $nome, $valor, $descricao, $iva, $quant, $cor, $fotos, $categoria, $genero, date("Y-m-d")));

			if ($Sql){
				//var_dump($Sql);
				return $nome;
			}
			else{
				return 0;
			}
		}
        public static function apargarProduto($dados)
		{
			try {
                $nome = $dados['id'];
                $nome = $dados['nome'];

                $Sql= MySql::conectar()->prepare("DELETE FROM `produtos` WHERE prduto_id = ? and prduto_nome = ?;");

                $Sql->execute(array($id, $nome));

                if ($Sql){
                    var_dump($Sql);
                }
                else{
                    return 0;
                }
            } catch (\Throwable $th) {
                echo $th;
            }
		}	
    }

