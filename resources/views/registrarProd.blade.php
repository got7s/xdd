@extends('layouts.app')

@section('content')
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
@endsection