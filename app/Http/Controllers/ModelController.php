<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModelController extends Controller
{
  public function getModel($id) {
    return "Recuperar un modelo $id";
  }
  public function getComment($id) {
    return "Lista de comentarios del modelo $id";
  }
}
