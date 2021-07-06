<div class="container">
    <div   style="margin-top:20px;margin-left:150px;background-image:url(<?=base_url().'/boot/img/boleto.jpg'?>); width:820px;height:400px;background-size: 100% 100%;" >

        <form action="<?= base_url()?>Boleto/CreatePost" method="post">
        <input type="number" name="numero" style="background-color:transparent;margin-top:90px;margin-left:280px;width:380;" maxlength="5">

    </div>

        <input type="hidden" name="UsuarioActivo" value="<?= $_SESSION['usuario']->id?>">
        <input type="submit" class="btn btn-danger btn-lg d-block mx-auto" style="color:white;" value="Añadir Boleto">
        </form>
</div>