{include file="header.tpl"}

<!-- formulario de edicion de estudiante -->

<form action="editado/{$estudiante->NDNI}" method="POST" class="my-4">
        <div class="row">
                <div class="col-9">
                        <div class="form-group">
                                <div>
                                        <label>Número de DNI:</label>
                                        <input type="number" name="NDNI" id="" value="{$estudiante->NDNI}">
                                </div>
                                <div>
                                        <label>Nombre:</label>
                                        <input type="text" name="Nombre" id="" value="{$estudiante->Nombre}">
                                </div>
                                <div>
                                        <label>Dirección:</label>
                                        <input type="text" name="Direccion" id="" value="{$estudiante->Direccion}">
                                </div>
                                <div>
                                        <label>Telefono:</label>
                                        <input type="number" name="Telefono" value="{$estudiante->Telefono}">
                                </div>
                                <div>
                                        <label>Curso:</label>
                                        <input type="number" name="Curso" value="{$estudiante->Curso}">
                                </div>
                                <div>
                                        <label>División:</label>
                                        <input type="text" name="Division" value="{$estudiante->Division}">
                                </div>


                        </div>
                        {if $error}
                                <div class="alert alert-danger" role="alert">{$error}</div>
                        {/if}

                        <button type="submit" class="btn btn-primary mt-2">Guardar</button>

                </div>
</form>