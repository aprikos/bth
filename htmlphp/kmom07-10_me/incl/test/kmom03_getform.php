<h1>Formulär och get-metoden</h1>
<form method="get" action="?">
	<input type="hidden" name="page" value="kmom03_getform">
 <fieldset>
  <legend>Exempel på formulär med get-metoden</legend> 
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

<?php echo htmlentities($_SERVER['QUERY_STRING']); ?>

<h1>Visa innehållet i <code>$_GET</code></h1>
<p>Du anropade sidan med följande querystring:
<code><?php echo $_SERVER['QUERY_STRING']; ?></code></p>
<p><code>$_GET</code> innehåller följande:</p>
<pre><?php print_r($_GET); ?></pre>