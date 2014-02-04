<?php

$path = dirname(__FILE__) . "/data/"; 
$files = readDirectory($path); 

if(isset($_POST['doCreate'])) {
	$filename = $path . basename(trim(strip_tags($_POST['filename']))); 
	if(empty($_POST['filename']))
	{
		$res = "Filen skapades ej, filnamnet kan ej vara tomt. Välj ett annat filnamn."; 
	}
	else if(is_file($filename))
	{
		$res = "Filen skapades ej, den finns redan. Välj ett annat filnamn."; 
	}
	else
	{
		file_put_contents($filename, null); 
		$res = "Filen skapades."; 
		$files = readDirectory($path); 
	}
}

$select = "<select multiple id='input1' name='file'>"; 
foreach($files as $val)
{
	$select .= "<option value='{$val}'>{$val}</option>"; 
}
$select .= "</select>"; 

?>

<h1>Lägg till annons</h1>

<p>Ange ett unikt namn på annonsen och klicka på knappen "Skapa" för att spara den.</p>

<form method="post">
	<fieldset>
		<p>
			<label for="input1">Befintliga annonser:</label><br>
			<?php echo $select; ?> 
		</p>

		<p>
			<label for="input2">Ny annons:</label><br>
			<input id="input2" name="filename">
		</p>

		<p>
			<input type="submit" name="doCreate" value="Skapa">
			<input type="reset" value="Ångra">
		</p>

		<?php if(isset($res)): ?> 
		<p><output class="info"><?php echo $res ?></output></p>
		<?php endif; ?> 

	</fieldset>
</form>