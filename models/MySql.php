<?php
/*$Query = <<< T
					create table if not exists clientes(
						cliente_id 		int primary key not null,
						cliente_nome	varchar(30) not null,
						cliente_sobrenome	varchar(30) not null,
						cliente_email	varchar(40) not null,
						cliente_tel		varchar(13) not null,
						cliente_senha	varchar(16) not null,
					    cliente_sexo	varchar(9) not null,
					    cliente_nasc	DATe not null
					) ENGINE =InnoDB;
				T;

				$Sqluser = $bd::conectar()->prepare($Query);
				$Sqluser->execute();
*/
	class MySql{
		private static $pdo;

		public static function conectar()
		{
			if(self::$pdo == NULL)
			{
				try {
					self::$pdo = new PDO('mysql:host='._HOST.';dbname='._DB,_USER,_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

					self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
					
					return self::$pdo;
				} catch (Exception $e) {?>
						<script type="text/javascript">
							$('header').css('background-color','#007bff');
							$('footer').css('background-color','#006baf');
						</script>
					<?php
					echo '<h3>Erro ao conectar ao Banco de Dados</h3>';	
				}
			}
		}

	}