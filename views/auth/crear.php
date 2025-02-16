<div class="contenedor crear">
  <?php include_once __DIR__ . '/../templates/nombre-sitio.php' ?>
  <div class="contenedor-sm">
    <p class="descripcion-pagina">Crea tu cuenta en UpTask</p>
    <form class="formulario" action="/crear" method="post">
      <div class="campo">
        <label for="nombre">Nombre</label>
        <input
          type="text"
          id="nombre"
          name="nombre"
          placeholder="Tu nombre" />
      </div>
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
      <div class="campo">
        <label for="password2">Repetir Password</label>
        <input
          type="password"
          id="password2"
          name="password2"
          placeholder="Repite tu Password" />
      </div>

      <input
        type="submit"
        class="boton"
        value="Crear Cuenta" />
    </form>
    <div class="acciones">
      <a href="/">¿Ya tienes cuenta?</a>
      <a href="/olvide">¿Olvidaste tu contraseña?</a>
    </div>
  </div>
</div>