<h1>Editar Jogo</h1>
<?php 
	$sql = "SELECT * FROM jogos WHERE id=".$_REQUEST["id"];
	$res = $conn->query($sql);
	$row = $res->fetch_object();
?> 
<form action="?page-salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id" value="<?php print $row->id; ?>">
	<div class="mb-3">
		<label>Nome do Jogo</label>
		<input type="text" name="nome" value="<?php print $row->nome?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Categoria</label>
		<input type="text" name="categoria"
		value="<?php print $row->categoria?>" class="form-control">
	</div>
		<div class="mb-3">
		<label>Duração</label>
		<input type="text" name="duracao"
		value="<?php print $row->duracao?>"class="form-control">
	</div>
		<div class="mb-3">
		<label>Nivel</label>
		<input type="text" name="nivel"
		value="<?php print $row->nivel?>" class="form-control">
	</div>
		<div class="mb-3">
		<button type="submit" class="btn btn-primary">Salvar</button>
	</div>
</form>