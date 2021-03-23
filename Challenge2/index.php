<html>
<h3> is this really numeric? </h3>
<a href ="Challenge2\source.txt"> Click here </a>
</html>
<?php
$dev = $_GET['number'];
$flag = "FLAG{YOU-SOLVED-YOUR-SECOND-CHALLENGE}";
if (isset($dev)) {
	if (is_numeric($dev)){
		if (!strpos($dev, ".")){
			if (strlen($dev) > 6){
				if ($dev < 99999 && $dev > 90000)
				echo 'Flag:  '.$flag;
				else
				print '<div class="alert">Oh Oh Think again</div>';
			} else
				print '<h1>Wrong Move Champ</h1>';
		} else
		print '<h1>Not That hard . keep trying</h1>';	
	} else
		print '</h1>Just read the source code once again</h1>';
}
?>