<?php
include('nk26.php');

$encode      = $_GET['encode'];
$encode_safe = $_GET['encode_safe'];
$decode      = $_GET['decode'];

if($encode) {
    $encoded = nk26_encode($encode);
    echo "$encode";
    echo '<pre>';
    echo "$encoded";
}

if($encode_safe) {
    $encoded = nk26_encode_safe($encode_safe);
    echo "$encode_safe";
    echo '<pre>';
    echo "$encoded";
}


if($decode) {
    $decoded = nk26_decode($decode);
    echo "$decode";
    echo '<pre>';
    echo "$decoded";
}