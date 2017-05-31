<div class="galleryContainer">
<?php

$galleryDir = scandir("gallery");

for ($i = 2; $i < sizeof($galleryDir); $i++) {
	if (!is_dir("gallery/" . $galleryDir[$i])) continue;

	$gallery = scandir("gallery/" . $galleryDir[$i]);

	echo '<a href="?album='.urlencode($galleryDir[$i]).'"><div class="galleryLink">';
	echo '<img src="gallery/'.$galleryDir[$i].'/thumbs/'.$gallery[2].'" alt="'.$galleryDir[$i].'">';
	echo '<div class="galleryDesc">' . $galleryDir[$i] . '</div>';
	echo '</div></a>';

}
?>
</div>
