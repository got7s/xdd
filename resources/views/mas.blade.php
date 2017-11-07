@extends('layouts.app')


@section('content')

<img class="imgMas" src="img/arena.jpg" >

<b><p class="pricetext" style="font-size: 50px;">$50.000</p></b>

<div class="container">

  <h1 class="know2">Nombre: Minerales.</h1>
  <h2>Incluye minerales como :</h2><br>
  <h3><ol>
    <li>cobre</li>
    <li>hierro</li>
    <li>manganeso</li>
    <li>plomo</li>
    <li>zinc</li>
    <li>titanio</li>
  </ol> 
</h3>


<a href="javascript: cargar('carrito.html','get', mostrar)" class="btn btn-default " title="Añadir a mi lista de deseos" rel="nofollow"><span class="glyphicon glyphicon-heart" style="color: red;"></span> Añadir al carrito</a>

<a href="index.html" class="btn btn-default " title="Atras" rel="nofollow">Atras</a>


<br><br>
<a href="javascript: cargar('carrito.html','get', mostrar)">
  <span class="glyphicon glyphicon-shopping-cart"
  style="color:#fff; font-size: 35px; "></span> Carrito 0$ COP </a>



  <div class="stars">
   <a href="#" data-value="1" title="Votar: 1 estrellas">&#9733;</a>
   <a href="#" data-value="2" title="Votar: 2 estrellas">&#9733;</a>
   <a href="#" data-value="3" title="Votar: 3 estrellas">&#9733;</a>
   <a href="#" data-value="4" title="Votar: 4 estrellas">&#9733;</a>
   <a href="#" data-value="5" title="Votar: 5 estrellas">&#9733;</a>
 </div>

</div>
@endsection