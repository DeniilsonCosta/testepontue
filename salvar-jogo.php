<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$nome = $_POST["nome"];
			$categoria = $_POST["categoria"];
			$duracao = $_POST["duracao"];
			$nivel = $_POST["nivel"];

			$sql = "INSERT INTO jogos (nome, categoria, duracao, nivel) VALUES ('{$nome}', '{$categoria}', '{$duracao}', '{$nivel}')";

			$res = $conn->query($sql);

			if ($res==true) {
				print "<script>alert('Cadastrado com Sucesso');</script>";
				print "<script>location.href='?page=listar';</script>";
			}else{
				print "<script>alert('Não Foi Possível Cadastrar. Erro: " . $conn->error . "');</script>";
				print "<script>location.href='?page=listar';</script>";
			}

			break;

		case 'editar':
			$nome = $_POST["nome"];
			$categoria = $_POST["categoria"];
			$duracao = $_POST["duracao"];
			$nivel = $_POST["nivel"];

			$sql = "UPDATE jogos SET
						nome='{$nome}',
						categoria='{$categoria}', 
						duracao='{$duracao}', 
						nivel='{$nivel}'
					WHERE
						id=".$_REQUEST["id"];

			$res = $conn->query($sql);

			if ($res==true) {
				print "<script>alert('Editado com Sucesso');</script>";
				print "<script>location.href='?page=listar';</script>";
			}else{
				print "<script>alert('Não Foi Possível Editar. Erro: " . $conn->error . "');</script>";
				print "<script>location.href='?page=listar';</script>";
			}

			break;

		case 'excluir':
			$sql = "DELETE FROM jogos WHERE id=".$_REQUEST["id"]";
			if ($res==true) {
				print "<script>alert('Excluido com Sucesso');</script>";
				print "<script>location.href='?page=listar';</script>";
			}else{
				print "<script>alert('Não Foi Possível Excluir. Erro: " . $conn->error . "');</script>";
				print "<script>location.href='?page=listar';</script>";
			}
			break;
	}
?>