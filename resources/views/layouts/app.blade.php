<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>MINERA MONGO S.A.S.</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../bootstrap/js/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../../bootstrap/css/style.css">
<link rel="stylesheet" href="{{ asset("bootstrap/css/style.css") }}">

</head>


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
                        <li><a href="/registrar">Registrar</a></li>
                        <li class="divider"></li>
                        <li><a href="/vender">Comprar</a></li>
                        <li class="divider"></li>
                        <li><a href="/entrada">Entrada</a></li>
                        <li class="divider"></li>
                        <li><a href="/ajuste">Ajustar</a></li>

                    </ul>
                </li>

                <li class="dropdown navbar-left">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
								Bodega<b class="caret"></b>
							</a>
                    <ul class="dropdown-menu">
                        <li><a href="/registrarBodega">Registrar</a></li>
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
                    <a href="/carrito">
                        <span class="glyphicon glyphicon-shopping-cart" style="color:#fff;"></span> Carrito 0$ COP </a>
                </li>
            </ul>
        </div>
    </nav>

</header>

<body>



@yield('content')

</body>

<footer>
Todos los derechos reservados © MINERA MONGO S.A.S. Aplica tèrminos y condiciones. UFPS San Jose de Cucuta, Norte de Santander
</footer>

</html>