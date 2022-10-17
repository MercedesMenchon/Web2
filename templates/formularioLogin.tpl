{include file="header.tpl"}

<form action="login" method="POST" class="my-4">
  <div class="row">
    <div class="col-9">
      <div class="form-group">

        <div>
          <label>Email:</label>
          <input type="text" name="email" id="" required>
        </div>
        <div>
          <label>Clave:</label>
          <input type="password" name="password" id="" required>
        </div>
        {if $error}
          <div class="alert alert-danger" role="alert">{$error}</div>
        {/if}

        <button type="submit" class="btn btn-primary mt-2">Iniciar sesión</button>

      </div>
</form>