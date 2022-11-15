{include file="header.tpl"}

<!-- formulario de edicion de estudiante -->

<form action="editado/{$estudiante->ndni}" method="POST" class="my-4">
        <div class="row">
                <div class="col-9">
                        <div class="form-group">
                                <div>
                                        <label>Número de DNI:</label>
                                        <input type="number" name="ndni" id="" value="{$estudiante->ndni}">
                                </div>
                                <div>
                                        <label>Nombre:</label>
                                        <input type="text" name="nombre" id="" value="{$estudiante->nombre}">
                                </div>
                                <div>
                                        <label>Dirección:</label>
                                        <input type="text" name="direccion" id="" value="{$estudiante->direccion}">
                                </div>
                                <div>
                                        <label>Telefono:</label>
                                        <input type="number" name="telefono" value="{$estudiante->telefono}">
                                </div>
                                <div>
                                        <label>Curso:</label>
                                        <input type="number" name="curso" value="{$estudiante->curso}">
                                </div>
                                <div>
                                        <label>División:</label>
                                        <input type="text" name="division" value="{$estudiante->division}">
                                </div>


                        </div>
                        {if $error}
                                <div class="alert alert-danger" role="alert">{$error}</div>
                        {/if}

                        <button type="submit" class="btn btn-primary mt-2">Guardar</button>

                </div>
</form>