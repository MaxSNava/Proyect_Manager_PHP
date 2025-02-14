<div class="contenedor reestablecer">
  <?php include_once __DIR__ . '/../templates/nombre-sitio.php' ?>
  <div class="contenedor-sm">
    <p class="descripcion-pagina">Coloca tu nueva contraseña</p>
    <form class="formulario" action="/reestablecer" method="post">

      <div class="campo">
        <label for="password">Password</label>
        <input
          type="password"
          id="password"
          name="password"
          placeholder="Tu Password" />
      </div>

      <input
        type="submit"
        class="boton"
        value="Guardar Contraseña" />
    </form>
    <div class="acciones">
      <a href="/crear">¿Aún no tienes cuenta?</a>
      <a href="/olvide">¿Olvidaste tu contraseña?</a>
    </div>
  </div>
</div>