@extends('layouts.app')


@section('content')
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
@endsection