<?php
$images = array('kinkakuli', 'maiko', 'maiko_phone', 'monk', 'fountains', 'menu', 'basin');
$i = rand(0, count($images)-1);
$selectedImage = "images/".$images[$i].'.jpg';

if(file_exists($selectedImage) && is_readable($selectedImage)){
    $imagesize = getimagesize($selectedImage);

}




?>

<div id="pictureWrapper">
    <img src="<?php echo $selectedImage; ?>" alt="Random image"  class="picBorder" <?php echo $imagesize[3]; ?>>

</div>