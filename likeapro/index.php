<?php
// ------------------------------------------------------------------------
// Maak het onderstaande script werkend:
// Vul de code aan en zorg dat de include-bestanden in de juiste map staan
// ------------------------------------------------------------------------

// Settigs
// hier komt de header sectie etc.


// hier komt de navigatie


// hier komt de footer
include 'views/footer.php';
include 'views/head.php';
include 'views/head.php';
include 'views/header.php';
include 'views/menu.php';

$action = isset($_GET['page']) ? $_GET['page'] : 'home';
switch ($action) {
  case 'home':
include 'views/home.php';
    break;
  case 'articles':
  include 'views/articles.php';
    break;
    case 'about':
    include 'views/about.php';
      break;
      case 'contact':
      include 'views/contact.php';
        break;
}


 include 'views/footer.php'; ?>
