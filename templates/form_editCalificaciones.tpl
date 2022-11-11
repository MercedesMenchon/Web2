{include file="header.tpl"}
<!-- formulario de alta de calificaciones -->
<form action="calificacioneditada/{$calificacion->id}" method="POST" class="my-4">
        <div class="row">
                <div class="col-9">
                        <div class="form-group">
                                <div>
                                        <label>Número de DNI:</label>
                                        <select name="NDNI" value="{$calificacion->ndni}">
                                                {foreach from =$estudiantes item = $estudiante}
                                                        <option value="{$estudiante->NDNI}">{$estudiante->ndni}</option>
                                                {/foreach}
                                        </select>
                                </div>
                                <div>
                                        <label>Materia:</label>
                                        <input type="text" name="Materia" id="" value="{$calificacion->materia}">
                                </div>
                                <div>
                                        <label>Año correspondiente:</label>
                                        <input type="number" name="Anio_correspondiente" id=""
                                                value="{$calificacion->anio_correspondiente}">
                                </div>
                                <div>
                                        <label>Docente:</label>
                                        <input type="text" name="Docente" value="{$calificacion->docente}">
                                </div>
                                <div>
                                        <label>Calificación:</label>
                                        <input type="number" name="Calificacion" value="{$calificacion->calificacion}">
                                </div>

                        </div>


                        <button type="submit" class="btn btn-primary mt-2">Editar</button>
                        <button class="btn btn-primary mt-2">Volver</button>
                </div>
</form>