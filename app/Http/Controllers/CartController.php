<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
  public function postCart() {
    return 'Creación del carrito';
  }
  public function getCart($id) {
    return "Recuperación del carrito $id";
  }
  public function postProduct($id) {
    return "Añadir producto al carrito $id";
  }
  public function putCart($id) {
    return "Quitar producto del carrito $id";
  }
  public function deleteLine($id, $id_line) {
    return "Borrar producto $id_line del carrito $id";
  }
  public function postCupon($id) {
    return "Añadir cupón $id";
  }
  public function deleteCupon($id) {
    return "Borrar cupón $id";
  }

}
