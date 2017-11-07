@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal">
                    <fieldset>
                        <legend class="text-center tittle-form">Registrar bodega:</legend>

                        <div class="form-group">

                            <div class="col-md-8 col-md-offset-2">
                                <input name="nameB" type="text" placeholder="Numero de la bodega " class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-md-8 col-md-offset-2">
                                <input name="desB" type="text" placeholder="Descripcion" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-md-8 col-md-offset-2">
                                <input  name="ubicacion" type="text" placeholder="Ubicacion de  la bodega" class="form-control" required>
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
@endsection