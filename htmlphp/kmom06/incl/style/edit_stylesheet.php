<?php

$pathToStyles = dirname(__FILE__) . "/../../style/";
$stylesheets = readDirectory($pathToStyles);


$filename = null; 
$isWritable = null; 
if(isset($_POST['stylesheet']) && in_array($_POST['stylesheet'], $stylesheets))
  { 
    $filename = $pathToStyles . $_POST['stylesheet']; 
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
  $resFromSave = putFileContents($filename, strip_tags($_POST['styleContent']));
}


$stylesheets = readDirectory("style/");

$select = "<select id='input1' name='stylesheet' onchange='form.submit();'>";
$select .= "<option value='-1'>Webbplatsens standard stylesheet</option>";
foreach($stylesheets as $val) 
{
  $selected = "";
  if(isset($_POST['stylesheet']) && $_POST['stylesheet'] == $val) 
  {
    $selected = "selected";
  }
  $select .= "<option value='{$val}' {$selected}>{$val}</option>";
}
$select .= "</select>";


?>

<h1>Editera stylesheet</h1>

<p>Välj den stylesheet som du vill ändra. Du kan välja bland de stylesheets som ligger
i katalogen <code>style/</code>.</p>

<form method="post" action="?p=edit-stylesheet">
  <fieldset>
    <p>
      <label for="input1">Stylesheet:</label><br>
      <?php echo $select; ?>
    </p>

    <p>
      <textarea style="width:100%; min-height:300px" name="styleContent"><?php 
        if($filename) echo getFileContents($filename); ?></textarea>
    </p>

    <p>
      <input type="submit" name="doSave" value="Spara" <?php if(!$isWritable) echo "disabled"; ?>>
      <input type="reset" value="Ångra">
    </p>

    <?php if($isWritable === false): ?>
      <p>Filen är inte skrivbar. Gör den skrivbar genom att ändra skrivrättigheter till chmod 666.</p>
    <?php endif; ?> 

    <?php if(isset($resFromSave)): ?>
      <p>
        <output class="success"><?php echo $resFromSave; ?></output>
      </p>
    <?php endif; ?>

    <p>
      <?php 
      if(isset($_SESSION['stylesheet']))
      {
        echo "Din nuvarande stylesheet är '{$_SESSION['stylesheet']}'.";
      }
      else
      {
        echo "Du använder webbplatsens standard stylesheet.";
      }
      ?>
    </p>

  </fieldset>
</form>

<p>Detta formulär använder en funktion i <code>src/common.php</code>, funktionen, <code>readDirectory()</code>, läser 
innehållet i en katalog på disk och returnerar en array med de filer som ligger i katalogen. 
<a href="viewsource.php?dir=src&amp;file=common.php#file">Källkoden hittar du här</a>.</p>

<p>När formuläret postas så är det en speciell processing-sida som tar hand om det. 
<a href="viewsource.php?dir=incl/style&amp;file=choose_stylesheet_process.php#file">Studera källkoden för processing-sidan</a>.</p>
