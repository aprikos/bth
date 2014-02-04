<strong>Test Form</strong>
<form action="" method"post">
<input type="text" name="picturenum"/>
<input type="submit" name="Submit" value="Submit!" />
</form>

<? 
if (isset($_POST['Submit'])) { 
$_session['picturenum'] = $_POST['picturenum'];
} 
?> 

<strong><? echo $_session['picturenum'];?></strong>