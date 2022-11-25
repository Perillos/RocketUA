<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  public function postLogin() {
    return 'Login';
  }
  public function postRegister() {
    return 'Creación de usuario';
  }
  public function putUser($id) {
    return "Actualización de usuario $id";
  }
  public function deleteUser($id) {
    return "Baja de usuario $id";
  }
  public function getFavorite($id) {
    return "Listado de favoritos $id";
  }
  public function postFavorite($id, $product) {
    return "Añadir a favoritos $id $product";
  }
  public function deleteFavorite($id, $product) {
    return "Eliminar a favoritos $id $product";
  }
  public function getOrders($id) {
    return "Listado de pedidos $id";
  }
  public function getComments($id) {
    return "Listado de comentarios del usuario $id";
  }
}
