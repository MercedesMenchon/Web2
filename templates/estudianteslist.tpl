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
        <tr class='{if $empleado->NDNI}Editar{/if}
        '>
            <td>{$estudiante->NDNI}</td>
            <!--accedemos a las propiedades del objeto con ->  -->
            <td>{$estudiante->Nombre}</td>
            <td>{$estudiante->Direccion}</td>
            <td>{$estudiante->Telefono}</td>
            <td>{$estudiante->Curso}</td>
            <td>{$estudiante->Division}</td>
            {if isset($smarty.session.USER_ID)}
                <td>
                    {if $estudiante->NDNI}
                        <a href='editar/{$estudiante->NDNI}' type="button" class="btn btn-primary">Editar</a>
                    {/if}
                    <a href='delete/{$estudiante->NDNI}' type="button" class="btn btn-primary">Borrar</a>
                </td>
            {/if}
        </tr>
    {/foreach}

</table>

{include file="footer.tpl"}