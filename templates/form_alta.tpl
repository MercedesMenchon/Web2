{include file="header.tpl"}
<!-- formulario de alta de estudiante -->
<h2>Ingrese en el formulario los datos de un nuevo estudiante:</h2>
<form action="estudianteagregado" method="POST" class="my-4">
        <div class="row">
                <div class="col-9">
                        <div class="form-group">
                                <div>
                                        <label>Número de DNI:</label>
                                        <input type="number" name="ndni" id="" required>
                                </div>
                                <div>
                                        <label>Nombre:</label>
                                        <input type="text" name="nombre" id="" required>
                                </div>
                                <div>
                                        <label>Dirección:</label>
                                        <input type="text" name="direccion" id="" required>
                                </div>
                                <div>
                                        <label>Telefono:</label>
                                        <input type="number" name="telefono" required>
                                </div>
                                <div>
                                        <label>Curso:</label>
                                        <input type="number" name="curso" required>
                                </div>
                                <div>
                                        <label>División:</label>
                                        <input type="text" name="division" required>
                                </div>


                        </div>
                        {if $error}
                                <div class="alert alert-danger" role="alert">{$error}</div>
                        {/if}

                        <button type="submit" class="btn btn-primary mt-2">Agregar</button>

                </div>
</form>