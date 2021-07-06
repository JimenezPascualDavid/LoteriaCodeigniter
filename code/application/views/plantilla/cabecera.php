<html>
<head>
<link rel="stylesheet" href="<?=base_url();?>/boot/css/bootstrap.min.css">
<script type="text/javascript" src="<?=base_url().'/boot/js/bootstrap.min.js'?>"></script>
<style>

.navbar-custom .navbar-brand,
.navbar-custom .navbar-text {
    color: black;
}

.navbar-custom .navbar-nav .nav-link {
    color: rgba(255,255,255,.5);
    padding: .75rem 1rem;
    /* border-radius:33px; */
    border-top-left-radius:33px;
    border-top-right-radius:33px;
}

.navbar-custom .nav-item.active .nav-link,
.navbar-custom .nav-item:hover .nav-link {
    color: #ffffff;
    background-color: #ff574c;
}
a:link, a:visited, a:active {
    text-decoration:none;
    color:red;
    font-weight:bold;
}
</style>
</head>
<?php
if(session_status() == PHP_SESSION_NONE) {
  session_start();
}
?>
<body style="background-image:url(<?=base_url().'/boot/img/n.jpg'?>)" heigth="1366px" width="768px" >
<div class="bg-white">
    <div class="container">
      <div class="row py-2 ">
            <div class="col-6" >
                <b>Loteria Daw2</b>
            </div>
            <div class="col-5 text-right">
                <?php if( !isset($_SESSION['usuario']) ):?>
                    <a href="<?=base_url().'Usuario/Create'?>">Registro</a> |
                    <a href="<?=base_url().'Usuario/Login'?>">Conectar</a>
                <?php else: ?>
                  <img src="<?=base_url().'/boot/ico/user.png'?>" height="20" ></img>
                    Bienvenido <b><?=$_SESSION['usuario']->nombre; ?></b> |
                    <a href="<?=base_url().'Usuario/Logout'?>">Salir</a>
                <?php endif;?>
            </div>
      </div>
    </div>
</div>

  <div class="bg-white">
    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-custom bg-white" style="padding-left: 0px;">
          <a class="navbar-brand" href="<?=base_url()?>">Menú</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCustom" >

            <ul class="navbar-nav ">
              <?php if(isset($_SESSION['usuario'])&&$_SESSION['usuario']->nombre!='admin'):?>
                <li class="nav-item active">
                <a class="nav-link"  href="<?=base_url();?>Usuario/Opciones">Opciones</a>
                </li>
              <?php endif; ?>

              <?php if(isset($_SESSION['usuario'])&& $_SESSION['usuario']->nombre=='admin'):?>

                  <li class="nav-item active">
                    <a class="nav-link" href="<?=base_url();?>premio/opciones">Administrar premios</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="<?=base_url();?>usuario/opciones">Opciones</a>
                  </li>
            </ul>
        <?php endif; ?>
          </div>
        </nav>
    </div>
  </div>
