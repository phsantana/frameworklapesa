	<section class="page-participantes">
		<!--Modificar descrição -->
		<section class="page-blocks" name="Modificar informação">
			<header>
				<h1 class="page-titulo underline">Modificar informação</h1>
			</header>
			<section class="content">
				<form action="" method="post">
					<label for="descricao001">Descrição - Português Brasileiro
						<button type="button" class="btn btn-ok" title="Salvar as alterações"></button>
						<button type="button" class="btn btn-undo" title="Desfazer as alterações não-salvas"></button>
						<textarea id="descricao001" name="descricao"></textarea>
					</label>
					<label for="descricao002">Descrição - Inglês
						<button type="button" class="btn btn-ok" title="Salvar as alterações"></button>
						<button type="button" class="btn btn-undo" title="Desfazer as alterações não-salvas"></button>
						<textarea id="descricao002" name="descricao"></textarea>
					</label>
				</form>
			</section>
		</section>
		<!--Adicionar participante -->
		<section class="page-blocks" name="Adicionar participante">
			<header>
				<h1 class="page-titulo underline">Adicionar participante</h1>
			</header>
			<section class="content">
				<form id="add_participante" method="post">
					<table>
						<tbody>
							<tr>
								<td>Nome Completo</td>
								<td>
									<input type="text" name="nome" pattern="^[a-zA-Zà-úÀ-Ú ]{2,50}$" autocomplete="off" title="Somente letras e acentos são permitidos. Até 40 caracteres.">
								</td>
							</tr>
							<tr>
								<td>E-mail<em> (example@dominio.com)</em></td>
								<td><input type="email" name="email" autocomplete="off"></td>
							</tr>
							<tr>
								<td><em>Lattes</em> URL</td>
								<td><input type="url" name="url" autocomplete="off"></td>
							</tr>
							<tr>
								<td>Descrição</td>
								<td>
									<label> Descrição - Português Brasileiro
										<textarea name="descpt"></textarea>
									</label><br>
									<label> Descrição - Inglês
										<textarea name="descen"></textarea>
									</label>
								</td>
							</tr>
						</tbody>
					</table>
					<input type="submit" value="Adicionar">
				</form>
			</section>
		</section>
		<!--Modificar participante -->
		<section class="page-blocks" name="Modificar participante">
			<header>
				<h1 class="page-titulo underline">Modificar participante</h1>
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
								<td><em>Lattes</em> URL</td>
								<td><input type="url" name="lattesurl" autocomplete="off"></td>
							</tr>
							<tr>
								<td>Descrição</td>
								<td>
									<label> Descrição - Português Brasileiro
										<textarea name="participantedesc"></textarea>
									</label><br>
									<label> Descrição - Inglês
										<textarea name="participantedesc"></textarea>
									</label>
								</td>
							</tr>
						</tbody>
					</table>
					<input type="submit" value="Salvar alterações">
				</form>
			</section>
		</section>
		<!--Remover participante -->
		<section class="page-blocks" name="Remover participante">
			<header>
				<h1 class="page-titulo underline">Remover participante</h1>
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
									
								</td>
							</tr>
							<tr>
								<td>E-mail<em> (example@dominio.com)</em></td>
								<td>
									
								</td>
							</tr>
							<tr>
								<td><em>Lattes</em> URL</td>
								<td>

								</td>
							</tr>
							<tr>
								<td>Descrição</td>
								<td>
									
								</td>
							</tr>
						</tbody>
					</table>
					<input type="submit" value="Remover">
				</form>
			</section>
		</section>
	</section>