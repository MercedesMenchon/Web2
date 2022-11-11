{include file="header.tpl"}
{include file="filtroestudiantes.tpl"}

<!-- tabla de estudiantes -->



<h2>Estudiantes:</h2>

<table class="table table-striped-columns">
    <thead>
        <tr>
            <td>DNI </td>
            <td> Nombre</td>
            <td> Dirección </td>
            <td> Teléfono</td>
            <td> Curso</td>
            <td> División</td>
            {if isset($smarty.session.USER_ID)}
                <td> Edicion</td>
            {/if}
        </tr>
    </thead>
    </tr>

    {foreach from =$estudiantes item= $estudiante}
        <tr class='{if $empleado->ndni}Editar{/if}
        '>
            <td>{$estudiante->ndni}</td>
            <!--accedemos a las propiedades del objeto con ->  -->
            <td>{$estudiante->nombre}</td>
            <td>{$estudiante->direccion}</td>
            <td>{$estudiante->telefono}</td>
            <td>{$estudiante->curso}</td>
            <td>{$estudiante->division}</td>
            {if isset($smarty.session.USER_ID)}
                <td>
                    {if $estudiante->ndni}
                        <a href='editar/{$estudiante->ndni}' type="button" class="btn btn-primary">Editar</a>
                    {/if}
                    <a href='delete/{$estudiante->ndni}' type="button" class="btn btn-primary">Borrar</a>
                </td>
            {/if}
        </tr>
    {/foreach}

</table>

{include file="footer.tpl"}