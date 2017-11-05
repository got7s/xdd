@extends('layouts.app')

@section('header')

<header>
    <nav class="navbar navbar-inverse nave" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Desplegar navegación</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"> MINERA MONGO S.A.S.
					<img class="nicdark_width_fix_100 nicdark_absolute_left nicdark_absolute nicdark_margintop0 nicdark_rotate" alt="" src="img/logo.png">	</a>
        </div>

        <div class="col-md-2"></div>

        <div class="collapse navbar-collapse navbar-ex1-collapse col-md-10">
            <ul class="nav navbar-nav ">

                <li class="dropdown navbar-left">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
								Productos<b class="caret"></b>
							</a>
                    <ul class="dropdown-menu">
                        <li><a href="registrarProd.html">Registrar</a></li>
                        <li class="divider"></li>
                        <li><a href="vender.html">Comprar</a></li>
                        <li class="divider"></li>
                        <li><a href="entrada.html">Entrada</a></li>
                        <li class="divider"></li>
                        <li><a href="ajuste.html">Ajustar</a></li>

                    </ul>
                </li>

                <li class="dropdown navbar-left">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
								Bodega<b class="caret"></b>
							</a>
                    <ul class="dropdown-menu">
                        <li><a href="registrarBodega.html">Registrar</a></li>
                    </ul>
                </li>

                <li class="navbar-right">
                    <a href="#">
                        <span class="glyphicon glyphicon-share-alt" style="color:#fff; "></span> Registrate!</a>
                </li>

                <li class="navbar-right ">
                    <a href="#"><span class="glyphicon glyphicon-user" 
								style="color:#fff;"></span> Iniciar Sesión</a>
                </li>

                <li class="navbar-right">
                    <a href="">
                        <span class="glyphicon glyphicon-shopping-cart" style="color:#fff;"></span> Carrito 0$ COP </a>
                </li>
            </ul>
        </div>
    </nav>

</header>

@endsection