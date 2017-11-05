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
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm">
                    <form class="form-horizontal">
                        <fieldset>
                            <legend class="text-center tittle-form">Registrar producto:</legend>

                            <div class="form-group">

                                <div class="col-md-8 col-md-offset-2">
                                    <input name="name" type="text" placeholder="Nombre del producto" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-md-8 col-md-offset-2">
                                    <input name="des" type="text" placeholder="Descripcion" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-md-8 col-md-offset-2">
                                    <input name="phone" type="text" placeholder="Stack" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-md-8 col-md-offset-2">
                                    <input name="cant" type="text" placeholder="Cantidad" class="form-control" required>
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-2">
                                    <form class="form-inline">
                                        <div class="form-group col-md-10 ">
                                            <div class="input-group">
                                                <div class="input-group-addon">$</div>
                                                <input type="text" class="form-control" placeholder="Valor del producto">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-2">
                                    <label for="InputFile">Agregar imagen</label>
                                    <input type="file" id="InputFile">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-2">
                                    <input class="btn btn-primary btn-lg" type="submit" value="Registrar" href="#">
                                </div>
                            </div>



                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
