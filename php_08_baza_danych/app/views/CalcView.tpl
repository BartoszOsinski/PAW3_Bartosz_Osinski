{extends file="main.tpl"}

{block name=footer}Widok strony oparty na <a href="https://html5up.net/arcana" target="_blank">Arcana by HTML5 UP</a>{/block}

{block name=content}

    <span style="float:right;">
		<form action="{$conf->action_url}logout" method="post">
			<input type="submit" value="Wyloguj"/>
			<br>
			użytkownik: {$user->login}<br> rola: {$user->role}

            <br><br><br><br><br><br><br><br>
           <a href="{$conf->action_url}resultList" class="button primary">Historia Obliczeń</a>
		</form>
	</span>
    <form action="{$conf->action_root}calcCompute" method="post">
        <h3>Wprowadź dane</h3>
        <fieldset>
            <label for="id_x">Kwota pożyczki: </label>
            <input id="id_x" type="text" name="sum" value="{$form->sum}" />
            <label for="id_y">Liczba miesięcy: </label>
            <input id="id_y" type="text" name="months" value="{$form->months}" />
            <label for="id_z">Procent: </label>
            <input id="id_z" type="text" name="percent" value="{$form->percent}" />
        </fieldset>
        <br>
        <input type="submit" value="Oblicz" />
    </form>

    {include file='messages.tpl'}


{/block}

