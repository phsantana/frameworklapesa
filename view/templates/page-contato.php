<section class="page-contato">
	<!--Adicionar contato-->
	<section class="page-blocks" name="Adicionar contato">
		<header>
			<h1 class="page-titulo underline">Adicionar contato</h1>
		</header>
		<section class="content">
			<form action="" method="post">
				<table>
					<tbody>
						<tr>
							<td>Tipo de contato <em>(telefone, e-mail, ...)</em></td>
							<td>
								<input type="text" name="nomecompleto" pattern="^[a-zA-Zà-úÀ-Ú ]{2,50}$" autocomplete="off" title="Somente letras e acentos são permitidos. Até 40 caracteres.">
							</td>
						</tr>
					</tbody>
				</table>
				<input type="submit" value="Adicionar contato">
			</form>
		</section>
	</section>
	<!--Modificar contatos-->
	<section class="page-blocks" name="Modificar contatos">
		<header>
			<h1 class="page-titulo underline">Modificar contatos</h1>
		</header>
		<section class="content">
			<form action="" method="post">
				<table>
					<tbody>
						<tr>
							<td>Tipo de contato <em>(telefone, e-mail, ...)</em></td>
							<td>
								<input type="text" name="nomecompleto" pattern="^[a-zA-Zà-úÀ-Ú ]{2,50}$" autocomplete="off" title="Somente letras e acentos são permitidos. Até 40 caracteres.">
							</td>
						</tr>
						<tr>
							<td>Endereço ou número</td>
							<td><input type="text" name="valorcontato"/></td>
						</tr>
					</tbody>
				</table>
				<input type="submit" value="Salvar alterações">
			</form>
		</section>
	</section>
	<!--Excluir contato-->
	<section class="page-blocks" name="Excluir contato">
		<header>
			<h1 class="page-titulo underline">Excluir contato</h1>
		</header>
		<section class="content">
			<form action="" method="post">
				<table>
					<tbody>
						<tr>
							<td class="delete"></td>
							<td><u>Exemplo de contato</u></td>
							<td><u>Valor do contato</u></td>
						</tr>
						<tr>
							<td class="delete"><input type="checkbox"></td>
							<td>contato_001</td>
							<td>valor_001</td>
						</tr>
					</tbody>
				</table>
				<input type="submit" value="Excluir">
			</form>
		</section>
	</section>
</section>