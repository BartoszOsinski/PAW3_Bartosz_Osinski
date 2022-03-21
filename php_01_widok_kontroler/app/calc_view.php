<?php

?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Kalkulator</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>


<div style="width:90%; margin: 2em auto;">

<form action="<?php print(_APP_ROOT); ?>/app/calc.php" method="post" class="pure-form pure-form-stacked">
	<legend>Kalkulator składki</legend>
	<fieldset>
		<label for="id_x">Kwota pożyczki: </label>
		<input id="id_x" type="text" name="sum" value="<?php out($loan['sum']) ?>" />
		<label for="id_y">Liczba miesięcy: </label>
		<input id="id_y" type="text" name="months" value="<?php out($loan['months']) ?>" />
        <label for="id_z">Procent: </label>
        <input id="id_z" type="text" name="percent" value="<?php out($loan['percent']) ?>" />
	</fieldset>	
	<input type="submit" value="Oblicz" class="pure-button pure-button-primary" />
</form>	

<?php

if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; width:25em;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #ff0; width:25em;">
<?php echo 'Miesięczna rata składki wynosi: '.$result.'zł'; ?>
</div>
<?php } ?>

</div>

</body>
</html>