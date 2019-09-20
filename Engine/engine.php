<?php
/**
 
**/
ini_set('display_errors', "Off");

function headers() {
  include "./Engine/header.php";
  return true;
}

function footers() {
  include "./Engine/footer.php";
  return true;
}

$javascript = [];
function include_javascript( $dir = "" ) {
  global $javascript;
  $javascript[] = $dir;
}

function return_javascript() {
  global $javascript;
  return $javascript;
}

$CSS = [];
function include_css( $dir = "" ) {
  global $CSS;
  $CSS[] = $dir;
}

function return_css() {
  global $CSS;
  return $CSS;
}


?>
