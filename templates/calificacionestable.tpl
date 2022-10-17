{include file="header.tpl"}




<!-- tabla de estudiantes -->

<h1>ESCUELA</h1>

{include file="filtrocalificaciones.tpl"}

<div>
    {if $error}
        <div class="alert alert-danger" role="alert"> {$error}</div>
    {/if}
</div>

<h2>Calificaciones:</h2>

<table class="table table-striped-columns">
    <thead>
        <tr>
            <td>ID Comprobante </td>
            <td>DNI </td>
            <td>Materia</td>
            <td>Año correspondiente </td>
            <td>Docente</td>
            <td>Calificación</td>
            {if isset($smarty.session.USER_ID)}
                <td> Edicion</td>
            {/if}

    </thead>
    </tr>

    {foreach from =$calificaciones item= $calificacion}
        <tr>
            <td>{$calificacion->id}</td>
            <td>{$calificacion->NDNI}</td>
            <td>{$calificacion->Materia}</td>
            <td>{$calificacion->Anio_Correspondiente}</td>
            <td>{$calificacion->Docente}</td>
            <td>{$calificacion->Calificacion}</td>
            {if isset($smarty.session.USER_ID)}
                <td> {if $calificacion->NDNI}
                        <a href='editarcalificacion/{$calificacion->id}' type="button" class="btn btn-primary">Editar</a>
                    {/if}
                    <a href='deletecalificacion/{$calificacion->id}' type="button" class="btn btn-primary">Borrar</a>
                </td>
            {/if}
        </tr>
    {/foreach}

</table>

{include file="footer.tpl"}