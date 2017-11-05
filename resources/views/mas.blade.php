<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CupAntojitos</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">

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

<body>
    
   
			<img class="imgMas" src="img/cup-1.jpg" >
			
		<b><p class="pricetext" style="font-size: 50px;">$50.000</p></b>

	<div class="container">
		
		<h1 class="know2">Nombre: Desayuno sorpresa.</h1>
		<h2>Espectacular detalle, incluye:</h2><br>
		<h3>Delicioso Cupcake decorado <br>
		Sandwich de jamon y queso con verduras salteadas<br>
		Ensalada de frutas<br>
		Caja de dulces Cerveza corona Importada 710 ml<br>
		Vaso en cristal con sticker<br>
		Caja decorada<br>
		Bombas<br>
		Tarjeta personalizada</h3>
		
		
		<a href="javascript: cargar('carrito.html','get', mostrar)" class="btn btn-default " title="Añadir a mi lista de deseos" rel="nofollow"><span class="glyphicon glyphicon-heart" style="color: red;"></span> Añadir a mi lista de deseos</a>

		<a href="index.html" class="btn btn-default " title="Atras" rel="nofollow">Atras</a>

		

			<a href="javascript: cargar('carrito.html','get', mostrar)">
				<span class="glyphicon glyphicon-shopping-cart"
				style="color:#fff;"></span> Carrito 0$ COP </a>



				<div class="stars">
					<a href="#" data-value="1" title="Votar: 1 estrellas">&#9733;</a>
					<a href="#" data-value="2" title="Votar: 2 estrellas">&#9733;</a>
					<a href="#" data-value="3" title="Votar: 3 estrellas">&#9733;</a>
					<a href="#" data-value="4" title="Votar: 4 estrellas">&#9733;</a>
					<a href="#" data-value="5" title="Votar: 5 estrellas">&#9733;</a>
				</div>

			</div>
    
</body>
</html>