<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\controllers\CartController;
use App\User;
class PurchaseController extends Controller
{
    //
    public function realizarVenta(){
        $idUserLogueado=auth()->user()->id;
        $carrito=new CartController();
        $carrito=$carrito->obtenerCarrito();
        $user=User::find($idUserLogueado);
        return view('/compra',compact('user','carrito'));
    }

    public function verCompra(){

    }
}