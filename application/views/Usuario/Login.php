<div class="container">
  <div class="abs-center">
    <h1 class="text-light">Login</h1>
    <p style="margin-left:900px;color:white"><p style="float:right"><b style="color:white;text-shadow: 0.1em 0.1em 0.05em #333">Si no tiene una cuenta</b><a href="<?=base_url();?>Usuario/Create" class="btn btn-info" role="button" style="margin-left:30px;color:white;">Crear cuenta</a></p>
    <form action="<?=base_url()?>usuario/loginPost" method="post" class="form" style="margin-top:20px">
      <label for="nombre" class="text-light">Nombre</label>
      <input type="text" name="nombre" id="nombre" class="form-control input " placeholder="Nombre de usuario">
      </div>
      <div class="form-group">
          <label for="password" class="text-light ">Contraseña</label>
          <input type="password" name="password" id="password" class="form-control input" placeholder="Inserte la contraseña usuario">
      </div>
        <button type="submit" class="btn btn-white bg-danger text-white">Acceder</button>
    </form>
  </div>
</div>