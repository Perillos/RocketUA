<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function getCategory($id) {
    return "Recuperar categoría $id";
  }
}
