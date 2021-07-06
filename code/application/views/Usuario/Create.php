<div class="container ">
  <div class="abs-center ">
    <h1 class="text-light">Crear usuario</h1>

    <form action="<?=base_url()?>/usuario/createPost" method="post" class=" form " style="margin-top:20px">
      <div class="form-group">
        <label for="nombre" class="text-light">Nombre</label>
        <input type="nombre" name="nombre" id="nombre" class="form-control input ">
      </div>
      <div class="form-group">
        <label for="password" class="text-light">Contraseña</label>
        <input type="password" name="password" id="password" class="form-control input">
      </div>
      <button type="submit" class="btn btn-white bg-danger text-white">Crear</button>
    </form>
  </div>
</div>
