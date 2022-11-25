<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
  public function postNewsletter() {
    return 'Añadir a newletter';
  }
  public function deleteNewsletter() {
    return 'Baja de la newletter';
  }
}
