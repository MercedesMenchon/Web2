<h4>Filtrar estudiante:</h4>
<form action="filtroestudiante" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <div>
                    <label>Número de DNI:</label>
                    <input type="number" name="NDNI" id="" required>
                </div>

                <button type="submit" class="btn btn-primary mt-2">Filtrar</button>
                {if $error}
                    <div class="alert alert-danger" role="alert">{$error}</div>
                {/if}
</table>