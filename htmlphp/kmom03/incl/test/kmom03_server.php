<h1>Visa innehållet i <code>$_SERVER</code></h1>

<p>Länken till denna sidan: 
	<a href="<?php echo getCurrentUrl(); ?>"><?php echo getCurrentUrl(); ?></a>

<p><code>$_SERVER</code> innehåller följande:</p>
<pre><?php echo htmlentities(print_r($_SERVER, true)) ?></pre>


