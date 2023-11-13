<?php
	$usuario = new Usuarios;
	$produtos = Produtos::Produtos();
?>
<main class="main-painel painel" id="painel">
	<div>
		<div class="estasticas">
			<div>
				<h3>Vendas no Site</h3>
				<p>2</p>
			</div>
			<div>
				<h3>Total De Vendas Em Kz</h3>
				<p>2.000.000,43Kz</p>
			</div>
			<div>
				<h3>Total De Produtos Vendidos</h3>
				<p>2</p>
			</div>
			<div>
				<h3>Total De Produtos Em Stock</h3>
				<p>2</p>
			</div>
			<div>
				<h3>Total De Vendas Em Stock em Kz</h3>
				<p>2</p>
			</div>
			<div>
				<h3>Clientes Cadastrados</h3>
				<p>2</p>
			</div>
		</div>
		<div class="estasticas">
			<div>
				<h3>Total De Visitas Ao site hoje</h3>
				<p>2</p>
			</div>
			<div>
				<h3>Total De Vendas Canseladas Por Clientes</h3>
				<p>2</p>
			</div>
			<div>
				<h3>Clientes Cadastrados</h3>
				<p>2</p>
			</div>
			<div>
				<h3>Clientes Cadastrados</h3>
				<p>2</p>
			</div>
			<div>
				<h3>Clientes Cadastrados</h3>
				<p>2</p>
			</div>
			<div>
				<h3>Clientes Cadastrados</h3>
				<p></p>
		<?=
			date('sthdm');
		?></p>
			</div>
		</div>
	</div>
	<div>
	</div>
	<?php
		include "painel/admin/menu.php";
	?>
</main>
