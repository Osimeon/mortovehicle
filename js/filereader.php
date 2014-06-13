<?php
	$file = file('functions.js');
	$lines = count($file);
	$alt = '';
	
	$file_a =file_get_contents('functions.js');
	$file_a = strip_tags($file_a);
	
	for($i = 0; $i < $lines; $i++){
		$alt = ($alt == 'even') ? 'odd' : 'even';
		echo '<div class="' . $alt . '">';
		echo $i . ': ' . htmlspecialchars($file[$i]);
		echo "</div>\n";
	}
	
	
	echo "<form>";
		echo "<textarea>";
			echo htmlspecialchars($file_a);
		echo "</textarea>";
	echo "</form>";
?>