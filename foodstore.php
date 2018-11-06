<?php
//creates xml content

header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';

echo '<response>';
$product = $_GET['product'];
$productArray = array('pipi','kalamu','daftari');
if(in_array($product,$productArray))
    echo "Ingiza Bei Ya ".$product;
elseif ($product=='')
    echo 'Enter a Product';
else
    echo 'Sorry we don\'t sell '.$product.'!';
echo '</response>';
?>