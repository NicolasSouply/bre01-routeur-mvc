<?php


class PageController {

  public function __construct() 
  {

  }
  public function home(): void {
    $route = "home";
    require "templates/layout.phtml";
    echo "Bienvenue sur la page d'accueil.";
}

// Méthode pour afficher la page à propos
public function about(): void {
  $route =  "about";
  require "templates/layout.phtml";
    echo "Bienvenue sur la page à propos.";
}

// Méthode pour afficher la page 404
public function notFound(): void {
  $route = "404";
  require "templates/layout.phtml";
    echo "Erreur 404 : Page non trouvée.";
}
  
}