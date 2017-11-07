@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal">
                    <fieldset>
                        <legend class="text-center tittle-form">Entrada de productos :
                        </legend>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                             <label class="control-label" for="inputE">Producto: </label><br>
                             <select id="inputE" class="form-control">
                                <option>Pastel</option>
                                <option>Cupckage</option>
                                <option>Galletas</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-2">
                         <label class="control-label" for="inputE">Bodega donde se va a guardar el producto: </label><br>
                         <select id="inputE" class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">

                    <div class="col-md-8 col-md-offset-2">
                        <input name="cantNewE" type="text" placeholder="Cantidad" class="form-control" required>
                    </div>
                </div>

                
                
                
                

                <div class="form-group">

                    <div class="col-md-8 col-md-offset-2">
                        <input name="iva" type="text" placeholder="IVA del producto" class="form-control" required>
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
                        <input class="btn btn-primary btn-lg" type="submit" value="Actualizar" href="#">
                    </div>
                </div>


            </fieldset>
        </form>
        
    </div>
</div>
</div>
@endsection
