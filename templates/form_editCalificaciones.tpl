{include file="header.tpl"}
<!-- formulario de alta de calificaciones -->
<form action="calificacioneditada/{$calificacion->id}" method="POST" class="my-4">
        <div class="row">
                <div class="col-9">
                        <div class="form-group">
                                <div>
                                        <label>Número de DNI:</label>
                                        <select name="NDNI" value="{$calificacion->NDNI}">
                                                {foreach from =$estudiantes item = $estudiante}
                                                        <option value="{$estudiante->NDNI}">{$estudiante->NDNI}</option>
                                                {/foreach}
                                        </select>
                                </div>
                                <div>
                                        <label>Materia:</label>
                                        <input type="text" name="Materia" id="" value="{$calificacion->Materia}">
                                </div>
                                <div>
                                        <label>Año correspondiente:</label>
                                        <input type="number" name="Anio_correspondiente" id=""
                                                value="{$calificacion->Anio_Correspondiente}">
                                </div>
                                <div>
                                        <label>Docente:</label>
                                        <input type="text" name="Docente" value="{$calificacion->Docente}">
                                </div>
                                <div>
                                        <label>Calificación:</label>
                                        <input type="number" name="Calificacion" value="{$calificacion->Calificacion}">
                                </div>

                        </div>


                        <button type="submit" class="btn btn-primary mt-2">Editar</button>
                        <button class="btn btn-primary mt-2">Volver</button>
                </div>
</form>