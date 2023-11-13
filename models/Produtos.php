<?php
    
    require_once('models/MySql.php');
    
    class Produtos
    {
        public static function Produtos()
		{
			$Sql= MySql::conectar()->prepare(" SELECT * from prdutos where 1");

			$Sql->execute();

			if ($Sql->rowCount() > 0){
				return $Sql->fetchAll();
			}
			else{
				return 0;
			}
		}

        public static function cadastrarProduto($dados)
		{

			$nome = $dados['usernome'];
			$ssnome = $dados['usersobrenome'];
			$mail = $dados['useremail'];
			$tel = $dados['usertel'];
			$sexo = $dados['usersexo'];
			$ppasse = $dados['palavrapas5'];
			$data = $dados['userdata'];

			$Sql= MySql::conectar()->prepare("INSERT into prdutos VALUES(?,?,?,?,?,?,?,?)");

			$Sql->execute(array(date('sth'), $nome, $ssnome, $mail, $tel, $sexo, $ppasse, $data));

			if ($Sql){
				var_dump($Sql);
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

                $Sql= MySql::conectar()->prepare("DELETE FROM `prdutos` WHERE prduto_id = ? and prduto_nome = ?;");

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

