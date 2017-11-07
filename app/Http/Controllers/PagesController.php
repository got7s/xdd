<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
	public function home(){
		return view('index');
	}

	public function registrar(){
		return view('registrarProd');
	}

	public function vender(){
		return view('vender');
	}

	public function entrada(){
		return view('entrada');
	}


	public function ajuste(){
		return view('ajuste');
	}


	public function registrarBodega(){
		return view('registrarBodega');
	}


	public function carrito(){
		return view('car');
	}

	public function mas(){
		return view('mas');
	}

}
