<h1>Formulär och post-metoden</h1>
<form method="post" action="?page=kmom03_validate">
 <fieldset>
  <legend>Exempel på formulär med post-metoden</legend> 
  <p>
   <label for="input1">Användarkonto:</label><br>
   <input id="input1" class="text" type="text" name="account">
  </p>
  <p>
   <label for="input2">Lösenord:</label><br>
   <input id="input2" class="text" type="password" name="password">
  </p>
  <p>
   <input type="submit" name="doLogin" value="Login">
  </p>
 </fieldset>
</form>

<h1>Visa innehållet i <code>$_GET</code></h1>
<p>Du anropade sidan med följande querystring:
<code><?php echo $_SERVER['QUERY_STRING']; ?></code></p>
<p><code>$_GET</code> innehåller följande:</p>
<pre><?php print_r($_GET); ?></pre>

<h1>Visa innehållet i <code>$_POST</code></h1>

<p><code>$_POST</code> innehåller följande:</p>
<pre><?php print_r($_POST); ?></pre>

<?php
if(isset($_POST['account'])) {
	echo "<p>Kontot är definierat.</p>";
} else {
	echo "<p>Kontot är EJ definierat</p>";
}
if(is_numeric($_POST['account'])) {
	echo "<p>Kontot är numeriskt.</p>";
} else {
	echo "<p>Kontot är EJ numeriskt.</p>";
}
	echo "<p>Med strip_tags ser kontot ut: '";
	echo strip_tags($_POST['account']);
	echo "'</p>";
?>