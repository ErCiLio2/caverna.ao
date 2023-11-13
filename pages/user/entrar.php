
<main id="main-entrar">
	<div>
		<?php
	
	if(isset($_POST['entrar'])){
		$em412 = $_POST["email"];
		$palavrapas5 = $_POST["palavrapass"] ;
		
		$Sql = Usuarios::logarUsuario($em412, $palavrapas5);
		var_dump($Sql);			

	}

?>
		<a href="<?= BASE_URL?>" id="logo">
	        <img src="<?=BASE_URL?>img/ico-user.png" alt="">
        </a>
	</div>
	<div id="entrar">
		<form method="post">
			<input type="email" name="email" placeholder="Email">
			<input type="password" name="palavrapass" placeholder="Palavra-passe">
			<div>
        		<input type="checkbox" name="" id="recordar">
				<label for="recordar"> Manter Sessão iniciada</label>
				<p>Ao habitar esta opão não será necessário informar os seus dados nas proximas vezes</p>
			</div>
			<button type="submit" name="entrar">entrar</button>
		</form>
		<div>
			<p>Ainda não fez o seu cadastro? <a href="<?=BASE_URL?>?user=cadastrar">cadastrar</a> agora</p>
		</div>
	</div>
</main>
