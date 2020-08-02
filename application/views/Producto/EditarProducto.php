<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="alert alert-danger" role="alert">
            FAVOR RECORDAR QUE ESTO NO ES UN JUEGO Y <b>NO SE PUEDE REINICIAR</b>
        </div>
    </div>
    <div class="col-md-8">
        <h4>
            Esta acción no se recomienda ejecutar a menos de que todo el equipo de la
            empresa este al tanto de esta desición. Así que <b>MUCHO CUIDADO.</b>
        </h4>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-md-8">
    <form action="" method="post">
        <div class="form-group">
            <!-- CUIDADO: ESTE INPUT CONTIENE EL ID DEL PRODUCTO A EDITAR. -->
            <!-- FAVOR NO TOCAR -->
            <input type="hidden" class="form-control">
        </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="">
            </div>
            <div class="form-group align-self-end">
                <a href="<?php base_url(); ?>ListaDeProductos" class="btn btn-danger p-3">Atrás</a>
                <button class="btn btn-success p-3" type="submit" title="NOTA: El producto sera editado.">
                    Editar nuevo producto
                </button>
            </div>
        </form>
    </div>
</div>