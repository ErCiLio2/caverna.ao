
<main id="main-entrar">
	<div>
		<a href="<?= BASE_URL?>" id="logo">
	        <img src="<?=BASE_URL?>img/ico-user.png" alt="">
        </a>
	</div>
	<div id="entrar">
		<form method="post">
			<input type="" name="usernome" placeholder="nome..." required autofocus>
			<input type="" name="usersobrenome" placeholder="Sobrenome..." required>
			<input type="" name="useremail" placeholder="Email..." required>
			<input type="" name="usertel" placeholder="Telefone..." required>
			<select name="sexo" required>
				<option>Masculino</option>
				<option>Femenino</option>
				<!--<option>Prefiro não Dizer</option>-->
			</select>
			<input type="date" name="data" required>
			<button type="submit" name="promixo">Avançar</button>
		</form>
		<div>
			<p>Já fez o seu cadastro? <a href="<?=BASE_URL?>?user/entrar">entrar</a> </p>
		</div>
	</div>
</main>

