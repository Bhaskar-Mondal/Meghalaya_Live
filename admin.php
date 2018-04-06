<?php
 
require( "$_SERVER[DOCUMENT_ROOT]\cms\config.php" );
session_start();
$action = isset( $_GET['action'] ) ? $_GET['action'] : "";
$username = isset( $_SESSION['username'] ) ? $_SESSION['username'] : "";
 
if ( $action != "login" && $action != "logout" && !$username ) {
  login();
  exit;
}
 
switch ( $action ) {
  case 'login':
    login();
    break;
  case 'logout':
    logout();
    break;
  case 'newArticle':
    newArticle();
    break;
  case 'editArticle':
    editArticle();
    break;
  case 'deleteArticle':
    deleteArticle();
    break;
  default:
    listArticles();
}
 
 
function login() {
 
  $results = array();
  $results['pageTitle'] = "Admin Login | MeghalayaLive";
 
  if ( isset( $_POST['login'] ) ) {
 
    
 
    if ( $_POST['username'] == ADMIN_USERNAME && md5($_POST['password']) == ADMIN_PASSWORD ) {
 
      
      $_SESSION['username'] = ADMIN_USERNAME;
      header( "Location: admin.php" );
 
    } else {
 
      
      $results['errorMessage'] = "Incorrect username or password. Please try again.";
      require( TEMPLATE_PATH . "\logger.php" );
    }
 
  } else {
 
    // User has not posted the login form yet: display the form
    require( TEMPLATE_PATH . "\logger.php" );
  }
 
}
 
 
function logout() {
  unset( $_SESSION['username'] );
  header( "Location: admin.php" );
}
unset( $_SESSION['username'] );
?>
