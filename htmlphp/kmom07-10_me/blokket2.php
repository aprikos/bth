<?php include("incl/config.php"); 

 $pageId = "blokket2";
 $title = "Blokket2";

$dbPath = dirname(__FILE__) . "/incl/blokket2/data/blokket2.sqlite";

$p = null;
if(isset($_GET["p"])) 
{
  $p = $_GET["p"];
}

// Is the page known?
$path = "incl/blokket2";
$file = null;
switch($p) 
{
  case "init":
  {
    $pageTitle   = "Initiera annonserna";
    $file        = "init.php";
    break;
  }

  case "update": 
  {
    $pageTitle   = "Visa och uppdatera annonserna"; 
    $file        = "update.php";
    break;
  }
  case "create": 
  {
    $pageTitle   = "Skapa ny annons"; 
    $file        = "create.php";
    break;
  }

  case "delete": 
  {
    $pageTitle   = "Radera annons";
    $file        = "delete.php";
    break;
  }

  case "read": 
  {
    $pageTitle   = "Visa annons"; 
    $file        = "read.php"; 
    break;
  }
  
  case "read-all": 
  {
    $pageTitle   = "Visa alla annonser"; 
    $file        = "read_all.php"; 
    break; 
  }
  default:
  {
    $pageTitle   = "Välkommen till Blokket!";
    $file        = "default.php";
  }
}

 include("incl/header.php"); 
?>

  <aside>
    <?php include("$path/aside.php"); ?>
  </aside>
<article id="testcontent">
  <?php include("$path/$file"); ?>
</article>

<br style="clear:both;"/>
<?php include("incl/footer.php"); ?>
