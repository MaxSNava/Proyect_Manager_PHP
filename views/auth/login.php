<div class="contenedor login">
  <?php include_once __DIR__ . '/../templates/nombre-sitio.php' ?>
  <div class="contenedor-sm">
    <p class="descripcion-pagina">Iniciar Sesión</p>
    <form class="formulario" action="/" method="post">
      <div class="campo">
        <label for="email">Email</label>
        <input
          type="email"
          id="email"
          name="email"
          placeholder="Tu Email" />
      </div>
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
        value="Iniciar Sesión" />
    </form>
    <div class="acciones">
      <a href="/crear">¿Aún no tienes cuenta?</a>
      <a href="/olvide">¿Olvidaste tu contraseña?</a>
    </div>
  </div>
</div>