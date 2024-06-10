<?php
//faire le lien avec la page "PageController.php"


class Router {
private $pageController;

  public function __construct() 
  {
    $this->pageController = new PageController();
  }

public function handleRequest( array $get) :void 
{
  if( isset( $get["route"] ) && $get["route"] === "about") 
  {
$this->pageController->about( );
  } elseif (!isset($get['route'])) 
  {
$this->pageController->home();
  } else 
  {
$this->pageController->notFound();
  }
}
  
}