<div class="galleryContainer">
<?php
// TODO wywal to
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$galleryDir = scandir("gallery");
if (sizeof($galleryDir) < 3) {
	// TODO LAST
}

for ($i = 2; $i < sizeof($galleryDir); $i++) {
	if (!is_dir("gallery/" . $galleryDir[$i])) continue;

	$gallery = scandir("gallery/" . $galleryDir[$i]);

	echo '<a href="#"><div class="galleryLink">';
	echo '<img src="gallery/'.$galleryDir[$i].'/'.$gallery[2].'" alt="'.$galleryDir[$i].'">';
	echo '<div class="galleryDesc">' . $galleryDir[$i] . '</div>';
	echo '</div></a>';

}
?>
</div>

<!-- TODO KILL THIS TAG -->


<script>
 function openModal() {
	 document.getElementById('myModal').style.display = "block";
 }

 function closeModal() {
	 document.getElementById('myModal').style.display = "none";
 }

 var slideIndex = 1;
 showSlides(slideIndex);

 function plusSlides(n) {
	 showSlides(slideIndex += n);
 }

 function currentSlide(n) {
	 showSlides(slideIndex = n);
 }

 function showSlides(n) {
	 var i;
	 var slides = document.getElementsByClassName("mySlides");
	 var dots = document.getElementsByClassName("demo");
	 var captionText = document.getElementById("caption");
	 if (n > slides.length) {slideIndex = 1}
	 if (n < 1) {slideIndex = slides.length}
	 for (i = 0; i < slides.length; i++) {
		 slides[i].style.display = "none";
	 }
	 for (i = 0; i < dots.length; i++) {
		 dots[i].className = dots[i].className.replace(" active", "");
	 }
	 slides[slideIndex-1].style.display = "block";
	 dots[slideIndex-1].className += " active";
	 captionText.innerHTML = dots[slideIndex-1].alt;
 }
</script>
