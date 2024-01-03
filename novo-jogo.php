<h1>Novo Jogo</h1>
<form action="?page-salvar" method="POST">
	<input type="hidden" name="acao" value="novo">
	<div class="mb-3">
		<label>Nome do Jogo</label>
		<input type="text" name="nome" class="form-control">
	</div>
	<div class="mb-3">
		<label>Categoria</label>
		<input type="text" name="categoria" class="form-control">
	</div>
		<div class="mb-3">
		<label>Duração</label>
		<input type="text" name="duracao" class="form-control">
	</div>
		<div class="mb-3">
		<label>Nivel</label>
		<input type="text" name="nivel" class="form-control">
	</div>
		<div class="mb-3">
		<button type="submit" class="btn btn-primary">Salvar</button>
	</div>
</form>