<?php

$_SESSION['me'] = "dbwebb.se";
if(isset($_SESSION['counter'])) {
  $_SESSION['counter'] = $_SESSION['counter'] + 1;
}
else
{
  $_SESSION['counter'] = 1;
} 

?>

<p>Du har besökt den här sidan <?php echo $_SESSION['counter']; ?> gånger.</p>

<pre><?php print_r($_SESSION); ?></pre>