{extends file="main.tpl"}

{block name=footer}Widok strony oparty na <a href="https://html5up.net/arcana" target="_blank">Arcana by HTML5 UP</a>{/block}

{block name=content}
	<form action="{$conf->action_url}login" method="post" >
		<legend><h3>Logowanie do systemu</h3></legend>
		<fieldset>
			<div>
				<label for="id_login">login: </label>
				<input id="id_login" type="text" name="login"/>
			</div>
			<div>
				<label for="id_pass">pass: </label>
				<input id="id_pass" type="password" name="pass" /><br />
			</div>
			<div>
				<input type="submit" value="zaloguj"/>
			</div>
		</fieldset>
	</form>

	{include file='messages.tpl'}

{/block}
