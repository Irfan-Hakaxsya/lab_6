<?php

function calculateArea($width, $height) {
    return $width * $height;
}

$width = 4;
$height = 2;

$area = calculateArea($width, $height);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Lab 6 Q3</title>
</head>
<body>
    
    <h3>
    The area of a rectangle with a width of
    <?php echo $width; ?>
    and
    <?php echo $height; ?>
    is
    <?php echo $area; ?>
    </h3>

</body>
</html>
