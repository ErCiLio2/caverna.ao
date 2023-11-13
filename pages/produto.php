<?php

	if(isset($_GET['id']) && !empty($_GET['id'])){
		$id = $_GET['id'];
	?>
	<main class="main-produto">
		<div class="sessao-produto">
			<img src="<?=SRC_IMG.$produtos[$id]['fotos'][0]?>">
			<h2>Artigo: <?= $produtos[$id]['nome']?></h2>
			<h2>Prço: <?= $produtos[$id]['preco']?></h2>
			<p><?= $produtos[$id]['descricao']?></p>
			<div class="cores-produto">
				<h2>Cores Disponiveis</h2>
				<ul>
					<?php foreach ($produtos[$id]['cores'] as $cor) {?>
						<li><a href="?cor=<?=$cor?>"><?=$cor?></a> </li>
					<?php } ?>
				</ul>

			</div>
			<div>
				<a href="#">Comprar</a>
			</div>
		</div>

		<div class="aside-perodutos">
			<h3>Cores disponiveis</h3>
			<ul>
			 	<?php foreach($produtos[$id]['fotos'] as $foto){?>
			 		<li><a href=""><img src="<?=SRC_IMG.$foto?>"></a></li>
			 	<?php }?>
			</ul>
		</div>
	</main>
	<?php
	}else {
			header('Location: http://localhost/caverna.ao/');
			exite();
		}

/*<form method="POST">
					<select>
						<?php foreach ($produtos[$id]['cores'] as $cor) {?
							<option>?=$cor?</option>
						?php } ?
					</select>
					<a href="#">Voltar</a>
					<button type="submit">Comprar</button>
				</form>*/

