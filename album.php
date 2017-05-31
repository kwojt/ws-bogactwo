<div class="album-grid">
	<div id="grid-sizer"></div>
	<?php

	$albumName = urldecode($_GET["album"]);
	if ($albumName == "") echo "Błąd: brak adresu albumu.";

	$albumDir = scandir("gallery/".$albumName);

	for ($i = 2; $i < sizeof($albumDir); $i++) {

		if (is_dir("gallery/".$albumName."/".$albumDir[$i])) continue;
		
		echo '<a href="gallery/'.$albumName.'/'.$albumDir[$i].'" data-lightbox="album">';
		echo '<img class="album-grid-item" src="gallery/'.$albumName.'/thumbs/'.$albumDir[$i].'" alt="'.$albumDir[$i].'">';
		echo '</a>';

	}
	?>
</div>
