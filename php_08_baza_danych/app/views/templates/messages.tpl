{if $msgs->isError()}
	<h3>Wystąpiły błędy: </h3>
	<ol class="err">
		{foreach $msgs->getErrors() as $err}
			{strip}
				<li>{$err}</li>
			{/strip}
		{/foreach}
	</ol>
{/if}

{* wyświeltenie listy informacji, jeśli istnieją *}
{if $msgs->isInfo()}
	<h3>Informacje: </h3>
	<ol class="inf">
		{foreach $msgs->getInfos() as $inf}
			{strip}
				<li>{$inf}</li>
			{/strip}
		{/foreach}
	</ol>
{/if}

{if isset($res->result)}
	<h3>Miesięczna rata:</h3>
	<p class="res">
		{$res->result}zł
	</p>
{/if}