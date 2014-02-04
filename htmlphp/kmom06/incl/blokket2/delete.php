<?php

$db = new PDO("sqlite:$dbPath");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); 

if(isset($_POST['doDelete'])) {

  $ad[] = $_POST["ads"];

  $stmt = $db->prepare("DELETE FROM Ads WHERE id=?");
  $stmt->execute($ad);
  $output = "Raderade annons. Rowcount is = " . $stmt->rowCount() . ".";
}

$stmt = $db->prepare('SELECT * FROM Ads;');
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

$select = "<select id='input1' name='ads'>";
foreach($res as $ad) {
  $select .= "<option value='{$ad['id']}'>{$ad['title']} ({$ad['id']})</option>";
}
$select .= "</select>";

?>

<h1>Ta bort en annons</h1>

<p>Välj en annons och klicka knappen "Radera" för att ta bort annonsen.</p>

<form method="post">
  <fieldset>
    <p>
      <label for="input1">Befintliga annonser:</label><br>
      <?php echo $select; ?>
    </p>
    
    <p>
      <input type="submit" name="doDelete" value="Radera">
    </p>
        
    <?php if(isset($output)): ?>
    <p><output class="info"><?php echo $output ?></output></p>
    <?php endif; ?>

  </fieldset>
</form>
