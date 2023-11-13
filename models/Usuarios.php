<?php  
	
	require_once('models/MySql.php');
	
	class Usuarios
	{
		public static function logarUsuario($em412, $palavrapas5)
		{
			$Sql= MySql::conectar()->prepare(" SELECT * from admin WHERE admin_email =? AND admin_senha = ? ");

			$Sql->execute(array($em412, $palavrapas5));

			if ($Sql->rowCount() >0){
				$data = ["Usuario" => "Admin"];
				return $data;
			}
			else{
				return 0;
			}
		}

		public static function criarUsuario($dados)
		{

			$nome = $dados['usernome'];
			$ssnome = $dados['usersobrenome'];
			$mail = $dados['useremail'];
			$tel = $dados['usertel'];
			$sexo = $dados['usersexo'];
			$ppasse = $dados['palavrapas5'];
			$data = $dados['userdata'];

			$Sql= MySql::conectar()->prepare("INSERT into clientes VALUES(?,?,?,?,?,?,?,?)");

			$Sql->execute(array(date('sth'), $nome, $ssnome, $mail, $tel, $sexo, $ppasse, $data));

			if ($Sql){
				var_dump($Sql);
			}
			else{
				return 0;
			}
		}	
	}