<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
  #[Route('/')]
  public function index()
  {
    echo 'Hello World!';
  }
}