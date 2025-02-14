<div class="contenedor olvide">
  <?php include_once __DIR__ . '/../templates/nombre-sitio.php' ?>
  <div class="contenedor-sm">
    <p class="descripcion-pagina">Recupera tu acceso</p>
    <form class="formulario" action="/olvide" method="post">
      <div class="campo">
        <label for="email">Email</label>
        <input
          type="email"
          id="email"
          name="email"
          placeholder="Tu Email" />
      </div>

      <input
        type="submit"
        class="boton"
        value="Enviar Instrucciones" />
    </form>
    <div class="acciones">
      <a href="/">¿Ya tienes cuenta? Iniciar Secion</a>
      <a href="/crear">¿Aún no tienes cuenta?</a>
    </div>
  </div>
</div>