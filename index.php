<?php

$action = isset( $_GET['action'] ) ? $_GET['action'] : "";
 
switch ( $action ) {
  case 'attractions':
    attractions();
    break;
  case 'viewArticle':
    viewArticle();
    break;
  default:
    homepage();
}
function homepage() {
  $results = array();
  $results['pageTitle'] = "MeghalayaLive - Home";
  require( "$_SERVER[DOCUMENT_ROOT]\cms\homepage.php" );
}
 
function attractions() {
	$results = array();
	$results['pageTitle'] = "Attractions";
	require ("$_SERVER[DOCUMENT_ROOT]\cms\attract.php");
}
?>