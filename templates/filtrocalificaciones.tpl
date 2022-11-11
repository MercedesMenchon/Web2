<form action="filtroCalificacionByEstudiante" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <div>
                    <label>Número de DNI:</label>
                    <select name="ndni" value="{$calificacion->ndni}">
                        {foreach from =$estudiantes item = $estudiante}
                            <option value="{$estudiante->ndni}">{$estudiante->ndni}</option>
                        {/foreach}
                    </select>

                    <button type="submit" class="btn btn-primary mt-2">Filtrar por dni</button>
                </div>
</form>


<form action="filtroCalificacionByID" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <div>
                    <label>Número de comprobante:</label>
                    <input type="text" name="id" id="" required>

                    <button type="submit" class="btn btn-primary mt-2">Filtrar por comprobante</button>
                </div>
</form>