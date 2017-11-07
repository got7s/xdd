@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal">
                    <fieldset>
                        <legend class="text-center tittle-form">Ajuste de cantidad de productos:</legend>

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
                            <input name="des" type="text" placeholder="Descripcion" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">

                        <div class="col-md-8 col-md-offset-2">
                            <input  name="newCant" type="text" placeholder="Nueva cantidad" class="form-control" required>
                        </div>
                    </div>

                    

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-2">
                            <input class="btn btn-primary btn-lg" type="submit" value="Ajustar" href="#">
                        </div>
                    </div>


                </fieldset>
            </form>
        </div>
    </div>
</div>
</div>
@endsection