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
    
    <div class="container">
		<img class="efect" src="img/car.png" alt="">
	</div>
	<br>

  
    <div class="container">
		<table class="table table-striped">
			<thead>
				<tr>
				    <td class="n">Cantidad</td>
					<td class="n">Producto</td>
					<td class="n">Precio Unidad</td>
					<td class="n">Precio Total</td>
					<td></td>
				</tr>
			</thead>
			
			<tbody>
				<tr>
				    <td>4</td>
					<td>Brawnie</td>
					<td>$35.000</td>
					<td>$140.000</td>
                    <td><buttom class="glyphicon glyphicon-folder-close"></buttom></td>
				</tr>
				
				<tr>
				    <td>4</td>
					<td>Brawnie</td>
					<td>$35.000</td>
					<td>$140.000</td>
                    <td><buttom class="glyphicon glyphicon-folder-close"></buttom></td>
				</tr>
				
				<tr>
				    <td></td>
					<td></td>
					<td>Total</td>
					<td>$280.000</td>
                    <td><buttom class="glyphicon glyphicon-folder-close"></buttom></td>
				</tr>
				
			</tbody>
		</table>

		<br>
		<br>
		<br>
		<div class="form-group">
			<div class="col-md-12 col-md-offset-3 text-center">
				<input class="btn btn-primary btn-lg" type="submit" value="Comprar" href="#">
				<input class="btn btn-primary btn-lg" type="submit" value="Volver" href="#">
			</div>
		</div>

	</div>

   <br>
   <br>
   <br>
   <br>
   <br>
   	<section class="baner">
		<h4 class="or"> Esperamos que realices tu compra y disfrutes nuestros productos de alta calidad! <i class="fa fa-diamond fa-1x" aria-hidden="true"></i> <a href="http://www.icecream.com.ar/site/" target="_blank" > <span class="glyphicon social-instagram

"></span>CupAntojitos</a></h4>

	</section>
    
</body>
</html>