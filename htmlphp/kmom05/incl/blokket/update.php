<?php

$path = dirname(__FILE__) . "/data/"; 
$files = readDirectory($path); 


$filename = null; 
$isWritable = null; 
if(isset($_POST['file']) && in_array($_POST['file'], $files))
{ 
	$filename = $path . $_POST['file']; 
	if(is_writable($filename))
		{	
			$isWritable = true; 
		}
		else
		{
			$isWritable = false; 
		}
}

if(isset($_POST['doSave'])) {
	$res = putFileContents($filename, strip_tags($_POST['content'], "<b><i><p><img>")); 
}

$select = "<select id='input1' name='file' onchange='form.submit();'>";
$select .= "<option value='-1'>Välj Annons</option>";
foreach($files as $val) 
{
  $selected = "";
  if(isset($_POST['file']) && $_POST['file'] == $val) 
  {
    $selected = "selected";
  }
  $select .= "<option value='{$val}' {$selected}>{$val}</option>";
}
$select .= "</select>";

?>

<h1>Uppdatera annons</h1>

<p>Välj den annons du vill ändra.</p> 

<form method="post">
	<fieldset>
		<p>
			<label for="input1">Annonser:</label></br>
			<?php echo $select; ?>
		</p>

		<p>
			<textarea style="width:100%; min-height:300px" name="content"><?php if($filename) echo getFileContents($filename); ?></textarea>
		</p>

		<p>
			<input type="submit" name="doSave" value="Spara" <?php if(!$isWritable) echo "disabled"; ?>>
			<input type="reset" value="Ångra">
		</p>

		<?php if($isWritable === false): ?>
		<p class="info">Filen är ej skrivbar. Gör den skrivbar med chmod 666 så blir den skrivbar och du kan spara dina ändringar.</p>
		<?php endif; ?>

		<?php if(isset($res)): ?> 
		<p><output class="success"><?php echo $res ?></output></p>
		<?php endif; ?> 

	</fieldset>
</form>