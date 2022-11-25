<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
  public function getMenus() {
    return 'Recuperar menús';
  }
  public function getMenu($id) {
    return "Recuperar un menú $id";
  }
}
