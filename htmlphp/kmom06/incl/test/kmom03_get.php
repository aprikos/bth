<?php echo htmlentities($_SERVER['QUERY_STRING']); ?>

<h1>Visa inneh�llet i <code>$_GET</code></h1>
<p>Du anropade sidan med f�ljande querystring:
<code><?php echo $_SERVER['QUERY_STRING']; ?></code></p>
<p><code>$_GET</code> inneh�ller f�ljande:</p>
<pre><?php print_r($_GET); ?></pre>


