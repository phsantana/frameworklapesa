<section class="page-configuracoes">
	<!--Adicionar conta-->
	<section class="page-blocks" name="Adicionar conta">
		<header>
			<h1 class="page-titulo underline">Adicionar conta</h1>
		</header>
		<section class="content">
			<form action="" method="post">
				<table>
					<tbody>
						<tr>
							<td>Nome Completo</td>
							<td>
								<input type="text" name="nomecompleto" pattern="^[a-zA-Zà-úÀ-Ú ]{2,50}$" autocomplete="off" title="Somente letras e acentos são permitidos. Até 40 caracteres.">
							</td>
						</tr>
						<tr>
							<td>E-mail<em> (example@dominio.com)</em></td>
							<td><input type="email" name="email" autocomplete="off"></td>
						</tr>
						<tr>
							<td>Senha</td>
							<td><input type="password" name="senha" autocomplete="off"></td>
						</tr>
						<tr>
							<td>Confirme sua senha</td>
							<td><input type="password" name="csenha" autocomplete="off"></td>
						</tr>
					</tbody>
				</table>
				<input type="submit" value="Salvar alterações">
			</form>
		</section>
	</section>
	<!--Modificar conta-->
	<section class="page-blocks" name="Modificar conta">
		<header>
			<h1 class="page-titulo underline">Modificar conta</h1>
		</header>
		<section class="content">
			<form action="" method="post">
				<label class="label-context">Selecione um participante<br>
					<input type="text">
					<button class="btn-2" type="button">Selecione</button>
				</label>
				<table>
					<tbody>
						<tr>
							<td>Nome Completo</td>
							<td>
								<input type="text" name="nomecompleto" pattern="^[a-zA-Zà-úÀ-Ú ]{2,50}$" autocomplete="off" title="Somente letras e acentos são permitidos. Até 40 caracteres.">
							</td>
						</tr>
						<tr>
							<td>E-mail<em> (example@dominio.com)</em></td>
							<td><input type="email" name="email" autocomplete="off"></td>
						</tr>
						<tr>
							<td>Senha</td>
							<td><input type="password" name="senha" autocomplete="off"></td>
						</tr>
						<tr>
							<td>Confirme sua senha</td>
							<td><input type="password" name="csenha" autocomplete="off"></td>
						</tr>
					</tbody>
				</table>
				<input type="submit" value="Salvar alterações">
			</form>
		</section>
	</section>
	<!--Excluir conta-->
	<section class="page-blocks" name="Excluir conta">
		<header>
			<h1 class="page-titulo underline">Excluir conta</h1>
		</header>
		<section class="content">
			<form action="" method="post">
				<table>
					<tbody>
						<tr>
							<td class="delete"></td>
							<td>Nome Completo</td>
							<td>Email</td>
						</tr>
						<tr>
							<td class="delete"><input type="checkbox"></td>
							<td>Nome Completo_01</td>
							<td>Email_01</td>
						</tr>
					</tbody>
				</table>
				<input type="submit" value="Excluir conta(s)">
			</form>
		</section>
	</section>
</section>