{include file="header.tpl"}
<!-- formulario de alta de calificaciones -->
<form action="calificacionagregada" method="POST" class="my-4">
        <div class="row">
                <div class="col-9">
                        <div class="form-group">
                                <div>
                                        <label>Número de DNI:</label>
                                        <select name="ndni">
                                                {foreach from =$estudiantes item = $estudiante}
                                                        <option value="{$estudiante->ndni}">{$estudiante->ndni}</option>
                                                {/foreach}
                                        </select>
                                </div>
                                <div>
                                        <label>Materia:</label>
                                        <input type="text" name="materia" id="" required>
                                </div>
                                <div>
                                        <label>Año correspondiente:</label>
                                        <input type="number" name="anio_correspondiente" id="" required>
                                </div>
                                <div>
                                        <label>Docente:</label>
                                        <input type="text" name="docente" required>
                                </div>
                                <div>
                                        <label>Calificación:</label>
                                        <input type="number" name="calificacion" required>
                                </div>

                        </div>


                        <button type="submit" class="btn btn-primary mt-2">Agregar</button>
                </div>
</form>