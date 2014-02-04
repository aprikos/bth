<?php

$path = dirname(__FILE__) . "/data/"; 
$files = readDirectory($path); 


$filename = null; 
if(isset($_POST['file']) && in_array($_POST['file'], $files))
{
	$filename = $path . $_POST['file']; 
}

$select = 	"<select id='input1' name='file' onchange='form.submit();'>";
$select .= "<option value='-1'>Välj annons</option>";
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


<h1>Visa annons</h1>

<p>Välj den annons du vill visa.</p>

<form method="post">
	<fieldset>
		<p>
			<label for="input1">Annonser:</label><br>
			<?php echo $select; ?> 
		</p>

		<p>
			<div style="background:#eee; border:1px solid #999; padding:1em;">
				<p><?php if($filename) echo getFileContents($filename); ?></p>
			</div>
		</p>

	</fieldset>
</form> 