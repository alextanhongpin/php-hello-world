<?php
	$header = $_POST["title"] ?? "title";
?>

<h1><?="$header"?></h1>
<form method="post">
	<input type="text" name="title" value="<?=$header?>"/>
	<button>Submit</button>
</form>
