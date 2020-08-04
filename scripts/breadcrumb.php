<?php

$topNav = '';
$sideNav = '';
    
if (isset($_GET['top_nav'])) { 
  $topNav = $_GET['top_nav'];
  echo '#header-nav a:hover, #' . $topNav . ' a {';
}
else {
  echo '#header-nav a:hover, #home a {';
}
echo 'color:rgb(230,241,255);';
echo 'border-color:rgb(255,179,179);';
echo 'border-bottom-style:solid;';
echo 'border-width: 0 0 5px 0;';
echo '}';

if (isset($_GET['side_nav'])) { 
  $sideNav = $_GET['side_nav'];
  echo '#navigation a:hover, #' . $sideNav . ' a {';
  echo 'color: rgb(0, 77, 153);';
  echo 'border-top:solid 0.25px;';
  echo 'border-top-color: rgb(128, 189, 255);';
  echo 'border-bottom:solid 0.5px;';
  echo 'border-bottom-color: rgb(204, 229, 255);';
  echo 'background: rgb(153,202,255);';
  echo 'background: -webkit-linear-gradient(rgba(153, 202, 255, 0.65), rgba(153, 202, 255, 0.4));';
  echo 'background:    -moz-linear-gradient(rgba(153, 202, 255, 0.65), rgba(153, 202, 255, 0.4));';
  echo 'background:         linear-gradient(rgba(153, 202, 255, 0.65), rgba(153, 202, 255, 0.4));';
  echo '}';
}

?>
